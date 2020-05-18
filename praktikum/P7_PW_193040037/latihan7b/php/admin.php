<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melalukan query
$alat_musik = query("SELECT * FROM makanan ORDER BY makanan ASC");

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $alat_musik = query(
    "SELECT * FROM  makanan WHERE
        Nama_Makanan LIKE '%$keywords%' OR
  Asal_Makanan LIKE '%$keyword%' OR
  Bahan_Makanan LIKE '%$keyword%' OR
  Jenis LIKE '%$keyword%' OR
   Harga LIKE '%$keyword%'
        "
  );
} else {
  $makanan = query("SELECT * FROM makanan");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin.css">
  <title>Admin</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php"><button>Tambah Data</button></a>
  </div><br>
  <form action="" method="GET">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form><br>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr class="fieldname">
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
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($makanan as $mm) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $am['id'] ?>" class="ubah"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $am['id'] ?>" onclick="return confirm('Apakah anda yakin ingin Menghapus Data ???')" class="hapus"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $m['Gambar']; ?>" alt=""></td>
          <td><?= $m['Nama_Makanan']; ?></td>
          <td><?= $m['Asal_Makanan']; ?></td>
          <td><?= $m['Bahan_Makanan']; ?></td>
          <td><?= $m['Jenis']; ?></td>
          <td>Rp <?= $m['Harga']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>
</body>

</html>