<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div style="background-color: salmon; height: 20vh;">
	<a  href="../ini.html">kembali</a>
		<center>
	<h1>Halaman admin</h1>
	<strong>Berhasil </strong> Anda sudah login sebagai admin<br>
 <?php if(isset($_SESSION['username'])) :  ?>
 	<p>Selamat Datang <strong><?php echo $_SESSION['username'];  ?>!</strong></p>
 <?php endif  ?>
 <a href="logout.php">Logout</a>
 <a href="promo.php">||Promo</a>
 <a href="inserttr.php">|| Tambah data Kuy</a>
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
	<td><a href="delete.php?Menu=<?php echo $hasil ["Menu"];?>">hapus</a></td>
	<td><a href="edit.php?Menu=<?php echo $hasil ["Menu"];?>">edit</a></td>
</tr>
	</center>
<?php	
}
?>
</table>
	<br/>
	<br/>
</body>
</html>