<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$size = $_POST['link'];
$link = $_POST['size'];
 
// update data ke database
mysqli_query($kon,"update listing set nama='$nama', link='$link', size='$size' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:yas.php");
 
?>