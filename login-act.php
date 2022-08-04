<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['role']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");
 
	// cek jika user login sebagai pelanggan
	}else if($data['role']=="pelanggan"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "pelanggan";
		$_SESSION['pelanggan_status'] = "login";
		// alihkan ke halaman dashboard pegawai
		header("location:index.php");
 	
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?alert=gagal");
	}	
}else{
	header("location:login.php?alert=gagal");
}
 
?>