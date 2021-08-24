
<h2>Rekap Penjualan Barang</h2>

<table class="table table-bordered">
<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No Hp</th>
		<th>Nama Barang</th>
		<th>Harga/Item</th>
		<th>Jumlah Barang</th>
		<th>Total Harga</th>
		<!-- <th>Action</th> -->


	</tr>
</thead>
<tbody>
	
	<?php $nomor=1; ?>
	<?php $ambil=$koneksi->query("select * from beli"); ?>
	<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td> <?php echo $nomor; ?></td>
			<td> <?php echo $pecah['nama']; ?></td>
			<td> <?php echo $pecah['alamat']; ?></td>
			<td> <?php echo $pecah['nohp']; ?></td>
			<td> <?php echo $pecah['nama_barang']; ?></td>
			<td> Rp<?php echo number_format($pecah['harga'],0,',','.'); ?></td>
			<td> <?php echo $pecah['jumlah_barang']; ?></td>
			<td> Rp<?php echo number_format($pecah['jumlah'],0,',','.'); ?></td>
			<!-- <td>
				<a href="index.php?halaman=hapuspemesanan2&id=<?php echo $pecah['id']; ?>" class="btn btn-warning">Hapus</a>
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
  myWindow = window.open("print2.php", "_blank", "width=500, height=500");
}

function closeWin() {
  myWindow.close();
}
</script>