<h2>Barang Peminjaman</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Nama Pemilik Barang</th>
			<th>Harga</th>
			<th>Stok Barang</th>
          	<th>Letak Barang</th>
			<th>Denda Pengembalian/Hari</th>
			<th>Keterangan</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM menu1"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_menu']; ?> </td>
			<td><?php echo $pecah['pemilik_barang']; ?> </td>
			<td> Rp<?php echo number_format($pecah['harga'],0,',','.'); ?></td>
			<td><?php echo $pecah['stok']; ?>  </td>
			<td><?php echo $pecah['letak_barang']; ?></td>
			<td> Rp<?php echo number_format($pecah['denda_pengembalian'],0,',','.'); ?></td>

			<td>
				<a href="index.php?halaman=hapusmenu2&id=<?php echo $pecah['kode_menu']; ?>" class="btn btn-warning">Hapus</a>
				<a href="index.php?halaman=ubahmenu2&id=<?php echo $pecah['kode_menu']; ?>" class="btn btn-warning">Ubah</a>
			</td>
		</tr> 
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahmenu2" class="btn btn-primary">Tambah Data</a>