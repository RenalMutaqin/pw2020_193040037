<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';
$id = $_GET['id'];
$mhs = query("SELECT * FROM makanan WHERE id = $id")[0];

//cek apakah tombol sudah dipencet
if (isset($_POST['ubah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
alert('Data berhasil diubah');
document.location.href = 'admin.php';
   </script>";
  } else {
    echo "Data gagal diubah";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Makanan</title>
  <style>
    button {
      background: silver;
      color: black;
      font-size: medium;
    }
  </style>
</head>

<body>
  <h3>Form Ubah Data Makanan</h3>
  <table>
    <form action="" method="POST">
      <input type="text" name="Nama_Makanan" id="Nama_Makanan" required value="<?= $m['Nama_Makanan']; ?>">
      <input type="hidden" name="id" id="id" value="<?= $m['id']; ?>">
      <tr>


        <td><label for="Gambar">Gambar </label></td>
        <td>:</td>
        <td><input type="text" name="Gambar" id="Gambar" required></td>

      </tr>
      <tr>

        <td><label for="Nama_Makanan">Nama Makanan</label></td>
        <td>:</td>
        <td> <input type="text" name="Nama_Makanan" id="Nama_Makanan" required></td>

      </tr>
      <tr>

        <td> <label for="Asal_Makanan">Asal Makanan</label></td>
        <td>:</td>
        <td> <input type="text" name="Asal_Makanan" id="Asal_Makanan" required></td>

      </tr>
      <tr>
        <td>
          <label for="Bahan_Makanan">Bahan Makanan</label></td>
        <td>:</td>
        <td>
          <input type="text" name="Bahan_Makanan" id="Bahan_Makanan" required></td>

      </tr>
      <tr>
        <td> <label for="Asal_Makanan">Asal Makanan</label></td>
        <td>:</td>
        <td> <input type="text" name="Asal_Makanan" id="Asal_Makanan" required></td>

      </tr>
      <tr>

        <td> <label for="Jenis">Jenis Makanan</label></td>
        <td>:</td>
        <td> <select name="jenis" id="Jenis" required>
            <option value="">---Pilih Jenis Makanan---</option>
            <option value="Basah">Basah</option>
            <option value="Kering">Kering</option>
            <option value="Minuman">Minuman</option>
        </td>
        </select>

      </tr>
      <tr>

        <td> <label for="Harga">Harga Makanan</label></td>
        <td>:</td>
        <td> <input type="text" name="Harga" id="Harga" required></td>

      </tr>
      <tr>

        <br>
        <td> <button type="submit" name="ubah">Ubah Data</button></td>
        <td></td>
        <td><button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
          </button></td>
      </tr>
    </form>
  </table>
</body>

</html>