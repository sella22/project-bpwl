<?php
include "koneksi.php";
$Makanan = $_POST ['Makanan'];
$Discount = $_POST ['Discount'];
$Tempat = $_POST ['Tempat'];

$hasil = mysqli_query($koneksi,"INSERT INTO promo VALUES ('$Makanan','$Discount','$Tempat')");
header('location:promo.php');
  ?>