<?php

$Menu = $_GET['Menu'];

include 'koneksi.php';

$hasil = mysqli_query($koneksi,"DELETE FROM nongkrong Where Menu='$Menu'");
header('location:read.php');

?>