

<?php

use app\controllers\MainController;

class JurusanController extends MainController
{
  function __construct()
  {

    parent::__construct();
    $this->model('jurusan');
  }
  public function index()
  {
    $data = [
      'jurusan' => $this->model('jurusan')->select()->get(),
      'count' => $this->model('jurusan')->count(),
      'title' => 'Jurusan',
      'navbarJurusan' => 'active',
    ];
    $this->template('jurusan/jurusan', $data);
  }

  // public function create()
  // {
  //   $bread =
  //     [
  //       [
  //         'child' => 'Mahasiswa',
  //         'master' => 'mahasiswa',
  //         'master' => 'mahasiswa',
  //       ],
  //       [
  //         'child' => 'Create',
  //         'master' => 'mahasiswa/create',
  //       ],
  //     ];
  //   $data = [
  //     'mahasiswa' => $this->model('mahasiswa')->getAll()->get(),
  //     'jurusan' => $this->model('jurusan')->getAll()->get(),
  //     'semester' => $this->model('semester')->getAll()->get(),
  //     'kelas' => $this->model('kelas')->getAll()->get(),
  //     'navbarMHS' => 'active',
  //     'title' => 'Mahasiswa',
  //     'bread' => $bread
  //   ];

  //   $this->template('mahasiswa/create', $data);
  // }


  public function store()
  {
    if (isset($_POST['create'])) {
      $data = [
        'nama_jurusan' => $_POST['nama'],
      ];

      try {
        $this->model('jurusan')->create($data);
        $msg = [
          'msg' => 'success',
        ];
        $this->redirectData('jurusan', $msg['msg']);
      } catch (Exception $e) {
        // Tangkap dan tangani eksepsi
        $msg = [
          'msg' => 'error',
          'error' => $e->getMessage(),
        ];
        $this->redirectData('jurusan', $msg['msg']);
      }
    }
  }


  public function delete($id)
  {
    try {
      $this->model('jurusan')->where(['id_jurusan' => $id])->delete();

      $msg = [
        'msg' => 'success',
      ];
      $this->redirectData('jurusan', $msg['msg']);
    } catch (PDOException $e) {
      $msg = [
        'msg' => 'error',
      ];
      $this->redirectData('jurusan', $msg['msg']);
    }
  }

  public function edit($id)
  {
    if (empty($id)) {
      $msg = [
        'msg' => 'error',
      ];
      $this->redirectData('jurusan', $msg['msg']);
    } else {

      $bread =
        [
          [
            'child' => 'Jurusan',
            'master' => 'jurusan',
            'text' => 'dark',
          ],
          [
            'child' => 'Edit',
            'master' => 'jurusan/edit/' . $id . '',
            'text' => 'primary',
          ],
        ];
      $data = [
        'navbarJurusan' => 'active',
        'title' => 'Mahasiswa',
        'bread' => $bread,
        'id_jurusan' => $id,
        'jurusan' => $this->model('jurusan')->select()->where(['id_jurusan' => $id])->get()
      ];
      $this->template('jurusan/edit', $data);
    }
  }

  public function update()
  {
    $id = isset($_POST['id']) ? $_POST['id'] : null; // Memastikan bahwa $_POST['id'] ada sebelum digunakan
    $namaJurusan = isset($_POST['nama']) ? $_POST['nama'] : null; // Memastikan bahwa $_POST['nama'] ada sebelum digunakan

    if ($id !== null && $namaJurusan !== null) {
      // Menghindari SQL injection dengan menggunakan parameter terikat


      // Memanggil fungsi updateJurusan dengan data yang aman
      $this->model('jurusan')->where(['id_jurusan' => $id])->update(['nama_jurusan' => $namaJurusan]);
      $msg = [
        'msg' => 'success',
      ];
      $this->redirectData('jurusan', $msg['msg']);
    } else {
      // // Handle kesalahan jika 'id' atau 'nama' tidak tersedia dalam $_POST
      // echo "Error: Missing 'id' or 'nama' in the POST data.";
      $msg = [
        'msg' => 'error',
      ];
      $this->redirectData('jurusan', $msg['msg']);
    }
  }
}
