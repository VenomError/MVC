<?php

class Jurusan extends Model
{
  public function __construct()
  {
    parent::__construct();
    $this->table('jurusan');
    $this->setIdColumn('id_jurusan');
  }

  // public function getAll()
  // {
  //   $this->query("SELECT * FROM jurusan ");
  //   return $this;
  // }
  // public function getById($id)
  // {
  //   $this->query("SELECT * FROM jurusan WHERE id_jurusan = $id ")->get();
  //   return $this;
  // }

  // public function get_mhs_by_id($id)
  // {
  //   $this->query("SELECT * FROM mahasiswa where jurusan = $id ")->count();
  //   return $this;
  // }

  // public function store(array $data)
  // {
  //   try {
  //     $dbh = $this->_dbh;
  //     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //     $st = $dbh->prepare("INSERT INTO jurusan VALUES (
  //           :id_jurusan, 
  //           :nama_jurusan 
  //       )");

  //     // Pastikan kunci dalam $data sesuai dengan parameter yang diikat dalam query
  //     $st->execute($data);
  //   } catch (PDOException $e) {
  //     // Handle errors appropriately, e.g., log them or provide a generic error message
  //     echo "Error: " . $e->getMessage();
  //   }
  // }
  // public function updateJurusan(array $data)
  // {
  //   try {
  //     $dbh = $this->_dbh;
  //     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //     // Membangun bagian SET dari query
  //     $setClause = '';
  //     foreach ($data as $k => $v) {
  //       // Gunakan tanda tanya sebagai placeholder untuk nama kolom dan nilai agar mencegah SQL injection
  //       $setClause .= "$k=:$k, ";
  //     }
  //     // Hapus tanda koma dan spasi di akhir
  //     $setClause = rtrim($setClause, ', ');

  //     // Persiapkan query SQL lengkap
  //     $sql = "UPDATE jurusan SET $setClause WHERE id_jurusan = :id_jurusan";
  //     $st = $dbh->prepare($sql);

  //     // Ikatan nilai untuk klausa SET
  //     foreach ($data as $k => $v) {
  //       $st->bindValue(":$k", $v);
  //     }
  //     // Ikatan nilai untuk klausa WHERE
  //     $st->bindValue(':id_jurusan', $data['id_jurusan']);

  //     // Jalankan pernyataan yang telah dipersiapkan
  //     $st->execute();
  //   } catch (PDOException $e) {
  //     // Tangani kesalahan dengan tepat, misalnya, log atau berikan pesan kesalahan umum
  //     echo "Error: " . $e->getMessage();
  //   }
  // }
}
