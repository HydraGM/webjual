<?php 
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tb_penjualan WHERE id=$id";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header('Location: list_transaksi.php?hapus=sukses');
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
    <b><p> DAFTAR TRANSAKSI </p></b>
    <div class="link">
		<a href="form_transaksi.php">[+]Tambah Baru</a>
        <br>
        <a href="index.html">HOME</a>
	</div>
    <table border="1">
		<tr>
			<th>ID</th>
			<th>No Faktur</th>
			<th>Nama Konsumen</th>
			<th>Kode Barang</th>
			<th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Harga Total</th>
			<th>Tindakan</th>
		</tr>
		<?php
			$query = mysqli_query($conn, "SELECT * FROM tb_penjualan");
				while ($data = mysqli_fetch_array($query)) {
			?>
		<tr>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['no_faktur']; ?></td>
			<td><?php echo $data['nama_konsumen']; ?></td>
			<td><?php echo $data['kode_barang']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
            <td><?php echo $data['harga_satuan']; ?></td>
            <td><?php echo $data['harga_total']; ?></td>
			<td><a href='edit_transaksi.php?id="<?= $data['id'] ?>"'>Edit | <a href='list_transaksi.php?id="<?= $data['id'] ?>"'>Hapus</a></a></td>
		</tr>
			<?php
			}
			?>
	</table>
    <br>
    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>