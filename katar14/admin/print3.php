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
<h2>Rekap Penyewaan Jasa</h2>

<center><table class="table table-bordered"></center>
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

		</tr>

		<?php $nomor++; ?>
	<?php } ?>
</tbody>	
</table>
<?php
echo "<script>window.print()</script>";

?>