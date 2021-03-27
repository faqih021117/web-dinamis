<?php
include "koneksi.php";
  $nama  = $_REQUEST['nama'];
  $email  = $_REQUEST['email'];
  $pesan  = $_REQUEST['pesan'];
  $mysqli  = "INSERT INTO form (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
  $result  = mysqli_query($connect, $mysqli);
  if ($result) {
    header("location:index.php");
  } else {
    echo "Input gagal";
  }
  mysqli_close($connect);
?>

<!-- 
DELETE FROM daftar_dosen;
Query OK, 5 rows affected (0.04 sec) -->