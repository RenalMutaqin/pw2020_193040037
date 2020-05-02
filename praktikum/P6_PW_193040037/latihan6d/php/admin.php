<?php
require 'functions.php';

$makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan6d_193040037</title>

  <style>
    table {
      background: lightseagreen;
    }

    img {
      width: 100px;
      height: 100px;
      border: 2px lightseagreen;
    }

    th {
      background: lightseagreen;
    }

    button {
      background: pink;
      color: black;
      font-size: medium;
    }
  </style>

</head>

<body>
  <div class="add">
    <a href="tambah.php"><button>Tambah Data</button></a>
    <br></br>
  </div>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Nama Makanan</th>
      <th>Asal Makanan</th>
      <th>Bahan Makanan</th>
      <th>Jenis</th>
      <th>Harga</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($makanan as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td>
          <a href="ubah.php?id= <?= $m['id'] ?>"><button>Ubah</button></a>
          <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $m['Gambar']; ?>"></td>
        <td><?= $m['Nama_Makanan']; ?></td>
        <td><?= $m['Asal_Makanan']; ?></td>
        <td><?= $m['Bahan_Makanan']; ?></td>
        <td><?= $m['Jenis']; ?></td>
        <td><?= $m['Harga']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>