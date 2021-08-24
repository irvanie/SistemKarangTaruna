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

  <div id="wrapper">

    <!-- start header -->
<?php
 include 'header2.php';
?>

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li>
                <li><a href="#">Pages</a> <i class="icon-angle-right"></i></li>
                <li class="active">About</li>
              </ul>
              <h2>About us</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">

          <div class="span12">
            <h4>About our Organization</h4>
            <p>
              Kami adalah sekelompok pemuda yang melakukan kegiatan positif untuk membantu warga indonesia, khususnya warga yang berada pada daerah Jati Sampurna. Seperti yang dikatakan oleh J. Donald Walters :
            </p>
            <blockquote>
              Kebahagiaan akan tumbuh berkembang manakala Anda membantu orang lain. Namun bilamana Anda tidak membantu sesama, kebahagiaan akan layu dan mengering.
              Kebahagiaan bagaikan sebuah tamaman, harus disirami tiap hari dengan sikap dan tindakan memberi.
            </blockquote>

          </div>

        </div>

        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>
        <!-- end divider -->


        <div class="blankline30"></div>

      </div>
    </section>


    <?php
include 'footer.php';
?>

</body>

</html>
