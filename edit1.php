<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {

$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$email = $_POST['email']; 
$telepon = $_POST['no_telepon'];
$sql = "UPDATE data_siswa SET nama_siswa = '$nama',kelas = '$kelas',email = '$email', no_telepon = '$telepon' WHERE id_siswa = '$id_siswa'";
$query = mysqli_query($connect, $sql);

if($query){
    header('Location: tampilan1.php');
}else{
    header('Location: simpan1.php?status=gagal');
}
}

?>