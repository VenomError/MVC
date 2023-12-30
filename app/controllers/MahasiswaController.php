

<?php

use app\controllers\MainController;

class MahasiswaController extends MainController
{
  function __construct()
  {

    parent::__construct();
    $this->model('mahasiswa');
  }
  public function index()
  {
    $data = [
      'mahasiswa' => $this->model('mahasiswa')->getAll()->get(),
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
        ],
        [
          'child' => 'Create',
          'master' => 'mahasiswa/create',
        ],
      ];
    $data = [
      'mahasiswa' => $this->model('mahasiswa')->getAll()->get(),
      'jurusan' => $this->model('jurusan')->getAll()->get(),
      'semester' => $this->model('semester')->getAll()->get(),
      'kelas' => $this->model('kelas')->getAll()->get(),
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
        ':id_mahasiswa' => 'null',  // Use null instead of 'NULL'
        ':nama_mahasiswa' => $_POST['nama'],
        ':nim' => $_POST['nim'],
        ':jurusan' => $_POST['jurusan'],
        ':kelas' => $_POST['kelas'],
        ':ttl' => $_POST['ttl'],
        ':alamat' => $_POST['alamat'],
        ':semester' => $_POST['semester'],
        ':avatars' => $avatar,
        ':password' => $_POST['password']
      ];

      $this->model('mahasiswa')->store($data);
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
    $d = $this->model('mahasiswa')->getById($id)->get();
    $path = ROOT . DS . 'public' . DS . 'assets' . DS . 'avatars' . DS . $d[0]['avatars'];

    unlink($path);
    $row = 'id_mahasiswa';
    if ($this->model('mahasiswa')->delete($row, $id)) {

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
}
