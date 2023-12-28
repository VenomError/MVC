<?php

use app\controllers\MainController;

class PegawaiController extends MainController
{

  function __construct()
  {
    parent::__construct();
    $this->model('pegawai');
  }
  public function index()
  {
    $data = $this->model('pegawai')->select()->orderBy('id_user', 'DESC')->get();
    $this->template("pegawai", $data);
  }
}
