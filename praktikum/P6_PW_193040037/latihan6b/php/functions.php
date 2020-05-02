<?php
//function untuk melakukan koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
  mysqli_select_db($conn, "tubes_193040037") or die("Database Salah!");

  return $conn;
}

//function untuk melakukan query ke database
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
  $Nama_Makanan = htmlspecialchars($data['Nama_Makanan']);
  $Asal_Makanan = htmlspecialchars($data['Asal_Makanan']);
  $Bahan_Makanan = htmlspecialchars($data['Bahan_Makanan']);
  $Jenis = htmlspecialchars($data['Jenis']);
  $Harga = htmlspecialchars($data['Harga']);
  $Gambar = htmlspecialchars($data['Gambar']);

  $query = "INSERT INTO
  makanan
  Values
  (null, '$Nama_Makanan','$Asal_Makanan','$Bahan_Makanan','$Jenis','$Harga','$Gambar')";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
