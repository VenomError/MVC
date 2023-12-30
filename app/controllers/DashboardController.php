

<?php

use app\controllers\MainController;

class DashboardController extends MainController
{
  function __construct()
  {
    parent::__construct();
    $this->model('pegawai');
  }
  public function index()

  {
    $data = [
      "title" => "Dashboard",
      "navbarDashboard" => "active"
    ];
    $this->template('dashboard', $data);
  }
}
