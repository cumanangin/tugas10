<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM produk ");
?>
<html>
<head>    
    <title>CRUD</title>
</head>

<body>
<a href="add.php">Tambahkan Produk</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Nama Produk</th><th>Keterangan</th><th>Harga</th> <th>Jumlah</th><th>Update</th>
    </tr>
    <?php  
    while($data_produk = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$data_produk['nama_produk']."</td>";
        echo "<td>".$data_produk['keterangan']."</td>";
        echo "<td>".$data_produk['harga']."</td>";
        echo "<td>".$data_produk['jumlah']."</td>";    
        echo "<td><a href='edit.php?nama_produk=$data_produk[nama_produk]'>Edit</a> | <a href='delete.php?nama_produk=$data_produk[nama_produk]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>