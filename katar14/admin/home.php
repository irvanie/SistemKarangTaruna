<!DOCTYPE html>
<html lang="en">
<head>
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

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body>
<br/>
    <center><p>WAKTU PENGEMBALIAN KURANG DARI 3 HARI</p></center>
    <table id="example">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No WA</th>
          <th>Nama Barang</th>
          <th>Harga Pinjam</th>
          <th>Jumlah Barang</th>
          <th>Tgl_Pengembalian</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM pinjam WHERE datediff(tgl_pengembalian,CURRENT_DATE()) <=3 AND datediff(tgl_pengembalian,CURRENT_DATE()) >=0  ORDER BY nama_pinjam ASC ";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no =1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_array($result))
      {
      ?>
      <?php
      include 'koneksi.php';
      echo
      "<tr>
            <td>".$no."</td>
            <td>".$row['nama_pinjam']."</td>
            <td>".$row['alamat_pinjam']."</td>
            <td>".$row['nohp_pinjam']."</td>
            <td>".$row['barang_pinjam']."</td>
            <td>".$row['harga_pinjam']."</td>
            <td>".$row['jumlah_barang']."</td>
            <td>".$row['tgl_pengembalian']."</td>
      </tr>";
      ?>         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
    <center>
    <td>
    <form method="POST">
    <button type="submit" name="submit" class="btn btn-primary mt-3" style="width:1000px">Kirim Notifikasi</button>
              <?php       
                if(isset($_POST['submit'])){
                  if($no > 1 ){
                    echo "<script>location='http://localhost/katar14/notif1.php';</script>";
                  }else{
                    echo '<script language="javascript" type="text/javascript">';
                    echo'if(!alert("Data Kosong")){';//msg
                      echo 'location.href="index.php"';
                      echo '}';
                      echo'</script>';              
                  }
                }
              ?>
     </form>
    </td>
    </center>


    <!-- PENGEMBALIAN PAS 7 HARI -->

    <br/>
    <center><p>PENGEMBALIAN KURANG DARI 7 HARI</p></center>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No WA</th>
          <th>Nama Barang</th>
          <th>Harga Pinjam</th>
          <th>Jumlah Barang</th>
          <th>Tgl_Pengembalian</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM pinjam WHERE datediff(tgl_pengembalian,CURRENT_DATE()) <=7 AND datediff(tgl_pengembalian,CURRENT_DATE()) >=4 ORDER BY nama_pinjam ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no2 = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_pinjam']; ?></td>
          <td><?php echo $row['alamat_pinjam']; ?></td>
          <td><?php echo $row['nohp_pinjam']; ?></td>
          <td><?php echo $row['barang_pinjam']; ?></td>
          <td><?php echo $row['harga_pinjam']; ?></td>
          <td><?php echo $row['jumlah_barang']; ?></td>
          <td><?php echo $row['tgl_pengembalian']; ?></td>
      </tr>
         
      <?php
        $no2++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
    <center>
    <td>
    <form method="POST">
    <button type="submit" name="submit2" class="btn btn-primary mt-3" style="width:1000px">Kirim Notifikasi</button>
              <?php       
                if(isset($_POST['submit2'])){
                  if($no2 > 1 ){
                    echo "<script>location='http://localhost/katar14/notif2.php';</script>";
                  }else{
                    echo '<script language="javascript" type="text/javascript">';
                    echo'if(!alert("Data Kosong")){';//msg
                      echo 'location.href="index.php"';
                      echo '}';
                      echo'</script>';              
                  }
                }
              ?>
     </form>
    </td>
    </center>

    <!-- PENGEMBALIAN LEBIH DARI 7 HARI -->

    <br/>
    <center><p>WAKTU PENGEMBALIAN PADA BULAN INI</p></center>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No WA</th>
          <th>Nama Barang</th>
          <th>Harga Pinjam</th>
          <th>Jumlah Barang</th>
          <th>Tgl_Pengembalian</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM pinjam WHERE datediff(tgl_pengembalian,CURRENT_DATE()) >7 AND datediff(tgl_pengembalian,CURRENT_DATE()) <=31  ORDER BY nama_pinjam ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no3 = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no3; ?></td>
          <td><?php echo $row['nama_pinjam']; ?></td>
          <td><?php echo $row['alamat_pinjam']; ?></td>
          <td><?php echo $row['nohp_pinjam']; ?></td>
          <td><?php echo $row['barang_pinjam']; ?></td>
          <td><?php echo $row['harga_pinjam']; ?></td>
          <td><?php echo $row['jumlah_barang']; ?></td>
          <td><?php echo $row['tgl_pengembalian']; ?></td>
      </tr>
         
      <?php
        $no3++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
    <center>
    <td>
    <form method="POST">
    <button type="submit" name="submit3" class="btn btn-primary mt-3" style="width:1000px">Kirim Notifikasi</button>
              <?php       
                if(isset($_POST['submit3'])){
                  if($no3 > 1 ){
                    echo "<script>location='http://localhost/katar14/notif3.php';</script>";
                  }else{
                    echo '<script language="javascript" type="text/javascript">';
                    echo'if(!alert("Data Kosong")){';//msg
                      echo 'location.href="index.php"';
                      echo '}';
                      echo'</script>';              
                  }
                }
              ?>
     </form>
    </td>
    </center>
</body>
</html>


