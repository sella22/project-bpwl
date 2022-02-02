<?php

$Makanan = $_GET['Makanan'];

include 'koneksi.php';

$hasil = mysqli_query($koneksi,"DELETE FROM promo Where Makanan='$Makanan'");
header('location:read.php');
?>