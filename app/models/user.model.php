<?php

class user extends Model
{
  public function __construct()
  {
    parent::__construct();
    $this->_table = "tabel_user";
    $this->select();
  }
}
