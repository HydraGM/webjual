<?php 
include 'koneksi.php';
if (isset($_GET['kode_barang'])) {
    $kode_barang = $_GET['kode_barang'];
    $query = "DELETE FROM tb_master WHERE kode_barang=$kode_barang";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header('Location: list_stok.php?hapus=sukses');
    } else {
        echo "<script>alert('Data gagal dihapus')</script>";
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="logo_sekolah.png" class="gambar">
    <BR></BR>
    <b><P> APLIKASI PENJUALAN "NINE MART"</P></b>
    <b><p> DAFTAR BARANG DI GUDANG </p></b>

    <div class="link">
		<a href="form_stok.php">[+]Tambah Baru</a>
		<br>
		<a href="index.html">HOME</a>
	</div>
    <table border="1">
		<tr>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Harga Jual</th>
			<th>Harga beli</th>
			<th>Satuan</th>
            <th>Kategori</th>
			<th>Tindakan</th>
		</tr>
		<?php
			$query = mysqli_query($conn, "SELECT * FROM tb_master");
				while ($data = mysqli_fetch_array($query)) {
			?>
		<tr>
			<td><?php echo $data['kode_barang']; ?></td>
			<td><?php echo $data['nama_barang']; ?></td>
			<td><?php echo $data['harga_jual']; ?></td>
			<td><?php echo $data['harga_beli']; ?></td>
            <td><?php echo $data['satuan']; ?></td>
            <td><?php echo $data['kategori']; ?></td>
			<td><a href='edit_stok.php?kode_barang="<?= $data['kode_barang'] ?>"'>Edit | <a href='list_stok.php?kode_barang="<?= $data['kode_barang'] ?>"'>Hapus</a></a></td>
		</tr>
			<?php
			}
			?>
	</table>
    <br>
    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>