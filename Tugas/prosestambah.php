<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simpan Buku Tamu</title>
  </head>
  <body>
    <h1>Simpan Buku Tamu</h1>
    <?php
      $nama=$_POST["nama"];
      $email=$_POST["email"];
      $komentar=$_POST["komentar"];
      $koneksi=mysqli_connect("localhost","root","","mahasiswa") or die("koneksi gagal") ;
      $sqlstr="insert into bukutamu (nama,email,komentar) values ('$nama','$email','$komentar')";
      $hasil = mysqli_query($koneksi,$sqlstr);
      echo "Nama    : $nama <br>";
      echo "Email    : $email <br>";
      echo "Komentar    : $komentar <br>";
      echo "Simpan Buku Tamu Berhasil Dilakukan";
    ?>
  </body>
</html>
