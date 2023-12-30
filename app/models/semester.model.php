<?php

class Semester extends Model
{
  public function __construct()
  {
    parent::__construct();
    $this->_table = 'semester';
    $this->select();
  }

  public function getAll()
  {
    $this->query("SELECT * FROM semester ");
    return $this;
  }
}
