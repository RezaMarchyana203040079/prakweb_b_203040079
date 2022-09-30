<?php



require 'php/functions.php';

$buku = query("SELECT * FROM buku");

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>prakweb_b_203040079</title>
  <link rel="stylesheet" href="css/style.css">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body class="luar">
  <h1 class="judul">Almanac Store.</h1>
  <div class="add2">
    <a href="php/tambah.php">Tambah Data</a>
  </div>
  <br>
  <br>
  <br>
  <table class="tabel" border="1" cellpadding="13" cellspacing="0">
    <tr class="top">
      <th>#</th>
      <th>opsi</th>
      <th>kode</th>
      <th>judul</th>
      <th>penulis</th>
      <th>penerbit</th>
      <th>tahun terbit</th>
      <th>stok</th>
      <th>gambar</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $bu) : ?>
      <tr class="isi">
        <td><?= $i ?></td>
        <td>
          <a href="php/ubah.php?id=<?= $bu['id_buku'] ?>"><button class="ubah">Ubah</button></a>
          <a href="php/hapus.php?id=<?= $bu['id_buku'] ?>" onclick="return confirm('Hapus data??')"><button class="hapus">Hapus</button></a>
        </td>
        <td><?= $bu['kode_buku']; ?></td>
        <td><?= $bu['judul_buku']; ?></td>
        <td><?= $bu['penulis_buku']; ?></td>
        <td><?= $bu['penerbit_buku']; ?></td>
        <td><?= $bu['tahun_penerbit']; ?></td>
        <td><?= $bu['stok']; ?></td>
        <td><img class="ukuran" src="assets/img/<?= $bu['gambar']; ?>" alt=""></td>

      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>

  <footer class="page-footer blue-grey darken-4 center white-text">
    <div class="container">
      <p class="flow-text">RezaMarchyana. Copyright 2022.</p>
    </div>
  </footer>

</body>

</html>