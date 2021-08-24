<?php
include "koneksi.php"; 
?>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }

    </style>
<center><h2>Rekap Peminjaman</h2></center>

<table class="table table-bordered">
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

		</tr>

		<?php $nomor++; ?>
	<?php } ?>
</tbody>	
</table>
<?php
echo "<script>window.print()</script>";
?>