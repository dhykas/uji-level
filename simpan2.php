<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $id_buku = $_POST ['id_buku'] ;
    $judul_buku = $_POST ['judul_buku'] ;
    $jenis = $_POST ['jenis_buku'] ;
    $penulis = $_POST ['penulis_buku'] ;
    $jumlah = $_POST ['jumlah'] ;

    $sql = "INSERT INTO data_buku VALUES('$id_buku','$judul_buku','$jenis','$penulis','$jumlah')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilan2.php');
    }else{
        header('Location: simpan2.php?status=gagal');
    }
}
?>