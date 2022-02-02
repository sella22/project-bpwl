<?php
include "koneksi.php";
$Menu = $_POST ['Menu'];
$Harga = $_POST ['Harga'];
$Lokasi = $_POST ['Lokasi'];

$hasil = mysqli_query($koneksi,"UPDATE nongkrong set Menu ='$Menu',Harga = '$Harga', Lokasi = '$Lokasi' where Menu = '$Menu'");
header('location:read.php');
  ?>