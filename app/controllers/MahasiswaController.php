

<?php

use app\controllers\MainController;

class MahasiswaController extends MainController
{

  // public function index()
  // {
  //   // Buat objek Model
  //   $model = new Model();

  //   // Contoh pengambilan data tanpa filter
  //   $dataAll = $this->model('mahasiswa')->select()->get();
  //   var_dump($dataAll);

  //   // Contoh pengambilan data dengan filter
  //   $dataFiltered = $model->table('jurusan')->select()->where(['id_jurusan' => '95'])->get();
  //   // var_dump($dataFiltered);

  //   // Contoh pengambilan data dengan filter, order, dan limit
  //   $dataWithOptions = $model->table('jurusan')->select()->where(['id_jurusan' => '95'])->orderBy('id_jurusan', 'DESC')->limit(5)->get();
  //   // var_dump($dataWithOptions);
  // }
  function __construct()
  {

    parent::__construct();
    $this->model('mahasiswa');
  }
  public function index()
  {
    $data = [
      'mahasiswa' => $this->model('mahasiswa')
        ->select('mahasiswa.*, jurusan.nama_jurusan, semester.nama_semester, kelas.nama_kelas')
        ->join('jurusan', 'mahasiswa.jurusan = jurusan.id_jurusan')
        ->join('semester', 'mahasiswa.semester = semester.id_semester')
        ->join('kelas', 'mahasiswa.kelas = kelas.id_kelas')
        ->get(),
      'title' => 'Mahasiswa',
      'navbarMHS' => 'active',
    ];
    $this->template('mahasiswa/mahasiswa', $data);
  }

  public function create()
  {
    $bread =
      [
        [
          'child' => 'Mahasiswa',
          'master' => 'mahasiswa',
          'text' => 'dark',

        ],
        [
          'child' => 'Create',
          'master' => 'mahasiswa/create',
          'text' => 'primary',

        ],
      ];
    $data = [
      'mahasiswa' => $this->model('mahasiswa')->select()->get(),
      'jurusan' => $this->model('jurusan')->select()->get(),
      'semester' => $this->model('semester')->select()->get(),
      'kelas' => $this->model('kelas')->select()->get(),
      'navbarMHS' => 'active',
      'title' => 'Mahasiswa',
      'bread' => $bread
    ];

    $this->template('mahasiswa/create', $data);
  }


  public function store()
  {
    if (isset($_POST['create'])) {
      $avatar = $this->model('mahasiswa')->uploadAvatar($_FILES['avatars']);
      $data = [
        'id_mahasiswa' => 'null',  // Gunakan null bukan 'NULL'
        'nama_mahasiswa' => $_POST['nama'],
        'nim' => $_POST['nim'],
        'jurusan' => $_POST['jurusan'],
        'kelas' => $_POST['kelas'],
        'ttl' => $_POST['ttl'],
        'alamat' => $_POST['alamat'],
        'semester' => $_POST['semester'],
        'avatars' => $avatar,
        'password' => $_POST['password']
      ];

      $this->model('mahasiswa')->create($data);
      $msg = [
        'msg' => 'success',
      ];
      $this->redirectData('mahasiswa/create', $msg['msg']);
    } else {
      $msg = [
        'msg' => 'success',
      ];
      $this->redirectData('mahasiswa/create', $msg['msg']);
    }
  }


  public function delete($id)
  {
    $data = $this->model('mahasiswa')->select()->where(['id_mahasiswa' => $id])->find($id);
    // echo $data['avatars'];
    if ($data) {
      $path = ROOT . DS . 'public' . DS . 'assets' . DS . 'avatars' . DS . $data['avatars'];

      // Hapus file gambar
      unlink($path);
    } else {
      echo "Data not found"; // Handle jika data tidak ditemukan
    }
    if ($this->model('mahasiswa')->where(['id_mahasiswa' => $id])->delete()) {

      $msg = [
        'msg' => 'success',
      ];
      $this->redirectData('mahasiswa', $msg['msg']);
    } else {
      $msg = [
        'msg' => 'error',
      ];
      $this->redirectData('mahasiswa', $msg['msg']);
    }
  }

  public function edit($id)
  {
    if (empty($id)) {
      $this->redirect('mahasiswa');
    } else {
      $bread = [
        [
          'child' => 'Mahasiswa',
          'master' => 'mahasiswa',
          'text' => 'dark',
        ],
        [
          'child' => 'Edit',
          'master' => 'mahasiswa/edit',
          'text' => 'primary',
        ],
      ];

      $modelMahasiswa = $this->model('mahasiswa');
      $mahasiswaData = $modelMahasiswa->select()
        ->where(['id_mahasiswa' => $id])
        ->find($id);

      if ($mahasiswaData) {
        // Data ditemukan, lanjutkan dengan menampilkan formulir edit
        $data = [
          'mahasiswa' => $mahasiswaData,
          'jurusan' => $this->model('jurusan')->select()->get(),
          'semester' => $this->model('semester')->select()->get(),
          'kelas' => $this->model('kelas')->select()->get(),
          'navbarMHS' => 'active',
          'title' => 'Mahasiswa',
          'bread' => $bread,
        ];
        $this->template('mahasiswa/edit', $data);
      } else {
        // Data tidak ditemukan, redirect ke halaman tertentu atau tampilkan pesan kesalahan
        $this->redirect('mahasiswa'); // Ganti 'error' dengan halaman yang sesuai
      }
    }
  }

  public function update()
  {
    if (isset($_POST['edit'])) {
      if (empty($_FILES['avatars']['name'])) {
        // Jika tidak ada file yang diunggah (kosong)
        $avatars = $_POST['avatarsOld'];
      } else {
        // Jika ada file yang diunggah
        $avatars = $this->model('mahasiswa')->uploadAvatar($_FILES['avatars']);
        $path = ROOT . DS . 'public' . DS . 'assets' . DS . 'avatars' . DS . $_POST['avatarsOld'];

        // Hapus file gambar
        unlink($path);
      }
      $data = [
        'nama_mahasiswa' => $_POST['nama'],
        'nim' => $_POST['nim'],
        'jurusan' => $_POST['jurusan'],
        'kelas' => $_POST['kelas'],
        'ttl' => $_POST['ttl'],
        'alamat' => $_POST['alamat'],
        'semester' => $_POST['semester'],
        'avatars' => $avatars,
        'password' => $_POST['password']
      ];
      try {
        $this->model('mahasiswa')->where(['id_mahasiswa' => $_POST['id']])->update($data);
        $msg = [
          'msg' => 'success',
        ];
        $this->redirectData('mahasiswa', $msg['msg']);
      } catch (PDOException $e) {
        $msg = [
          'msg' => 'error',
        ];
        $this->redirectData('mahasiswa', $msg['msg']);
      }
    } else {
      $msg = [
        'msg' => 'success',
      ];
      $this->redirectData('mahasiswa', $msg['msg']);
    }
  }
}
