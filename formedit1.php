<?php
include 'koneksi.php';

$id_siswa = $_GET['id_siswa'];
$sql = "SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'";
$query = mysqli_query($connect, $sql);
$pel = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1){
    die("data tidak di temukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <style>
        p{
            font-family: roboto,sans-serif;
            font-weight: 100;
            font-size: 30px;
        }

        .input{
            height: 37px;
            width: 222px;
            background-color: #D9D9D9;
            font-family: roboto,sans-serif;
            font-size: large;
        }

        .btn{
            width: 60px;
            height: 30px;
            border-radius: 10px;
            float: right;
            margin-top: 10px;
        }        
    </style>
</head>
<body>
    
    <div class="container">
        <div class="content">
            
    <form action="edit1.php" method="POST">
        <h3>Tambah Data siswa</h3>
        <p><label>Id siswa : <input name = "id_siswa" class="input" required = "required" type="hidden" value="<?php echo $pel['id_siswa']?>"></label></p>
        <p><label>Nama siswa : <input name = "nama_siswa" class="input" required = "required" type="text" value="<?php echo $pel['nama_siswa']?>"></label></p>
        <p><label>kelas : <input name = "kelas" class="input" required = "required" value="<?php echo $pel['kelas']?>"></input></label></p>
        <p><label>email : <input name = "email" class="input" required = "required" type="email" value="<?php echo $pel['email']?>"></label></p>
        <p><label>nomor telepon : <input name = "no_telepon" class="input" required = "required" type="number" value="<?php echo $pel['no_telepon']?>"></label></p>
        <input  class="btn" type="submit" name="simpan" value="simpan">
    </form>
        </div>


        <div class="side-bar">
            <div class="logo">
                <img src="logo.png" alt="">
                <h3>Perpustakaan</h3>
            </div>
            <div class="links">
                <p><a href="tampilan1.php">Data Siswa</a></p>
                <a href="tampilan2.php">Data Buku</a>
            </div>
        </div>
    </div>

</body>
</html>