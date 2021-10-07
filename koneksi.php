<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "k4859471_";

//$masuk = mysql_connect($hostName,$userName,$passWord) or die('Connection Failed');
//$hore = mysql_select_db($database) or die('Database Failed');

$conni = mysqli_connect($hostname,$username,$password, $database) or die("Koneksi gagal");
mysqli_select_db($conni, $database) or die("Database tidak bisa dibuka");

?>