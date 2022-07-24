<?php
include 'koneksi.php'; 

if ($_GET['id']) {
    $id=$_GET['id'];
    $query = "SELECT * FROM tb_penjualan WHERE id=$id";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($sql); 
    if (mysqli_num_rows($sql) < 1) {
      echo "<script>alert('Data tidak ditemukan')</script>";
    }
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $no_faktur = $_POST['no_faktur'];
  $nama_konsumen = $_POST['nama_konsumen'];
  $kode_barang = $_POST['kode_barang'];
  $jumlah = $_POST['jumlah'];
  $harga_satuan = $_POST['harga_satuan'];
  $harga_total = $_POST['harga_total'];

  $query = mysqli_query($conn, "UPDATE tb_penjualan SET id='$id', no_faktur='$no_faktur', nama_konsumen='$nama_konsumen', kode_barang='$kode_barang', jumlah='$jumlah',harga_satuan='$harga_satuan',harga_total='$harga_total' WHERE id=$id");

  if ($query)  {
    header('Location: list_transaksi.php');
  } else {
    echo "<script>alert('Data gagal diedit')</script>";
  }
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<img src="logo_sekolah.png" class="gambar">
    <BR></BR>
    <b><P> APLIKASI PENJUALAN "NINE MART"</P></b>
    <b><p> DAFTAR BARANG DI GUDANG </p></b>
	<h3>EDIT DATA</h3>
	<form method="post" action="">
		<tr>
			<td>
			<table border="1" class="table2">
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="text" name="id" value="<?php echo $data['id']; ?>"></td>
            </tr>
            <tr>
                <td>No Faktur</td>
                <td>:</td>
                <td><input type="text" name="no_faktur" value="<?php echo $data['no_faktur']; ?>"></td>
            </tr>
            <tr>
                <td>Nama Konsumen</td>
                <td>:</td>
                <td><input type="text" name="nama_konsumen" value="<?php echo $data['nama_konsumen']; ?>"></td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>"></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td>:</td>
                <td><input type="text" name="harga_satuan" value="<?php echo $data['harga_satuan']; ?>"></td>
            </tr>
            <tr>
                <td>Harga Total</td>
                <td>:</td>
                <td><input type="text" name="harga_total" value="<?php echo $data['harga_total']; ?>"></td>
            </tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="80px">
				<button type="submit" name="submit">SIMPAN</button>
			</td>
		</tr>
	</table>
	</form>
	<br>
</body>
</html>