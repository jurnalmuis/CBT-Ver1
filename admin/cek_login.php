<?php
// Mengaktigkan Session User
session_start();
// Menghungkan ke database
include '../included/koneksi.php';
// menangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user.
$login = mysqli_query($koneksi,"Select * from usr_admin where Username='$username' and Password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek username dan Password
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:beranda.php");
}else{
	header("location:index.php?pesan=gagal");
}

 ?>
