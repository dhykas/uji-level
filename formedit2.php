<?php
include 'koneksi.php';

$id_buku = $_GET['id_buku'];
$sql = "SELECT * FROM data_buku WHERE id_buku = '$id_buku'";
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
    <link rel="stylesheet" href="style2.css">
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
            
    <form action="edit2.php" method="post">
        <h3>Tambah Data buku</h3>
        <p><label>Id buku : <input name = "id_buku" class="input" required = "required" type="hidden" value="<?php echo $pel['id_buku'] ?>"></label></p>
        <p><label>judul buku : <input name = "judul_buku" class="input" required = "required" type="text" value="<?php echo $pel['judul_buku'] ?>"></label></p>
        <p><label>jenis buku : <input name = "jenis_buku" class="input" required = "required" value="<?php echo $pel['jenis_buku'] ?>"></input></label></p>
        <p><label>penulis buku : <input name = "nama_penulis" class="input" required = "required" type="text " value="<?php echo $pel['penulis_buku'] ?>"></label></p>
        <p><label>jumlah : <input name = "jumlah" class="input" required = "required" type="number" value="<?php echo $pel['jumlah'] ?>"></label></p>
        <input  class="btn" type="submit" name="simpan" value="simpan">
    </form>
        </div>


        <div class="side-bar">
            <div class="logo">
                <img src="logo.png" alt="">
                <h3>Perpustakaan</h3>
            </div>
            <div class="links">
                <a href="tampilan1.php">Data Siswa</a>
                <p><a href="tampilan2.php">Data Buku</a></p>
            </div>
        </div>
    </div>

</body>
</html>