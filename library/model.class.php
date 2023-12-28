<?php

class Model
{

  protected $_dbh;
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
    try {
      $this->_dbh = new PDO("" . DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
      $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Koneksi gagal" . $e->getMessage();
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
          $this->_where .= " $cond[0] $cond[1] $cond[2] AND ";
        } else {
          $this->_where .= " $condition[0] $condition[1] '$condition[2]' AND ";
          break;
        }
      }
      $this->_where = substr($this->_where, 0, -5); // Ubah -3 menjadi -5
    }
    return $this;
  }

  public function orderBy($col, $by = "ASC")
  {
    $this->_order = " ORDER BY $col $by ";
    return $this;
  }

  public function limit($value1, $value2 = 0)
  {
    if ($value2 == 0) $this->_limit = " LIMIT $value1 ";
    else $this->_limit = " LIMIT $value1 , $value2 ";
    return $this;
  }

  public function join($table, $param, $join = " JOIN ")
  {
    $this->_join = "";
    if (is_array($table)) {
      foreach ($table as $tbl) {
        $this->_join .= " $join $tbl ";
      }
    } else {
      $this->_join .= " $join $table ";
    }
    foreach ($param as $key => $val) {
      $this->_join .= " ON $key = $val ";
    }
    return $this;
  }

  public function get()
  {
    try {
      if ($this->_sql == NULL) {
        $sql = $this->_select . " " . $this->_join . " " . $this->_where . " " . $this->_order . " " . $this->_limit;
      } else {
        $sql = $this->_sql;
      }
      $query = $this->_dbh->query($sql);
      $data = array();
      while ($row = $query->fetch()) {
        array_push($data, $row);
      }
      return $data;
    } catch (PDOException $e) {
      die("Tidak dapat menampilkan data: " . $e->getMessage());
    }
  }

  public function count()
  {
    try {
      if ($this->_sql == NULL) {
        $sql = $this->_select . " " . $this->_join . " " . $this->_where . " " . $this->_order . " " . $this->_limit;
      } else {
        $sql = $this->_sql;
      }
      $query = $this->_dbh->query($sql);
      return $query->rowCount();
    } catch (PDOException $e) {
      die("Tidak Dapat Menampilkan Jumlah" . $e->getMessage());
    }
  }

  public function data($data)
  {
    $this->_data = "";
    foreach ($data as $key => $value) {
      $this->_data .= " $key='$value' ,";
    }
    $this->_data = substr($this->_data, 0, -1);
    return $this;
  }

  public function insert()
  {
    try {
      $sql = " INSERT INTO " . $this->_table . " SET " . $this->_data;
      return $this->_dbh->query($sql);
    } catch (PDOException $e) {
      die("Tidak Dapat Menyimpan Data" . $e->getMessage());
    }
  }

  public function find($id)
  {
    $this->_primary = " id  " . $this->_table;
    $this->_where = " WHERE $this->_primary=$id ";
    return $this;
  }

  public function update($condition = " WHERE ", $data = " id = 0")
  {
    try {
      $sql = " UPDATE " . $this->_table . " SET " . $this->_data . " " . $condition . " " . $data;
      return $this->_dbh->query($sql);
    } catch (PDOException $e) {
      die("Tidak Dapat Memperbarui" . $e->getMessage());
    }
  }

  public function delete($row = '', $object = '')
  {

    try {

      $sql = "DELETE FROM " . $this->_table . " WHERE " . $row . " = " . $object;
      return $this->_dbh->query($sql);
    } catch (PDOException $e) {
      die("Tidak Dapat Menghapus data : " . $e->getMessage());
    }
  }
  public function __destruct()
  {
    $this->_dbh = NULL;
  }
}
