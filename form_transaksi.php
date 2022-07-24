<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $no_faktur = $_POST['no_faktur'];
  $nama_konsumen = $_POST['nama_konsumen'];
  $kode_barang = $_POST['kode_barang'];
  $jumlah = $_POST['jumlah'];
  $harga_satuan = $_POST['harga_satuan'];
  $harga_total = $_POST['harga_total'];

  $query = "INSERT INTO tb_penjualan (no_faktur, nama_konsumen, kode_barang, jumlah, harga_satuan, harga_total) VALUES ('$no_faktur', '$nama_konsumen', '$kode_barang', '$jumlah', '$harga_satuan', '$harga_total')";
  $sql = mysqli_query($conn, $query);

  if ($sql)  {
    header('Location: index.html?input=sukses');
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
    <b><p>FORM TRANSAKSI</p></b>
    <table border="1">
    <form method="post">
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>No Faktur</td>
                <td>:</td>
                <td><input type="text" name="no_faktur"></td>
            </tr>
            <tr>
                <td>Nama Konsumen</td>
                <td>:</td>
                <td><input type="text" name="nama_konsumen"></td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kode_barang"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td>:</td>
                <td><input type="text" name="harga_satuan"></td>
            </tr>
            <tr>
                <td>Harga Total</td>
                <td>:</td>
                <td><input type="text" name="harga_total"></td>
            </tr>
            </table>
            <br>
            <button type="submit" name="submit">DAFTAR</button>
            <br>
    </form>
    <p><b> Copyright @ SMK Negeri 9 Semarang </b></p>
</body>
</html>