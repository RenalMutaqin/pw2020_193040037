<?php
//mengecek apakah ada id yang dikirimkan
//jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}
require 'functions.php';
//mengambil id dari url
$id = $_GET['id'];
//Melakukan query dengan parameter id yang diambil dari url
$mkn = query("SELECT * FROM makanan WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>

</style>

<body>
  <div style="background-color: lightseagreen; border: 1px solid #17202A; height:auto; margin:10px 0px; padding:5px; text-align:left; width:250px;">
    <div class="container">
      <div class="Gambar">
        <img width="120px" src="../assets/img/<?= $mkn["Gambar"]; ?>" alt="">
      </div>
      <div class="keterangan">
        <p><?= $mkn["Nama_Makanan"]; ?></p>
        <p><?= $mkn["Asal_Makanan"]; ?></p>
        <p><?= $mkn["Bahan_Makanan"]; ?></p>
        <p><?= $mkn["Jenis"]; ?></p>
        <p><?= $mkn["Harga"]; ?></p>
      </div>
    </div>

    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
  </div>

</body>

</html>