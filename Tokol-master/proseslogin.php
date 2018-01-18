<?php
include "koneksi.php";
$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * FROM admin WHERE username='".$username."' AND password='".$password."'";
$hasil = mysqli_query($koneksi,$sql) or die ('Gagal akses </br>');
$jumlah = mysqli_num_rows($hasil);

if ($jumlah > 0){
	session_start();
	$row = mysqli_fetch_array($hasil);
	$_SESSION['username']    = $row['username'];
    $_SESSION['password']    = $row['password'];

	echo "<script>alert('Selamat datang $username'); window.location = 'admin/tambah.php'</script>";	
} else {
	echo "<script>alert('Username dan Password tidak valid.'); window.location = 'index.html'</script>";	
}
?>