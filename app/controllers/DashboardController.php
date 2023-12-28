

<?php

use app\controllers\MainController;

class DashboardController extends MainController
{
  public function index()

  {
    $this->template('dashboard');
  }
}
