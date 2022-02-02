<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="background-color: salmon; height: 20vh;">
	<a  href="halaman_admin.php">Kembali</a>||
	<a  href="inserttr.php">Tambah data</a>
	 <center>
<h1>Daftar nama tempat nongkrong yang asyik bangettt!!!</h1>
Disini kamu akan menikmati berbagai penawaran terbaik untuk semua makanan<br>
Dari berbagai belahan dunia
	</center>
	</div>
	<center>
<table border="2">
<tr>
	<th>Menu</th>
	<th>Harga</th>
	<th>Lokasi</th>
	<th>aksi</th>
</tr>	
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from nongkrong");
while ($hasil = mysqli_fetch_array($data)) {?>
<tr>
	<td><?php echo $hasil ["Menu"];?></td>
	<td><?php echo $hasil ["Harga"];?></td>
	<td><?php echo $hasil ["Lokasi"];?></td>
	<td><a href="delete.php?Menu=<?php echo $hasil["Menu"]; ?>&aksi=hapus">Hapus</a>
	<a href="edit.php?Menu=<?php echo $hasil["Menu"]; ?>&aksi=edit">Edit</a></td>
</tr>
	 </center>
<?php	
}
?>
</table>
</body>
</html>