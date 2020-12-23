<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Koneksi database sqli</title>
    </head>
    <h2>demo konesi database</h2>
    <?php
      $koneksi=mysqli_connect("localhost","root","","mahasiswa");
      

      if(mysqli_connect_errno())
      {
        echo "koneksi ke database gagal : " . mysqli_connect_error();
      } else echo sukses;
    ?>
    <body>
    </body>
</html>