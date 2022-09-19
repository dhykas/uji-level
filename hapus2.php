<?php 
include 'koneksi.php' ;

$id_buku = $_GET['id_buku'];

$sql = "DELETE FROM data_buku WHERE id_buku = '$id_buku'";
$query =  mysqli_query($connect,$sql);

if ($query) {
    header('Location: tampilan2.php');
}
else{
    header('Location: hapus2.php?status gagal');
}

?>