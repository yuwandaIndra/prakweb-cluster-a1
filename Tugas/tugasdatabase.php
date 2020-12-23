<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TUGAS Pertemuan 3 Bagian 2</title>
  </head>
  <body>
    <h1>Tambah Data</h1>
    <form action="tambah.php" method="post">
      NRP     : <input type="text" name="nrp" size="35" maxlength="50"> <br>
      Nama    : <input type="text" name="nama" size="35" maxlength="50"> <br>
      Alamat  : <input type="text" name="alamat" size="35" maxlength="50"> <br>
      Jurusan : <select name="id_jur">
        <option value="1">Teknik Informatika</option>
        <option value="2">Teknik Elektro</option>
      </select> <br>
      <input type="submit" value="simpan">
      <input type="reset" value="reset">
    </form>
    <form action="cari.php" method="post">
      <input type="submit" name="" value="cari">
    </form>
    <form action="hapus.php" method="post">
      <input type="submit" name="" value="hapus">
    </form>
  </body>
</html>
