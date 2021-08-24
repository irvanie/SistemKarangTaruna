
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h3>Tambah Data</h3>
 
	<form action="insert2.php" method="POST">
		<table>
			<tr>
				<td>Nama Menu</td>
				<td>:</td>
				<td><input type="text" name="nama_menu" required></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td><input type="text" name="stok" required></td>
			</tr>			
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" required></td>
			</tr>
			
			<tr>
				<td>Denda Pengembalian</td>
				<td>:</td>
				<td><input type="text" name="denda_pengembalian" required></td>
			</tr>

			<tr>
				<td>Pemilik Barang</td>
				<td>:</td>
				<td><input type="text" name="pemilik_barang" required></td>
			</tr>

			<tr>
				<td><input type="text" name="letak_barang" value="Belum Masuk Etalase" hidden></td>
			</tr>

			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td><select name="kategori" id="kategori" value="">>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">Dan Lainnya</option>
						</select></td>
			</tr>
			
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="kirim" value="SIMPAN">
					<input type="reset" name="clear" value="BATAL">
				</td>
			</tr>
		</table>
	</form>
 
</body>
</html>