<?php
include 'koneksi.php';
$nama = $_GET['nama'];
$query =mysqli_query($koneksi,"SELECT * from saran where nama='$nama'");
$hasil =mysqli_fetch_array($query);
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>form tambah saran</title>
  </head>
  <body>
    <div style="background-color: salmon; height: 20vh;">
 <center><h1>form perubahan data pelanggan</h1>
  <form action="olahformsaranedit.php"method="POST">
   nama <input type="text" name="nama" value="<?php echo $hasil['nama']; ?>"><br>
   saran <input type="text" name="saran" value="<?php echo $hasil['saran']; ?>"><br>
     <input type="submit" name="submit" value="submit">
     <input type="reset" name="reset" value="reset">
  </form>
  </center> 
</div>
  </body>
  </html>