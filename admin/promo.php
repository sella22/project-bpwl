<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <div style="background-color: salmon; height: 20vh;">
<center><h1>Ada yang promo nihhhh!!!</h1></center>
	<a  href="halaman_admin.php">kembali</a> ||
<a href="insertpromo.php">Tambah data promo</a>
</div>
	<center>
<table border="2">
<tr>
	<th>Makanan</th>
	<th>Discount</th>
	<th>Tempat</th>
	<th>aksi</th>
</tr>	

<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from promo");
while ($hasil = mysqli_fetch_array($data)) {?>
<tr>
	<td><?php echo $hasil ["Makanan"];?></td>
	<td><?php echo $hasil ["Discount"];?></td>
	<td><?php echo $hasil ["Tempat"];?></td>
	<td><a href="deletepromo.php?Makanan=<?php echo $hasil ["Makanan"];?>">hapus</a>
	<a href="editpromo.php?Makanan=<?php echo $hasil ["Makanan"];?>">edit</a></td>
</tr>
	</center>
<?php	
}
?>
</table>
</body>
</html>