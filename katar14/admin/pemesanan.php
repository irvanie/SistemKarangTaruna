
<h2>Rekap Peminjaman</h2>

<table class="table table-bordered datatables" >
<thead>

	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No WA</th>
		<th>Nama Barang</th>
		<th>Harga Satuan</th>
		<th>Banyak Pinjam</th>
		<th>Tanggal Pengembalian</th>
		<th>Jumlah</th>
		<!-- <th>Action</th> -->


	</tr>
</thead>
<tbody>
	
	<?php $nomor=1; ?>
	<?php $ambil=$koneksi->query("select * from pinjam"); ?>
	<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td> <?php echo $nomor; ?></td>
			<td> <?php echo $pecah['nama_pinjam']; ?></td>
			<td> <?php echo $pecah['alamat_pinjam']; ?></td>
			<td> <?php echo $pecah['nohp_pinjam']; ?></td>
			<td> <?php echo $pecah['barang_pinjam']; ?></td>
			<td> Rp<?php echo number_format($pecah['harga_pinjam'],0,',','.'); ?></td>
			<td> <?php echo $pecah['jumlah_barang']; ?></td>
			<td> <?php echo $pecah['tgl_pengembalian']; ?></td>
			<td> Rp<?php echo number_format($pecah['tot_harga'],0,',','.'); ?></td>
			<!-- <td>
				<a href="index.php?halaman=hapuspemesanan&id=<?php echo $pecah['id']; ?>" class="btn btn-warning">Hapus</a>
			</td> -->


		</tr>

		<?php $nomor++; ?>
	<?php } ?>
</tbody>	
</table>

<center>
<button onclick="openWin('')">Print</button>
<button onclick="closeWin()">Close Print</button>
</center>

<script>
var myWindow;

function openWin() {
  myWindow = window.open("print1.php", "_blank", "width=500, height=500");
}

function closeWin() {
  myWindow.close();
}
</script>
