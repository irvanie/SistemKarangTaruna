<h2>Ubah Produk</h2>
<?php
include "koneksi.php";
$ambil = $koneksi->query("SELECT * FROM user WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
	?>


<form method="post" enctype="multipart/form-data">

<table>
			<tr>
				<td>Nama Produk</td>
				<td>
					<input type="text" name="username" value="<?php echo $pecah['username'] ?> " readonly>
					<input type="text" name="password" value="<?php echo $pecah['password'] ?> " hidden readonly>
					<input type="text" name="namafile" value="<?php echo $pecah['namafile'] ?> " hidden readonly>
                </td>					
			</tr>	

			<tr>
				<td>Stok</td>
				<td><input type="text" name="nama_lengkap" value="<?php echo $pecah['nama_lengkap'] ?>" readonly></td>
			</tr>	

            <tr>
				<td>Stok</td>
				<td><input type="text" name="nowa" value="<?php echo $pecah['nowa'] ?>" readonly></td>
			</tr>	

            <tr>
				<td>Stok</td>
				<td><input type="text" name="email_user" value="<?php echo $pecah['email_user'] ?>" readonly></td>
			</tr>	

            <tr>
				<td>Stok</td>
				<td><input type="text" name="jenis_kelamin" value="<?php echo $pecah['jenis_kelamin'] ?>" readonly></td>
			</tr>	

            <tr>
				<td>Stok</td>
				<td><input type="text" name="alamat_rumah" value="<?php echo $pecah['alamat_rumah'] ?>" readonly></td>
			</tr>	

			<tr>
				<td>Harga</td>
				<td><img src="<?php echo "../file/".$pecah['namafile']; ?>" width='500' height='500' readonly></td>						
			</tr>	
			

	
<!-- </div> -->
</table>
<a href="index.php?halaman=userall" class="btn btn-warning">Kembali</a>
</form>
<?php  ?>
