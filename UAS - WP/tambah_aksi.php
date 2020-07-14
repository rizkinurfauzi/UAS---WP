<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$size = $_POST['size'];
$link = $_POST['link'];
 
// menginput data ke database
mysqli_query($kon,"insert into listing values('','$nama','$size','$link')");
 
// mengalihkan halaman kembali ke index.php
header("location:yas.php");
 
?>