<?php


class Mahasiswa_model
{

  private $dbh;
  private $stmt;

  public function __construct()
  {
    $dsn = 'mysql:host=localhost;dbname=mvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }



  // private $mhs = [
  // //   [
  // //     "nama" => "Reza",
  // //     "nrp" => "203040079",
  // //     "email" => "gmail.com",
  // //     "jurusan" => "Teknik Informatika"
  // //   ],

  // //   [
  // //     "nama" => "Adam",
  // //     "nrp" => "2033040078",
  // //     "email" => "gmail.com",
  // //     "jurusan" => "Teknik Informatika"
  // //   ],

  // //   [
  // //     "nama" => "Ramiel",
  // //     "nrp" => "203004077",
  // //     "email" => "gmail.com",
  // //     "jurusan" => "Teknik Informatika"
  // //   ]


  // // ];

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
