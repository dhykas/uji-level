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
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="content">
            <a class="tambah" href="tambah2.html">[+]Tambah Data</a>
            <table border="1" cellpadding="10">
                <th>Id buku</th>
                <th>Judul buku</th>
                <th>jenis buku</th>
                <th>nama penulis</th>
                <th>jumlah buku</th>
                <th class="aksi">aksi</th>


                <?php 
                $sql = "SELECT * FROM data_buku";
                $query = mysqli_query($connect,$sql);
                while($pel=mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$pel['id_buku']."</td>";
                    echo "<td>".$pel['judul_buku']."</td>";
                    echo "<td>".$pel['jenis_buku']."</td>";
                    echo "<td>".$pel['penulis_buku']."</td>";
                    echo "<td>".$pel['jumlah']."</td>";
        
                    echo "<td>";
                    echo "<a href='formedit2.php?id_buku=".$pel['id_buku']."'>Edit</a> | ";
                    echo "<a href='hapus2.php?id_buku=".$pel['id_buku']."'>Hapus</a>";
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
                <a href="tampilan1.php">Data Siswa</a>
                <p><a href="tampilan2.php">Data Buku</a></p>
            </div>
        </div>
    </div>
</body>

</html>