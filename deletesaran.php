<?php

$nama = $_GET['nama'];

include 'koneksi.php';

$hasil = mysqli_query($koneksi,"DELETE FROM saran Where nama='$nama'");

echo "data berhasil dihapus";
?>

<a href="saran.php">cek disini</a>