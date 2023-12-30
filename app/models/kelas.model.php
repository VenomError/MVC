<?php

class Kelas extends Model
{
  public function __construct()
  {
    parent::__construct();
    $this->_table = 'kelas';
    $this->select();
  }

  public function getAll()
  {
    $this->query("SELECT * FROM kelas ");
    return $this;
  }
}
