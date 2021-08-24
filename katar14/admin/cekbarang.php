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
    <center><p>CEK BARANG & DENDA BARANG TELAT</p></center>
    <table id="example">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Nama Barang</th>
          <th>Jumlah Barang</th>
          <th>Telat Pengembalian(Hari)</th>
          <th>Notif Denda Telat</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim


      $query = "SELECT * , datediff(tgl_pengembalian,CURRENT_DATE()) as bedahari FROM pinjam WHERE datediff(tgl_pengembalian,CURRENT_DATE()) <=-1 ";
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
            <td>".$row['barang_pinjam']."</td>
            <td>".$row['jumlah_barang']."</td>
            <td>".$row['bedahari']*-'1'*$row['denda_telat']."</td>";
      ?>        
        <td>
        <a href="http://localhost/katar14/notifdenda.php?&id=<?php echo $row['id']; ?>" class="btn btn-danger">Notif Denda</a>
        </td>

        <td>
        <a href="index.php?halaman=verifkerusakan&id=<?php echo $row['id']; ?>" class="btn btn-warning">Verif Kerusakan</a>
        </td>
      </tr> 
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
</body>
</html>


