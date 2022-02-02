<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="assets/1222.jfif ">
		<a  href="ini.html">kembali</a>
	<center>
<h1>Silahkan berikan saran anda!!!</h1>
<table border="2">
<tr>
	<th>nama</th>
	<th>saran</th>
	<th>aksi</th>
	<a href="insertsaran.php">Tambahkan Saran</a>
</tr>	
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"select * from saran");
while ($hasil = mysqli_fetch_array($data)) {?>
<tr>
	<td><?php echo $hasil ['nama'];?></td>
	<td><?php echo $hasil ['saran'];?></td>
	<td><a href="deletesaran.php?nama=<?php echo $hasil['nama'];?>">hapus</a>
	<a href="editsaran.php?nama=<?php echo $hasil['nama'];?>">edit</a></td>
</tr>
</center>
<?php	
}
?>
</table>
</body>
</html>