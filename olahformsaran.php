<?php
include "koneksi.php";
$nama = $_POST ['nama'];
$saran = $_POST ['saran'];
$hasil = mysqli_query($koneksi,"INSERT INTO saran VALUES ('$nama','$saran')");
header('location:saran.php');

  ?>