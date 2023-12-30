<?php

class Mahasiswa extends Model
{
  public function __construct()
  {
    parent::__construct();
    $this->_table = 'mahasiswa';
    $this->select();
  }

  public function getAll()
  {
    $this->query("SELECT * FROM mahasiswa 
      JOIN jurusan ON
      mahasiswa.jurusan = jurusan.id_jurusan
      JOIN semester ON
      mahasiswa.semester = semester.id_semester
      JOIN kelas ON
      mahasiswa.kelas = kelas.id_kelas
      ");

    return $this;
  }

  public function getById($id)
  {
    $this->query("SELECT * FROM mahasiswa WHERE id_mahasiswa = $id ")->get();
    return $this;
  }
  public function store(array $data)
  {
    try {
      $dbh = $this->_dbh;
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $st = $dbh->prepare("INSERT INTO mahasiswa VALUES (
            :id_mahasiswa, 
            :nama_mahasiswa ,
            :nim ,
            :jurusan ,
            :kelas ,
            :ttl ,
            :alamat ,
            :semester ,
            :avatars ,
            :password
        )");

      // Pastikan kunci dalam $data sesuai dengan parameter yang diikat dalam query
      $st->execute($data);
    } catch (PDOException $e) {
      // Handle errors appropriately, e.g., log them or provide a generic error message
      echo "Error: " . $e->getMessage();
    }
  }
}
