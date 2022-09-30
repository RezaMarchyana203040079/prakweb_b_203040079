<?php

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    documents.location.href = '../index.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
                    documents.location.href = '../index.php';
                </script>";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pw_203040079</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="tambahall">
    <div class="containertambah">
        <h3>Form Tambah data buku</h3>
        <form action="" method="POST">
            <ul>
                <li class="katatambah">
                    <label for="kode_buku">kode buku : </label><br>
                    <input type="text" name="kode_buku" id="kode_buku" required autocomplete="off"><br><br>
                </li>
                <li class="katatambah">
                    <label for="judul_buku">judul_buku : </label><br>
                    <input type="text" name="judul_buku" id="judul_buku" required autocomplete="off"></input><br><br>
                </li>
                <li class="katatambah">
                    <label for="penulis_buku">penulis_buku : </label><br>
                    <input type="text" name="penulis_buku" id="penulis_buku" required autocomplete="off"><br><br>
                </li>
                <li class="katatambah">
                    <label for="penerbit_buku">penerbit_buku : </label><br>
                    <input type="text" name="penerbit_buku" id="penerbit_buku" required autocomplete="off"><br><br>
                </li>
                <li class="katatambah">
                    <label for="tahun_penerbit">tahun_penerbit : </label><br>
                    <input type="text" name="tahun_penerbit" id="tahun_penerbit" required autocomplete="off"><br><br>
                </li>
                <li class="katatambah">
                    <label for="stok">stok : </label><br>
                    <input type="text" name="stok" id="stok" required autocomplete="off"><br><br>
                </li>
                <li class="katatambah">
                    <label for="gambar">Gambar : </label><br>
                    <input type="text" name="gambar" id="gambar" required autocomplete="off"><br><br>
                </li>

                <br>
                <button class="up" type="submit" name="tambah">Tambah data!</button>
                <button class="tombol2" type="submit">
                    <a href="../index.php" class="tombol-kembali">Kembali</a>
                </button>
            </ul>
        </form>
    </div>
</body>

</html>