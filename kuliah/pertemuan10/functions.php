<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "", "pw_193040037");
  mysqli_select_db($conn, "pw_193040037");

  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$query");

  //jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
