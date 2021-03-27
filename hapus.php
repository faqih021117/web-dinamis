<?php
include 'koneksi.php';

if (isset($_GET['Nama'])){
    header('location: datapelanggan.php');
}

$nama = $_GET['Nama'];

$sql = "DELETE FROM form WHERE Nama='$Nama'";
$query = mysqli_query($connect,$mysqli);

if ($query){
    header('location : datapelanggan.php');
}else{
    header('location : hapus.php?status=gagal');
}

// php_value upload_ax_filesize 128M
// php_value post_max_size 128M
// php_value max_execution_time 300
// php_value max_input_time 300
// php_value memory_limit 256M
// $a = $_GET['nama'];

// $query="DELETE from form where id='$nama'";
// mysqli_query($connect, $query);
 
// header("location:index.php?pesan=hapus");
?>