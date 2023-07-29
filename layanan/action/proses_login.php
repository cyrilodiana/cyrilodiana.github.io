<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../config/db_koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($connect,"SELECT * FROM user WHERE email='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['email'] = $username;
	$_SESSION['status'] = "login";
	header("location:../booking/index.php");
}else{
	header("location:../login.php?alert=gagal");
}
?>