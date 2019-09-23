<?php
session_start();

include 'config.php';


$username = $koneksi->real_escape_string($_POST['username']);
$password = $koneksi->real_escape_string($_POST['password']);

$query = "SELECT * FROM user WHERE username='$username'";
$result = $koneksi->query($query);
$count = $result->num_rows;
$count;


if($count > 0){
	$cetak = $result->fetch_assoc();
	$passHash = $cetak['password'];
	$status = $cetak['status'];
		if(password_verify($password,$passHash) &&  $status == 0){
			$_SESSION['nama'] = $cetak['nama'];
      $_SESSION['id'] = $cetak['id_user'];
			echo '<script>window.alert("Admin Login Berhasil");window.location=("index.php");</script>';
		}else if(password_verify($password,$passHash) &&  $status == 1){
      $_SESSION['nama'] = $cetak['nama'];
      $_SESSION['id'] = $cetak['id_user'];
      echo '<script>window.alert("User Login Berhasil");window.location=("index.php");</script>';
    }else{
      echo '<script>window.alert("Username/Password Salah!");window.location=("login.php");</script>';
    }
}else{
	echo '<script>window.alert("Tidak Ada Username Terdaftar!");window.location=("index.php");</script>';
}


?>
