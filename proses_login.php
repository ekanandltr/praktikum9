<?php
session_start();
$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'mydb'; 


$koneksi = mysqli_connect("localhost","root","","mydb");

$username = $_POST['username'];
$pass = md5($_POST['pass']);
$qry = mysqli_query($koneksi,"SELECT * FROM profil WHERE username='$username' and pass='$pass'");
$cek = mysqli_num_rows($qry);
 
if ($cek > 0) {
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
  header("location:cetak.php");
 
}else {
  header("location:index.php?pesan=gagal");
 
}
 ?>