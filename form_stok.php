<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
  $kode_barang = $_POST['kode_barang'];
  $nama_barang = $_POST['nama_barang'];
  $harga_jual = $_POST['harga_jual'];
  $harga_beli = $_POST['harga_beli'];
  $satuan = $_POST['satuan'];
  $kategori = $_POST['kategori'];

  $query = "INSERT INTO tb_master (kode_barang, nama_barang, harga_jual, harga_beli, satuan, kategori) VALUES ('$kode_barang', '$nama_barang', '$harga_jual', '$harga_beli', '$satuan', '$kategori')";
  $sql = mysqli_query($conn, $query);

  if ($sql)  {
    header('Location: list_stok.php?input=sukses');
  } else {
    echo "<script>alert('Data gagal ditambahkan')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="logo_sekolah.png" class="gambar">
    <BR></BR>
    <b><p>FORM STOK BARANG</p></b>
    <table border="1">
    <form method="post">
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kode_barang"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>:</td>
                <td><input type="text" name="harga_jual"></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td>:</td>
                <td><input type="text" name="harga_beli"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>:</td>
                <td><input type="text" name="satuan"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td><input type="text" name="kategori"></td>
            </tr>
            </table>
            <br>
            <button type="submit" name="submit">DAFTAR</button>
            <br>
    </form>
    <p><b> Copyright @ SMK Negeri 9 Semarang </b></p>
</body>
</html>