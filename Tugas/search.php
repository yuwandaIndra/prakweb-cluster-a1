<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cari Database</title>
  </head>
  <body>
    <h1>buat search buku TAMU</h1>
    <form action="" method="post">
      <form action="" method="post" enctype="multipart/form-data">
      <select name="kolom">
        <option value="nama">nama</option>
        <option value="email">email</option>
      </select>
      masukkan kata yang anda cari :
      <input type="text" name="cari" value="">
      <input type="submit" value="cari">
    </form>
    <?php
      $kolom=$_POST['kolom'];
      $cari=_POST['cari'];
      $koneksi=mysqli_connect("localhost","root","","mahasiswa") or die("koneksi gagal") ;
      $hasil=mysqli_query($koneksi, "select * from bukutamu where $kolom like '%$cari%'");
      $jumlah=mysqli_num_rows($hasil);
      echo "<br>";
      echo "Ditemukan $jumlah";
      echo "<br>";
      while ($baris=mysqli_fetch_array($hasil)) {
        echo "nama      :";
        echo "$baris[0]";
        echo "<br>";
        echo "email     :";
        echo "$baris[1]";
        echo "<br>";
        echo "komentar  :";
        echo "$baris[2]";
        echo "<br>";
      }
     ?>
  </body>
</html>
