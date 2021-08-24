<h2>Ubah Produk</h2>
<?php
include "koneksi.php";
$ambil = $koneksi->query("SELECT * FROM menu WHERE kode_menu='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
	?>


<form method="post" enctype="multipart/form-data">

<table>
			<tr>
				<td>Nama Produk</td>
				<td>
					<input type="hidden" name="kode_menu" value="<?php echo $pecah['kode_menu'] ?>">
					<input type="text" name="nama_menu" value="<?php echo $pecah['nama_menu'] ?> ">
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

 
mysqli_query($koneksi, "UPDATE menu SET nama_menu='$nama_menu', harga='$harga' , stok='$stok' WHERE kode_menu='$kode_menu'");
 
	print "<script>alert('Berhasil Mengubah Data')
	window.location = '?page=menu';
	</script>";
	}catch(Exception $e){
	
		echo $e->getMessage();
	}
}
?>