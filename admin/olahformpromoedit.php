<?php
include "koneksi.php";
$Makanan = $_POST ['Makanan'];
$Discount = $_POST ['Discount'];
$Tempat = $_POST ['Tempat'];

$hasil = mysqli_query($koneksi,"UPDATE promo set Makanan ='$Makanan',Discount = '$Discount',Tempat='$Tempat' where Makanan = '$Makanan'");
header('location:promo.php');
  ?>