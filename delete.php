<?php
include_once("config.php");

$np = $_GET['nama_produk'];

$result = mysqli_query($mysqli, "DELETE FROM produk WHERE nama_produk=$np");

header("Location:index.php");
?>