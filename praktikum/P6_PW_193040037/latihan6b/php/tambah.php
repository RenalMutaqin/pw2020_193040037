<?php
require 'functions.php';

//cek apakah tombol sudah dipencet
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
alert('Data berhasil ditambahkan');
document.location.href = 'admin.php';
   </script>";
  } else {
    echo "Data gagal ditambahkan";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Makanan</title>
  <style>
    button {
      background: silver;
      color: black;
      font-size: medium;
    }
  </style>
</head>

<body>
  <h3>Form Tambah Data Makanan</h3>
  <table>
    <form action="" method="POST">
      <tr>


        <td><label for="Gambar">Gambar </label></td>
        <td>:</td>
        <td><input type="text" name="Gambar" id="Gambar" required><br></br></td>

      </tr>
      <tr>

        <td><label for="Nama_Makanan">Nama Makanan</label></td>
        <td>:</td>
        <td> <input type="text" name="Nama_Makanan" id="Nama_Makanan" required><br></br></td>

      </tr>
      <tr>

        <td> <label for="Asal_Makanan">Asal Makanan</label></td>
        <td>:</td>
        <td> <input type="text" name="Asal_Makanan" id="Asal_Makanan" required><br></br></td>

      </tr>
      <tr>
        <td>
          <label for="Bahan_Makanan">Bahan Makanan</label></td>
        <td>:</td>
        <td>
          <input type="text" name="Bahan_Makanan" id="Bahan_Makanan" required><br></br></td>

      </tr>
      <tr>
        <td> <label for="Asal_Makanan">Asal Makanan</label></td>
        <td>:</td>
        <td> <input type="text" name="Asal_Makanan" id="Asal_Makanan" required><br></br></td>

      </tr>
      <tr>

        <td> <label for="Jenis">Jenis Makanan</label></td>
        <td>:</td>
        <td> <select name="jenis" id="Jenis" required><br></br>
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
        <td> <input type="text" name="Harga" id="Harga" required><br></br></td>

      </tr>
      <tr>

        <br>
        <td> <button type="submit" name="tambah">Tambah Data</button></td>
        <td></td>
        <td><button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
          </button></td>
      </tr>
    </form>
  </table>
</body>

</html>