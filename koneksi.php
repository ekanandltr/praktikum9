<?
$servername="local host";
$username="root"; 
$password="";
	
	mysql_connect($host, $username, $password) or die("Koneksi gagal dibangun");
	mysql_select_db("mydb") or die("Database tidak dapat dibuka");
?>