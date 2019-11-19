<?php
	$n1 = $_POST["Username"];
	$n2 = $_POST["Password"];
	$q = "SELECT * FROM `admin` WHERE Username='$n1' AND Password='$n2'";
	include "aksi_koneksi.php";
	$hsl = mysqli_query($koneksi,$q);
	if($r = mysqli_fetch_assoc($hsl)){
		session_start();
		$_SESSION['Username'] = $r['Username'];
		header("location:index1.html");
	}
	else
		header("location:login.php?login=gagal");
?>