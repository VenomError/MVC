<?php

class Jurusan extends Model
{
  public function __construct()
  {
    parent::__construct();
    $this->_table = 'jurusan';
    // $this->select();
  }

  public function getAll()
  {
    $this->query("SELECT * FROM jurusan ");
    return $this;
  }
}
