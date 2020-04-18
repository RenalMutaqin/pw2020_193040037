<?php
//menghubungkan dengan file php lainnya
require 'php/functions.php';
//melakukan query
$makanan = query("SELECT * FROM makanan")



?>

<html>

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <?php foreach ($makanan as $mkn) : ?>
      <img width="90px" src="assets/img/<?= $mkn["Gambar"]; ?>" alt="">
      <button class="tombol-kembali"><a href="php/detail.php?id=<?= $mkn['id'] ?>">Lihat</a></button>

      </p>

    <?php endforeach;  ?>
    </table>
</body>

</html>