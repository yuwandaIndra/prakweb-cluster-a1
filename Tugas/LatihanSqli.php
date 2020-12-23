<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Koneksi database sqli</title>
    </head>
    <h2>demo koneksi database</h2>
    <?php
      $koneksi=mysqli_connect("localhost","root","","mahasiswa") or die("koneksi gagal");
      $hasil=mysqli_query($koneksi,"select * from informatika");
      while ($row=mysqli_fetch_assoc($hasil)) {
        print_r($row);
        echo "<br>";
      }
    ?>
    <body>
    </body>
</html>
