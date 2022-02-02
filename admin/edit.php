<?php
include 'koneksi.php';
$Menu =$_GET['Menu'];
$query =mysqli_query($koneksi,"SELECT * from nongkrong where Menu='$Menu'");
$hasil =mysqli_fetch_array($query);
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>form edit data</title>
  </head>
  <body>
    <div style="background-color: salmon; height: 20vh;">
  <center>  <h1>form perubahan data pelanggan</h1></center>
    <center>
  <form action="olahformedit.php"method="POST">
   Menu <input type="text" name="Menu" value="<?php echo $hasil['Menu']; ?>"><br>
   Harga <input type="text" name="Harga" value="<?php echo $hasil['Harga']; ?>"><br>
   Lokasi <input type="text" name="Lokasi" value="<?php echo $hasil['Lokasi']; ?>"><br>
     <input type="submit" name="submit" value="submit">
     <input type="reset" name="reset" value="reset">
     </center>
       </div>
  </form>
  </body>
  </html>