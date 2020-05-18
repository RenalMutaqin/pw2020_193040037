<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040037") or die("Database salah!");
    return $conn;
}


// function untuk melakukan query ke database
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

// function untuk menambahkan data ke dalam database
function tambah($data)
{
    $conn = koneksi();

    $Nama_Makanan = htmlspecialchars($data['Nama_Makanan']);
    $Asal_Makanan = htmlspecialchars($data['Asal_Makanan']);
    $Bahan_Makanan = htmlspecialchars($data['Bahan_Makanan']);
    $Jenis = htmlspecialchars($data['Jenis']);
    $Harga = htmlspecialchars($data['Harga']);
    $Gambar = htmlspecialchars($data['Gambar']);

    $query = "INSERT INTO makanan
                    VALUES
                    ('','$Nama_Makanan','$Asal_Makanan','$Bahan_Makanan','$Jenis','$Harga','$Gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function untuk menghapus data dalam database
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// function untuk mengubah data pada database
function ubah($data)
{
    $conn = koneksi();
    $Nama_Makanan = htmlspecialchars($data['Nama_Makanan']);
    $Asal_Makanan = htmlspecialchars($data['Asal_Makanan']);
    $Bahan_Makanan = htmlspecialchars($data['Bahan_Makanan']);
    $Jenis = htmlspecialchars($data['Jenis']);
    $Harga = htmlspecialchars($data['Harga']);
    $Gambar = htmlspecialchars($data['Gambar']);

    $query = "UPDATE makanan
             SET
            Gambar = '$Gambar',
 Nama_Makanan = '$Nama_Makanan',
 Asal_Makanan = '$Asal_Makanan',
 Bahan_Makanan = '$Bahan_Makanan',
 Jenis = '$Jenis',
 Harga = '$Harga'
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah digunakan');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
