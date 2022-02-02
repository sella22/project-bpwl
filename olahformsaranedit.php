<?php
include "koneksi.php";
$nama = $_POST ['nama'];
$saran = $_POST ['saran'];

$hasil = mysqli_query($koneksi,"UPDATE saran set nama ='$nama',saran = '$saran' where nama = '$nama'");
header('location:saran.php');


  ?>