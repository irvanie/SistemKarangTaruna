
<h2>Verifikasi Barang Rusak/Hilang</h2>
<style>
input.largecheckbox {
            width: 20px;
            height: 20px;
        }
</style>
<?php
include "koneksi.php";
$ambil = $koneksi->query("SELECT * FROM pinjam WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
	?>


<form method="post" enctype="multipart/form-data">

<table>
			<tr>
				<td>Nama Produk</td>
				<td>
				<br>
					<input type="hidden" name="id" value="<?php echo $pecah['id'] ?>">
					<input type="text" name="nama_pinjam" value="<?php echo $pecah['nama_pinjam'] ?>"class="form-control" readonly>
				</td>					
			</tr>	

			<tr>
				<td>Nomor Whatsapp User</td>
				<td><br><input type="text" name="nowa" value="<?php echo $pecah['nohp_pinjam'] ?>"class="form-control" readonly></td>					
			</tr>	

			<tr>
				<td>Harga</td>
				<td><br><input type="text" name="harga_pinjam" value="<?php echo $pecah['harga_pinjam'] ?>"class="form-control" readonly></td>					
			</tr>	
			
			<!-- <tr>
				<td>Apakah Barang Hilang?</td>
				<td><br><input type="checkbox" value="1" name="hilang"  class="largecheckbox" readonly>Ceklis Bila Barang Hilang<br><h7>dan jika barang hilang tidak perlu mengisi tingkat kerusakan</h7></td>					
			</tr>	 -->

			<tr>
				<td>Tingkat Kerusakan</td>
				<td>
				<br>
				<div class="radiobox">
				<label>
				<input type="radio" name="rusak" value=5> Ganti 5 % Harga Barang<br>
				<input type="radio" name="rusak" value=25> Ganti 25 % Harga Barang<br>
				<input type="radio" name="rusak" value=50> Ganti 50 % Harga Barang<br>
                <input type="radio" name="rusak" value=100> Ganti 100 % Harga Barang Karena Rusak / Hilang<br>
				</label>
				</div>
				</td>			
			</tr>	
	
<!-- </div> -->
</table>
<button class="btn btn-primary" name="submit">Kirim Notifikasi Verifikasi Kerusakan</button>
</form>

<?php  
include 'koneksi.php';
if (isset($_POST['submit'])) {
	$rusakhasil = $_POST['rusak']*$_POST['harga_pinjam']/'100';
	// $hilanghasil = $_POST['hilang']*$_POST['harga_pinjam'];

$daftar = mysqli_query($koneksi,"INSERT INTO cekverif VALUES (
  NULL,
  '".$_POST['nama_pinjam']."',
  '".$_POST['harga_pinjam']."',
  '".$_POST['nowa']."',
  '".$rusakhasil."')");
	if($daftar){
		$koneksi->query("DELETE FROM pinjam WHERE id='$_GET[id]'");
	}
	print "<script>alert('Barang Telah Selesai Pengecekan!')
	window.location = 'http://localhost/katar14/notifkerusakan.php';
	</script>";
}
?>
,
  <!-- '".$hilanghasil."' -->