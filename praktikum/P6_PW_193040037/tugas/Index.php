<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan6a_193040012</title>

  <style>
    .container {
      border: 4px solid black;

      background-color: lightblue;

      width: 300px;
      height: 300px;
      margin: auto;
      padding: 30px 0 20px 20px;
      font-family: arial;
      font-size: x-large;
    }

    a:link {
      color: black;

    }

    a:hover {
      text-decoration: none;
      color: white;

    }

    a:active {
      text-decoration: none;
    }
  </style>

</head>

<body>
  <h1>
    <center>DAFTAR MAKANAN</center>
  </h1>

  <form action="" method="POST">
    <center><input type="text" name="keyword" size="20" placeholder="masukan pencarian.." autocomplete="off" autofocus>
      <button type="submit" name="cari">Cari!</button></center>
  </form>

  <br>

  <div class="container">

    <?php if (empty($makanan)) : ?>
      <tr>
        <td colspan="4">
          <h1 style="color: red; font-style: italic; font-size: large;">Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php endif; ?>




    <?php foreach ($makanan as $mkn) : ?>
      <div class="Nama_Makanan">
        <a href="php/detail.php?id=<?= $mkn['id']; ?>">
          <?= $mkn["Nama_Makanan"]; ?>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
  <h1>
    <center>MAKAN BANG!</center>
  </h1>

  <a href="php/admin.php"><button>Masuk ke halaman admin</button></a>
</body>

</html>