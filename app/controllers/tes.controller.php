<?php

class TesController extends Controller
{
  public function index()
  {
    $this->model('tes');
  }
  public function back()
  {
    $this->redirect('tes/kon');
  }
}
