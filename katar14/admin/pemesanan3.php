
<h2>Rekap Penyewaan Jasa</h2>

<table class="table table-bordered">
<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No Hp</th>
		<th>Paket Jasa</th>
		<th>Harga Jasa/Paket</th>
		<th>Jumlah Paket</th>
		<th>Total Harga Jasa</th>
		<!-- <th>Action</th> -->


	</tr>
</thead>
<tbody>
	
	<?php $nomor=1; ?>
	<?php $ambil=$koneksi->query("select * from jasa"); ?>
	<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td> <?php echo $nomor; ?></td>
			<td> <?php echo $pecah['nama']; ?></td>
			<td> <?php echo $pecah['alamat']; ?></td>
			<td> <?php echo $pecah['nohp']; ?></td>
			<td> <?php echo $pecah['paketjasa']; ?></td>
			<td> Rp<?php echo number_format($pecah['harga'],0,',','.'); ?></td>
			<td> <?php echo $pecah['jumlahpaket']; ?></td>
			<td> Rp<?php echo number_format($pecah['jumlah'],0,',','.'); ?></td>
			<!-- <td>
				<a href="index.php?halaman=hapuspemesanan3&id=<?php echo $pecah['id']; ?>" class="btn btn-warning">Hapus</a>
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
  myWindow = window.open("print3.php", "_blank", "width=500, height=500");
}

function closeWin() {
  myWindow.close();
}
</script>