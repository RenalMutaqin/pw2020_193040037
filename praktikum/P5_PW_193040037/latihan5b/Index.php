<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';
//melakukan query
$makanan = query("SELECT * FROM makanan")



?>

<html>

<head>
  <title>Index</title>
</head>

<body>
  <div class="container">
    <table cellpading="10" cellspacing="0" border="1">
      <tr>
        <th>Id</th>
        <th>Makanan</th>
        <th>Asal</th>
        <th>Bahan</th>
        <th>Jenis</th>
        <th>Harga</th>
        <th>Gambar</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($makanan as $mkn) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $mkn["Nama_Makanan"]; ?></td>
          <td><?= $mkn["Asal_Makanan"]; ?></td>
          <td><?= $mkn["Bahan_Makanan"]; ?></td>
          <td><?= $mkn["Jenis"]; ?></td>
          <td><?= $mkn["Harga"]; ?></td>
          <td><img width="60" src="assets/img/<?= $mkn["Gambar"]; ?>"></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach;  ?>
    </table>
</body>

</html>