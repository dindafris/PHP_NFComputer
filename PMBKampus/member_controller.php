<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM user";
$data = $dbh->query($sql);
 
// menyeleksi data user dengan username dan password yang sesuai
// menghitung jumlah data yang ditemukan
 
// cek apakah username dan password di temukan pada database

	if($data['role']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:content/maba.php");
 
	// cek jika user login sebagai user
	}else if($data['role']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "user";
		// alihkan ke halaman dashboard user
		header("location:content/dashboard.php"); 
	}else{

	}	
 
?>