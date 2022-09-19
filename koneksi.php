<?php 
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "perpustakaan";

$connect    = mysqli_connect($host,$user,$password,$database)
or die ("gagal menghubungkan")
?>