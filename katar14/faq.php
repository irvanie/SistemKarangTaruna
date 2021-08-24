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
                <li><a href="#">Pages</a> <i class="icon-angle-right"></i></li>
                <li class="active">Faq</li>
              </ul>
              <h2>Frequently Asked Questions</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">

          <div class="span12">
            <h4 class="title"><strong>Gimana Sih </strong>Cara Pesan / Pinjam Barang?</h4>
            <!-- start: Accordion -->
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								<i class="icon-minus"></i> Bagaimana cara pesan barang? </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    Pemesanan barang bisa menggunakan website karang taruna pada bagian Our Services, Anda hanya perlu masuk kebagian tersebut dan meminjam barang. Akan tetapi bila belum 
                    login pada website, anda harus login terlebih dahulu.
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
								<i class="icon-plus"></i> Bagaimana cara pinjam barang? </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    Peminjaman barang bisa menggunakan website karang taruna pada bagian Our Services, Anda hanya perlu masuk kebagian tersebut dan meminjam barang. Akan tetapi bila belum 
                    login pada website, anda harus login terlebih dahulu.
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
								<i class="icon-plus"></i> Bagaimana bila ada barang rusak atau hilang? </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    Anda akan dikirimkan notifikasi lewat email dan diberitahu denda yang akan anda dapatkan , denda yang didapatkan bermacam - macam 
                    tergantung barang yang anda pinjam dan total kerusakannya.
                  </div>
                </div>
              </div>
            </div>
            <!--end: Accordion -->

            <div class="blankline30"></div>
            <div class="solidline"></div>
            <div class="blankline20"></div>

            <h4 class="title"><strong>Gimana Sih </strong>Cara Sewa Jasa Karang Taruna 14?</h4>
            <!-- start: Accordion -->
            <div class="accordion" id="accordion3">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion3" href="#billing-collapseOne">
								<i class="icon-minus"></i> Bagaimana cara menyewa jasa karang taruna? </a>
                </div>
                <div id="billing-collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    Anda tinggal memilih jasa yang anda inginkan , dan mengisi sesuai form yang ada pada bagian Penyewaan Jasa.
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#billing-collapseTwo">
								<i class="icon-plus"></i> Bagaimana sistem pembayaran penyewaan jasanya? </a>
                </div>
                <div id="billing-collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    Penyewaan jasa karang taruna menggunakan pembayaran melalui hanya melalui Cash , jasa yang dibayar tergantung dari pekerjaan dan banyak sumber daya manusia yang digunakan.
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#billing-collapseThree">
								<i class="icon-plus"></i> apa jasa yang diberikan sesuai dengan harga? </a>
                </div>
                <div id="billing-collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    Kami tidak mengambil banyak untung dalam penyewaan jasa , dikarenakan penyewaan jasa ini kita lakukan untuk membantu UMKM setempat atau acara yang ada pada ruang lingkup Jati Sampurna. Dan uang yang terkumpul akan kami kumpulkan untuk kebutuhan seperti Bencana Alam dan semacamnya.
                  </div>
                </div>
              </div>
            </div>
            <!--end: Accordion -->

          </div>

        </div>
      </div>
    </section>


<?php
include 'footer.php'
?>

</body>

</html>
