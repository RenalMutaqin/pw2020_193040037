<?php
require 'functions.php';

if (isset($_GET['cari'])) {
  $keywords = $_GET['keyword'];
  $makanan = query("SELECT * FROM makanan WHERE
  Nama_Makanan LIKE '%$keywords%' OR
  Asal_Makanan LIKE '%$keyword%' OR
  Bahan_Makanan LIKE '%$keyword%' OR
  Jenis LIKE '%$keyword%' OR
   Harga LIKE '%$keyword%' ");
} else {


  $makanan = query("SELECT * FROM makanan");
}
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
    <br>

    <form action="" method="POST">
      <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
      <button type="submit" name="cari">Cari!</button>
    </form>
    <br>
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
    <?php if (empty($makanan)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data Tidak Ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>

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
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body>

</html>