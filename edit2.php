<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul_buku'];
$jenis = $_POST['jenis_buku'];
$penulis = $_POST['nama_penulis']; 
$jumlah = $_POST['jumlah'];
$sql = "UPDATE data_buku SET judul_buku = '$judul',jenis_buku = '$jenis',penulis_buku = '$penulis', jumlah = '$jumlah' WHERE id_buku = '$id_buku'";
$query = mysqli_query($connect, $sql);

if($query){
    header('Location: tampilan2.php');
}else{
    header('Location: simpan2.php?status=gagal');
}
}

?>