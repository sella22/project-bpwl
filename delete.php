<?php

$Menu = $_GET['Menu'];

include 'koneksi.php';

$hasil = mysqli_query($koneksi,"DELETE FROM nongkrong Where Menu='$Menu'");

echo "data berhasil dihapus";
?>

<a href="read.php">cek disini</a>