<?php 
	include("../config/configuration.php");
	$user = "";
	$pass = "";
	if (isset($_POST['login'])) {
		$user = $_POST['username'];
		$password = $_POST['password'];

		if ($user == "admin" && $password == "admin") {
			session_start();
			$_SESSION['username'] = $user;
			$_SESSION['password'] = $password;

			echo "<script>window.location.href='../'</script>";
		} else {
			echo "<script>alert('Login Gagal !');window.location.href='../?page=login';</script>";
		}
	}
?>