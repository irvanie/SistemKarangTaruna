
<h2>Verifikasi User yang Daftar</h2>

<table class="table table-bordered">
<thead>
	<tr>
		<th>No</th>
		<th>Username</th>
        <th>Nama</th>
        <th>nowa</th>
        <th>KTP</th>
        <th>Action</th>
		<!-- <th>Action</th> -->


	</tr>
</thead>
<tbody>
	
	<?php $nomor=1; ?>
	<?php $ambil=$koneksi->query("select * from user_temp"); ?>
	<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td> <?php echo $nomor; ?></td>
			<td> <?php echo $pecah['username']; ?></td>
            <td> <?php echo $pecah['nama_lengkap']; ?></td>
            <td> <?php echo $pecah['nowa']; ?></td>
            <td><img src="<?php echo "../file/".$pecah['namafile']; ?>" width='150' height='150'></td>  
            <td>
                <a href="index.php?halaman=detailuser&id=<?php echo $pecah['id']; ?>" class="btn btn-warning">Detail</a>
				<a href="index.php?halaman=hapususer&id=<?php echo $pecah['id']; ?>" class="btn btn-warning">Tidak Acc</a>
			</td>


		</tr>

		<?php $nomor++; ?>
	<?php } ?>
</tbody>	
</table>