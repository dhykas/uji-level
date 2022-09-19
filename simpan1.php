<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $id_siswa = $_POST ['id_siswa'] ;
    $nama_siswa = $_POST ['nama_siswa'] ;
    $kelas = $_POST ['kelas'] ;
    $email = $_POST ['email'] ;
    $telepon = $_POST ['no_telepon'] ;

    $sql = "INSERT INTO data_siswa VALUES('$id_siswa','$nama_siswa','$kelas','$email','$telepon')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilan1.php');
    }else{
        header('Location: simpan1.php?status=gagal');
    }
}
?>