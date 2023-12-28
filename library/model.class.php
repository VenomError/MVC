<?php

class Model
{

  protected $_conn;
  protected $_table;
  protected $_primary;

  private $_sql;
  private $_data;

  private $_select = "";
  private $_join = "";
  private $_where = "";
  private $_order = "";
  private $_limit = "";

  public function __construct()
  {
    $this->_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$this->_conn) {
      die("Error" . mysqli_connect_error());
    }
  }

  public function query($query)
  {
    $this->_sql = $query;
    return $this;
  }

  public function select($column = "")
  {
    if (is_array($column)) {
      $col = implode(",", $column);
    } else {
      $col = "*";
    }
    $this->_select = " SELECT " . $col . " FROM " . $this->_table;
    return $this;
  }

  public function where($condition = "")
  {
    $this->_where = "";
    if (is_array($condition)) {
      $this->_where  .= " WHERE ";
      foreach ($condition as $cond) {
        if (is_array($cond)) {
          $this->_where .=  " $cond[0] $cond[1] $cond[2] AND ";
        } else {
          $this->_where .=  " $condition[0] $condition[1] $condition[2] AND  ";
          break;
        }
      }
      $this->_where = substr($this->_where, 0, -3);
    }
    return $this;
  }



  public function __destruct()
  {
    $this->_conn->close();
  }
}
