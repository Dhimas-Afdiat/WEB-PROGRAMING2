<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// mengupdate data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', username='$username', password='$password', email='$email' where id='$id'");

// memindahkan halaman ke index.php
header("location:index.php");

?>