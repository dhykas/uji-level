<?php 
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="content">
            <a class="tambah" href="tambah1.html">[+]Tambah Data</a>
            <table border="1" cellpadding="10">
                <th>Id Siswa</th>
                <th>Nama Siswa</th>
                <th>kelas</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th class="aksi">aksi</th>


                <?php 
                $sql = "SELECT * FROM data_siswa";
                $query = mysqli_query($connect,$sql);
                while($pel=mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$pel['id_siswa']."</td>";
                    echo "<td>".$pel['nama_siswa']."</td>";
                    echo "<td>".$pel['kelas']."</td>";
                    echo "<td>".$pel['email']."</td>";
                    echo "<td>".$pel['no_telepon']."</td>";
        
                    echo "<td>";
                    echo "<a href='formedit1.php?id_siswa=".$pel['id_siswa']."'>Edit</a> | ";
                    echo "<a href='hapus1.php?id_siswa=".$pel['id_siswa']."'>Hapus</a>";
                    echo "</tr>";
        
                }
            
            
            
            ?>
            </table>
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