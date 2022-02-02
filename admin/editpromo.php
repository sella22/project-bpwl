<?php
include 'koneksi.php';
$Makanan =$_GET['Makanan'];
$query =mysqli_query($koneksi,"SELECT * from promo where Makanan='$Makanan'");
$hasil =mysqli_fetch_array($query);
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>form tambah data promo</title>
  </head>
  <body>
    <div style="background-color: salmon; height: 20vh;">
  <center> <h1>form perubahan data promo</h1></center>
    <center>

  <form action="olahformpromoedit.php"method="POST">
   Makanan <input type="text" name="Makanan" value="<?php echo $hasil['Makanan']; ?>"><br>
   Discount <input type="text" name="Discount" value="<?php echo $hasil['Discount']; ?>"><br>
   Tempat <input type="text" name="Tempat" value="<?php echo $hasil['Tempat']; ?>"><br>
     <input type="submit" name="submit" value="submit">
     <input type="reset" name="reset" value="reset">
     </center>
   </div>
  </form>
  </body>
  </html>