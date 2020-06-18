<html>
<head>
    <title>Tambahkan Produk</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $np = $_POST['nama_produk'];
        $ktr = $_POST['keterangan'];
        $hrg = $_POST['harga'];
        $jmlh = $_POST['jumlah'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO produk(nama_produk,keterangan,harga,jumlah) VALUES('$np','$ktr','$hrg','$jmlh')");
        echo "User added successfully. <a href='index.php'>View Product</a>";
    }
    ?>
</body>
</html>