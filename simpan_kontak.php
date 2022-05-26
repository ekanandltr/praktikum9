<?php
include 'koneksi.php';
$koneksi = mysqli_connect("localhost","root","","mydb");
	//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
	$vnama=$_POST['nama']; 
	$vjkel=$_POST['jkel'];
	$vemail=$_POST['email'];
	$valamat=$_POST['alamat'];
	$vkota=$_POST['kota'];
	$vpesan=$_POST['pesan'];

	$sql="insert kontak set nama='$vnama',
							jkel='$vjkel',
							email='$vemail',
							alamat='$valamat',
							kota='$vkota',
							pesan='$vpesan'";
	mysqli_query($koneksi, $sql) or die("Proses simpan ke database gagal");
	mysqli_close($koneksi);
	header("location:kontak.html");
?> 