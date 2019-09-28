<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$username','$password','$email')");

// memindahkan halaman ke index.php
header("location:index.php");

?>