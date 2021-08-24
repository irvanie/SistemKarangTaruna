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
include 'header.php'
?>
</head>

<body>

  <div id="wrapper">

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
                <li><a href="#">Pages</a> <i class="icon-angle-right"></i></li>
                <li class="active">Faq</li>
              </ul>
              <h2>Keuntungan Verifikasi Whatsapp Anda</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">

          <div class="span12">
            <h4 class="title"><strong>Keuntungannya apa sih </strong> bagi warga yang verifikasi?</h4>
            <!-- start: Accordion -->
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								<i class="icon-minus"></i> Keuntungan Pertama </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                  User akan mendapatkan notifikasi untuk setiap barang yang dipinjam saat barang telah mendekati waktu yang ditentukan.
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
								<i class="icon-plus"></i> Apakah nomor whatsapp harus sesuai dengan saat register? </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                  Ya , nomor yang diverifikasi harus sesuai dengan nomor yang diregister .
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
								<i class="icon-plus"></i> Bagaimana bila nomor yang dipunya hilang? </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                  kalian bisa melakukan perubahan pada bagian About me pada navigasi dikanan atas.
                  </div>
                </div>
              </div>
            </div>
            <!--end: Accordion -->
<!-- 
            <div class="blankline30"></div>
            <div class="solidline"></div>
            <div class="blankline20"></div>
            end: Accordion -->
          </div>
        </div>
      </div>
    </section>
<center>
<p>Silahkan Click Button dibawah untuk Melakukan Verifikasi</p>
<div style=" 
font-size: 16px;"> &nbsp; <a href="https://api.whatsapp.com/send/?phone=%2B14155238886&text=Join%20Deep-Program" class="btn btn-success square-btn-adjust">Verifikasi Disini</a> </div>
<br>
<p>atau scan QR CODE dibawah ini.<br>
    <img src="img/QRCODE-WA.png" />
</p>
</center>
<?php
include 'footer.php'
?>
 
</body>

</html>
