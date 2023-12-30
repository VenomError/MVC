<?php

use app\controllers\MainController;

class LoginController extends MainController
{
  public function index()
  {
    $data = [
      "title" => "login"
    ];
    $this->loginTemplate("login", $data);
  }

  public function check()
  {
    $this->model("user");

    $username = $this->validate($_POST['username']);
    $password = $this->validate($_POST['password']);

    $data = $this->model('user')->select()->where([
      ['username', '=', "'$username'"],
      ['password', '=', "'$password'"]
    ])->limit(1)->get();
    // echo json_encode($data);
    $jml = $this->model('user')->count();
    if ($jml > 0) {
      $_SESSION['username'] = $data[0]['username'];
      $_SESSION['password'] = $data[0]['password'];
      // $this->redirect('dashboard');
      $view = $this->view('login');
      $view->bind('msg', 'Login Failed !');
    } else {
      $view = $this->view('login');
      $view->bind('msg', 'Login Failed !');
    }
  }

  public function  logout()
  {
    session_destroy();
    $this->redirect('login');
  }
}
