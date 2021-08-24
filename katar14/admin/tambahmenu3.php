
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h3>Tambah Data</h3>
 
	<form action="insert3.php" method="POST">
		<table>
			<tr>
				<td>Nama Menu</td>
				<td>:</td>
				<td><input type="text" name="nama_menu"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td><input type="text" name="stok"></td>
			</tr>			
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga"></td>
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