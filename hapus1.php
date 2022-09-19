<?php 
include 'koneksi.php' ;

$id_siswa = $_GET['id_siswa'];

$sql = "DELETE FROM data_siswa WHERE id_siswa = '$id_siswa'";
$query =  mysqli_query($connect,$sql);

if ($query) {
    header('Location: tampilan1.php');
}
else{
    header('Location: hapus1.php?status gagal');
}

?>