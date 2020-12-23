<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah</title>
  </head>
  <body>
    <?php
      $nrp=$_POST["nrp"];
      $nama=$_POST["nama"];
      $alamat=$_POST["alamat"];
      $id_jur=$_POST["id_jur"];
      $koneksi=mysqli_connect("localhost","root","","mahasiswa") or die("koneksi gagal") ;
      $sqlstr="insert into mahasiswa (nrp,nama,alamat,id_jur) values ('$nrp','$nama','$alamat','$id_jur')";
      $hasil = mysqli_query($koneksi,$sqlstr);
      echo "Simpan Data Berhasil Dilakukan";
    ?>
    <form action="tugasdatabase.php" method="post">
      <input type="submit" value="balik ke home">
    </form>
  </body>
</html>
