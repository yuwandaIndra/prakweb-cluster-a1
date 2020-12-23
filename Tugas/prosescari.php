<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $cari=$_POST['cari'];
      $koneksi=mysqli_connect("localhost","root","","mahasiswa") or die("koneksi gagal") ;
      $hasil=mysqli_query($koneksi, "select * from mahasiswa where nrp ='$cari'");
      echo "==================================================================";
      echo "<br>";
      while ($baris=mysqli_fetch_array($hasil)) {
        echo "nrp      :";
        echo "$baris[0]";
        echo "<br>";
        echo "nama     :";
        echo "$baris[1]";
        echo "<br>";
        echo "alamat  :";
        echo "$baris[2]";
        echo "<br>";
        echo "jurusan  :";
        if ($baris[3]==1) {
          echo "Teknik Informatika";
        } else {
          echo "Teknik Elektro";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
      }
     ?>
     <form action="tugasdatabase.php" method="post">
       <input type="submit" name="" value="balik ke home">
     </form>
  </body>
</html>
