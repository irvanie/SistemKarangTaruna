
<h2>Ubah Produk</h2>
<?php
include "koneksi.php";
$ambil = $koneksi->query("SELECT * FROM menu1 WHERE kode_menu='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
	?>


<form method="post" enctype="multipart/form-data">

<table>
			<tr>
				<td>Nama Produk</td>
				<td>
					<input type="hidden" name="kode_menu" value="<?php echo $pecah['kode_menu'] ?>">
					<input type="text" name="nama_menu" value="<?php echo $pecah['nama_menu'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Stok</td>
				<td><input type="text" name="stok" value="<?php echo $pecah['stok'] ?>"></td>
			</tr>	

			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $pecah['harga'] ?>"></td>										
			</tr>	
			
			<tr>
				<td>Denda Barang/Hari</td>
				<td><input type="text" name="denda_pengembalian" value="<?php echo $pecah['denda_pengembalian'] ?>"></td>						
			</tr>			

			<tr>
				<td>Pemilik Barang</td>
				<td><input type="text" name="pemilik_barang" value="<?php echo $pecah['pemilik_barang'] ?>"></td>						
			</tr>

			<tr>
				<td>Letak barang</td>
				<td><select name="letak_barang" id="letak_barang" value="<?php echo $pecah['letak_barang'] ?>">>
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="A3">A3</option>
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="B3">B3</option>
                        </select></td>						
			</tr>
<!-- </div> -->
</table>
<button class="btn btn-primary" name="submit">Simpan</button>
</form>
<?php  ?>


<?php  
include 'koneksi.php';
if (isset($_POST['submit'])) {
	try{
$kode_menu = $_POST['kode_menu'];
$nama_menu = $_POST['nama_menu'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$denda_pengembalian = $_POST['denda_pengembalian'];
$pemilik_barang = $_POST["pemilik_barang"];
$letak_barang = $_POST["letak_barang"];


 
mysqli_query($koneksi, "UPDATE menu1 SET nama_menu='$nama_menu', harga='$harga', stok='$stok', denda_pengembalian = '$denda_pengembalian' , letak_barang = '$letak_barang', pemilik_barang = '$pemilik_barang' WHERE kode_menu='$kode_menu'");
 
	print "<script>alert('Berhasil Mengubah Data')
	window.location = '?page=menu2';
	</script>";
	}catch(Exception $e){
	
		echo $e->getMessage();
	}
}
?>