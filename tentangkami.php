<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <div style="background-color: salmon; height: 20vh;">
<center><h1>Tentang Kami</h1></center>
	<a  href="ini.html">kembali</a> 
</div>
	<center>
<table border="2">
<tr>
	<th>Nama</th>
	<th>Nim</th>
</tr>	

<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from Tentang_kami");
while ($hasil = mysqli_fetch_array($data)) {?>
<tr>
	<td><?php echo $hasil ["Nama"];?></td>
	<td><?php echo $hasil ["Nim"];?></td>
</tr>
	</center>
<?php	
}
?>
</table>
</body>
</html>