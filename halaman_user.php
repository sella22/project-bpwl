<!DOCTYPE html>
<html>
<head>
	<title>Halaman user</title>
</head>
<body background="assets/1222.jfif ">
	<h1>Halaman user</h1>
	<center><h1>Daftar menu</h1>
 <center><strong>Berhasil </strong> Anda sudah login sebagai user</center>
 <?php if(isset($_SESSION['username'])) :  ?>
 	<p>Selamat Datang <strong><?php echo $_SESSION['username'];  ?>!</strong></p>
 <?php endif  ?>
	<a href="admin/logout.php">LOGOUT</a>
	<br/>
	<nav>
	<a href="kfc.php/">Kfc</a> |
	<a href="st.php/">Starbuck</a> |
    <a href="mcd.php/">Mcd</a> |
    <a href="richeese.php/">Richeese</a>  
	</nav>
	<center>
 <table border="2">
<tr>
	<th>Menu</th>
	<th>Harga</th>
	<th>Lokasi</th>
</tr>	
</center>
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from nongkrong where Lokasi='starbuck'");
while ($hasil = mysqli_fetch_array($data)) {?>
<tr>
	<td><?php echo $hasil ["Menu"];?></td>
	<td><?php echo $hasil ["Harga"];?></td>
	<td><?php echo $hasil ["Lokasi"];?></td>
</tr>

<?php	

}
?>
</table>
<center><h1>Ada yang promo nihhhh!!!</h1>

	<br><table border="2">
<tr>
	<th>Makanan</th>
	<th>Discount</th>
	<th>Tempat</th>
</tr>	

<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from promo");
while ($hasil = mysqli_fetch_array($data)) {?>
<tr>
	<td><?php echo $hasil ["Makanan"];?></td>
	<td><?php echo $hasil ["Discount"];?></td>
	<td><?php echo $hasil ["Tempat"];?></td>
</tr>
	</center>
<?php	
}
?>
</table>
</body>
</html>