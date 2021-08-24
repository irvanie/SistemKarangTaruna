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
<!-- end header -->
<div class="container">
    <br/>


    <center><p>Table Barang Dapat di Beli</p></center>
    <table id="bootstrap-data-table" class="table table-striped datatables">
      <thead>
        <tr>
        <th>No</th>
          <th>Nama Barang</th>
          <th>Sisa Stok</th>
          <th>Letak Barang</th>
          <th>Harga Beli/Barang</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM menu1 WHERE letak_barang != 'Belum Masuk Etalase' ORDER BY nama_menu ASC";
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
          <td><?php echo $row['letak_barang']; ?></td>
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
