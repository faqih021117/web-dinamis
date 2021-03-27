<?php
include 'koneksi.php';

if (isset($_POST['simpan'])){
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $pesan = $_POST['pesan'];

    $result = mysqli_query($mysqli, "UPDATE form SET Nama='$nama',Email='$email',pesan='$pesan' WHERE Nama=$nama");

    if ($query){
        header('location : datapelanggan.php');
    }else{
        header('location : hapus.php?status=gagal');
    }
}

?>