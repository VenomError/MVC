

<?php

use app\controllers\MainController;

class DashboardController extends MainController
{
  function __construct()
  {
    parent::__construct();
    $this->model('mahasiswa');
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
