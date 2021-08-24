<?php
session_start();

include 'koneksi.php';   

if (!isset($_SESSION['User']))
{
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='loginu.php';</script>";
    header('location:loginu.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<?php
include 'header.php';
?>
</head>


<body>


<!-- start header -->
<?php
 include 'header2.php';
?>
<div class="container">
<!-- end header -->
    <br/>

    <center><p>Table Barang Dapat di Sewa</p></center>
    <table id="bootstrap-data-table" class="table table-striped datatables">
      <thead>
        <tr>
          <th>No</th>
          <th>Jenis Jasa</th>
          <th>Sisa Paket</th>
          <th>Harga Jasa/Paket</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM menu2 ORDER BY nama_menu ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_menu']; ?></td>
          <td><?php echo $row['stok']; ?></td>
          <td>Rp <?php echo number_format($row['harga'],0,',','.'); ?></td>
          <!-- <td>
              <a href="edit_produk.php?id=<?php echo $row['nama_menu']; ?>">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $row['nama_menu']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td> -->
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
</div>

<footer>
<?php
include 'footer.php'
?>
</footer>

</body>

</html>
