<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="assets/1222.jfif ">
	<a  href="halaman_user.php">kembali</a>
	<center>
<h1>Ada yang promo nihhhh!!!</h1>
<table border="2">
<tr>
	<th>Makanan</th>
	<th>Discount</th>
	<th>Tempat</th>
	<th>aksi</th>
	 <a href="insertpromo.php">Tambah data promo</a>
</tr>	

<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from promo");
while ($hasil = mysqli_fetch_array($data)) {?>
<tr>
	<td><?php echo $hasil ["Makanan"];?></td>
	<td><?php echo $hasil ["Discount"];?></td>
	<td><?php echo $hasil ["Tempat"];?></td>
	<td><a href="deletepromo.php?Makanan=<?php echo $hasil ["Makanan"];?>">hapus</a></td>
	<td><a href="editpromo.php?Makanan=<?php echo $hasil ["Makanan"];?>">edit</a></td>
</tr>
	</center>
<?php	
}
?>
</table>
</body>
</html>