<h2>Paket Penyewaan Jasa</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Stok Barang</th>
			<th>Keterangan</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM menu2"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_menu']; ?> </td>
			<td> Rp<?php echo number_format($pecah['harga'],0,',','.'); ?></td>
			<td><?php echo $pecah['stok']; ?>  </td>

			<td>
				<a href="index.php?halaman=hapusmenu3&id=<?php echo $pecah['kode_menu']; ?>" class="btn btn-warning">Hapus</a>
				<a href="index.php?halaman=ubahmenu3&id=<?php echo $pecah['kode_menu']; ?>" class="btn btn-warning">Ubah</a>
			</td>
		</tr> 
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahmenu3" class="btn btn-primary">Tambah Data</a>