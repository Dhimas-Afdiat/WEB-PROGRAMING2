<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data yang ada pada database
mysqli_query($koneksi,"delete from mahasiswa where id='$id'");

// memindahkan halaman ke index.php
header("location:index.php");

?>