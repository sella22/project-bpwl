<?php

include "koneksi.php";
$Menu = $_POST ['Menu'];
$Harga = $_POST ['Harga'];
$Lokasi = $_POST ['Lokasi'];

$hasil = mysqli_query($koneksi,"INSERT INTO nongkrong VALUES ('$Menu','$Harga','$Lokasi')");

echo "data sudah ditambah";
?>

<a href="read.php">lihat data disini</a>