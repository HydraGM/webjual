<?php
include 'koneksi.php'; 

if ($_GET['kode_barang']) {
    $kode_barang=$_GET['kode_barang'];
    $query = "SELECT * FROM tb_master WHERE kode_barang=$kode_barang";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($sql); 
    if (mysqli_num_rows($sql) < 1) {
      echo "<script>alert('Data tidak ditemukan')</script>";
    }
if (isset($_POST['submit'])) {
  $kode_barang = $_POST['kode_barang'];
  $nama_barang = $_POST['nama_barang'];
  $harga_jual = $_POST['harga_jual'];
  $harga_beli = $_POST['harga_beli'];
  $satuan = $_POST['satuan'];
  $kategori = $_POST['kategori'];

  $query = mysqli_query($conn, "UPDATE tb_master SET kode_barang='$kode_barang', nama_barang='$nama_barang', harga_jual='$harga_jual', harga_beli='$harga_beli', satuan='$satuan',kategori='$kategori' WHERE kode_barang=$kode_barang");

  if ($query)  {
    header('Location: list_stok.php');
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
						<td>Kode Barang</td>
						<td>:</td>
						<td><input type="text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>"></td>
					</tr>
					<tr>
						<td>Nama Barang</td>
						<td>:</td>
						<td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>"></td>
					</tr>
					<tr>
						<td>Harga Jual</td>
						<td>:</td>
						<td><input type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>"></td>
					</tr>
					<tr>
						<td>Harga Beli</td>
						<td>:</td>
						<td><input type="text" name="harga_beli" value="<?php echo $data['harga_beli']; ?>"></td>
					</tr>
					<tr>
						<td>Satuan</td>
						<td>:</td>
						<td><input type="text" name="satuan" value="<?php echo $data['satuan']; ?>"></td>
					</tr>
					<tr>
						<td>Kategori</td>
						<td>:</td>
						<td><input type="text" name="kategori" value="<?php echo $data['kategori']; ?>"></td>
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