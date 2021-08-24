<?php
session_start();

include 'koneksi.php';     

$query_select = "SELECT * FROM user";
$result_select = mysqli_query($koneksi,$query_select) or die(mysql_error());
$rows = array();
while($row = mysqli_fetch_assoc($result_select))
    $rows[] = $row;
foreach($rows as $key =>$value){
  $nama_lengkapcari =stripslashes($value['nama_lengkap']) ;
  $nowacari =stripslashes($value['nowa']) ;
  $alamatcari =stripslashes($value['alamat_rumah']) ;
    if($value == $_SESSION['User']){
        $nama_lengkap = $nama_lengkapcari;
        $nowa = $nowacari;
        $alamat = $alamatcari;
    }
}

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

<?php
include 'header.php'
?>

</head>

<body>

  <div id="wrapper">

    <!-- start header -->
    <?php
 include 'header2.php';
?>
    <!-- end header -->

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
                <li class="active">Contact Person</li>
              </ul>
              <h2>Sewa Lapangan Futsal</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- JADWAL SEWA LAPANGAN -->
<div class="container">
<br/>
    <center><h2>TABLE BOOKING LAPANGAN FUTSAL</h2></center>
    <table class="datatables">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jam Sewa</th>
          <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM booklap WHERE  tgl_sewa >= CURRENT_DATE and tgl_sewa <= CURRENT_DATE +'10' order by tgl_sewa asc";
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
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['jam_sewa'].".00 WIB"; ?></td>
          <td><?php echo $row['tgl_sewa']; ?></td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
</div>
    <!-- AKHIR TABLE JADWAL SEWA -->

    <section id="content">
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->

      <div class="container">
        <div class="row">
          <div class="span8">
            <h4>Contact Untuk Penyewaan Lapangan Futsal Karang Taruna.</h4>

            <form action="" method="POST" >
              <div class="row">
                <div class="span4 form-group field">
                  <input type="text" name="nama" id="name" value="<?php echo $nama_lengkap ?>" readonly />
                </div>

                <div class="span8 form-group">
                    <!-- dropdown jam -->
                    <select name="jam_sewa">
                    <option selected="selected">Jam Sewa</option>
                    <?php
                    for($a=10; $a<=22; $a+=1){
                        echo"<option value=$a> $a . 00 WIB </option>";
                    }
                    ?>
                    </select>
                </div>

                <div class="span8 form-group">
                <input type="date" name="tgl_sewa" class="form-control" title="Input a Date" min= "<?php echo date('Y-m-d'); ?>"  max="<?php echo date('Y-m-d', strtotime('+3 days')); ?>">
                  <div class="text-center">
                    <button class="btn btn-theme btn-medium margintop10" type="submit" name="submit">Send a Request</button>
                  </div>

                </div>
              </div>

              <?php

                if(isset($_POST['submit'])){
                  $cekjam="SELECT * FROM booklap WHERE jam_sewa = '$_POST[jam_sewa]' and tgl_sewa = '$_POST[tgl_sewa]'";
                  $cek_jam_proses= mysqli_query($koneksi,$cekjam);
                  $data_jam = mysqli_fetch_array($cek_jam_proses, MYSQLI_NUM);
                  if ($data_jam > 0 ) {
                    echo "<script>alert('Data Sudah Ada');</script>";
                    echo "<script>location='contact.php';</script>";
                  }else{ 
                    $nama                   = $_POST['nama'];
                    $jam_sewa               = $_POST['jam_sewa'];
                    $tgl_sewa               = $_POST['tgl_sewa'];
                    $query="INSERT INTO booklap SET nama='$nama', jam_sewa='$jam_sewa', tgl_sewa='$tgl_sewa'";
                    $result=mysqli_query($koneksi, $query);
                    
                    if($query){
                        echo "<script>alert('Data Berhasil Ditambahkan');</script>";
                        echo "<script>location='index.php';</script>";
                    }
                  }
                }
            ?>
            </form>
          </div>
          <div class="span4">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading">Contact information<span></span></h5>

                <ul class="contact-info">
                  <li><label>Address :</label> Jl Anggrek 13 17433<br /> Kota Bekasi - Indonesia ( Belakang SD 06 Jati Sampurna)</li>
                  <li><label>Phone :</label>+62 812 9335 6557</li>
                  <li><label>Email : </label> karangtaruna14@gmail.com</li>
                </ul>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>

    <?php
include 'footer.php'
?>

</body>

</html>
