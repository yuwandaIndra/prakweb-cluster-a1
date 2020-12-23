<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proses Hapus</title>
  </head>
  <body>
    <?php
      $hapus=$_POST['hapus'];
      $koneksi=mysqli_connect("localhost","root","","mahasiswa") or die("koneksi gagal") ;
      $hasil=mysqli_query($koneksi, "delete from mahasiswa where nrp ='$hapus'");
      echo "==================================================================";
      echo "<br>";
      echo "Data Berhasil Dihapus";
     ?>
     <form action="tugasdatabase.php" method="post">
       <input type="submit" name="" value="balik ke home">
     </form>
  </body>
</html>
