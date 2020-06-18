<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $np = $_POST['nama_produk'];
    $ktr = $_POST['keterangan'];
    $hrg = $_POST['harga'];
    $jmlh = $_POST['jumlah'];

    $result = mysqli_query($mysqli, "UPDATE produk SET nama_produk='$np',keterangan='$ktr',harga='$hrg',jumlah='$jmlh' WHERE nama_produk=$np");

    header("Location: index.php");
}
?>
<?php
while($data_produk = mysqli_fetch_array($result))
{
    $np = $data_produk['nama_produk'];
    $ktr = $data_produk['keterangan'];
    $hrg = $data_produk['harga'];
    $jmlh = $data_produk['jumlah'];
}
?>
<html>
<head>  
    <title>Edit Produk</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_produk" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk" value=<?php echo $np;?>></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" value=<?php echo $ktr;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $hrg;?>></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value=<?php echo $jmlh;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nama_produk" value=<?php echo $_GET['nama_produk'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>