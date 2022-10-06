<?php

function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "prakweb_2022_b_203040079");

  return $conn;
}


function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $kode_buku = htmlspecialchars($data['kode_buku']);
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $penulis_buku = htmlspecialchars($data['penulis_buku']);
  $penerbit_buku = htmlspecialchars($data['penerbit_buku']);
  $tahun_penerbit = htmlspecialchars($data['tahun_penerbit']);
  $stok = htmlspecialchars($data['stok']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO buku
                    VALUES
                    ('', '$kode_buku', '$judul_buku', '$penulis_buku', '$penerbit_buku', '$tahun_penerbit', '$stok', '$gambar')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id = '$id' ");

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $kode_buku = htmlspecialchars($data['kode_buku']);
  $judul_buku = htmlspecialchars($data['judul_buku']);
  $penulis_buku = htmlspecialchars($data['penulis_buku']);
  $penerbit_buku = htmlspecialchars($data['penerbit_buku']);
  $tahun_penerbit = htmlspecialchars($data['tahun_penerbit']);
  $stok = htmlspecialchars($data['stok']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE buku
            SET
            kode_buku = '$kode_buku',
            judul_buku = '$judul_buku',
            penulis_buku = '$penulis_buku',
            penerbit_buku = '$penerbit_buku',
            tahun_penerbit = '$tahun_penerbit',
            stok = '$stok',
            gambar = '$gambar'
            WHERE id = '$id'
            ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}
