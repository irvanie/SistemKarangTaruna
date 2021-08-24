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

    <!-- section featured -->
    <section id="featured">

      <!-- slideshow start here -->

      <div class="camera_wrap" id="camera-slide">

        <!-- slide 1 here -->
        <div data-src="img/slides/camera/slide1/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>Karang Taruna <span class="colored">RW 14</span></strong></h2>
                  <p class="animated fadeInUp">Karang Taruna RW 14 adalah karang taruna jatisampurna yang berada pada RW 14 Kranggan Permai, kami pemuda RW 14 membantu dalam hal kemasyarakatan yang khususnya berada pada ruang lingkup RW 14.
                    Kami disini juga menyediakan Peminjaman Barang , Penjualan Barang , dan Penyewaan Jasa.
                  </p>
                  <a href="verifikasi.php" target="_blank" class="btn btn-success btn-large animated fadeInUp">
											<i class="icon-link"></i> Verifikasi Whatsapp Disini 
										</a>
                  </div>
                <div class="span6">
                  <img src="img/slides/camera/slide1/screen.png" alt="" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- slide 2 here -->
        <div data-src="img/slides/camera/slide2/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <img src="img/slides/camera/slide2/iMac.png" alt="" />
                </div>
                <div class="span6" method="POST">
                  <h2 class="animated fadeInDown"><strong>Berikan Saran Kepada <span class="colored">Karang Taruna 14</span></strong></h2>
                  <p class="animated fadeInUp"> Saran yang anda berikan sangat berguna untuk kemajuan kami.</p>
                  <form method="POST">
                    <div class="input-append">
                      <input class="span3 input-large" type="text" id="komentar" name="komentar" required="" >
                      <button class="btn btn-theme btn-large" name="submit" type="submit">Submit Saran</button>
                    </div>
                    <?php       
                if(isset($_POST['submit'])){
                    $komentar                 = $_POST['komentar'];
                    $query="INSERT INTO komen SET komentar='$komentar'";
                    $result=mysqli_query($koneksi, $query);
                    if($query){
                        echo "<script>alert('Data Berhasil Ditambahkan');</script>";
                        echo "<script>location='index.php';</script>";
                    }
                }
            ?>

                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>


      </div>

      <!-- slideshow end here -->

    </section>
    <!-- /section featured -->

    <section id="content">
      <div class="container">


        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span4">
                <div class="box flyLeft">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-star active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4>High <strong>Quality</strong></h4>
                    <p>
                      Kami memberikan kuliatas terbaik terhadap apa yang kami jual dan terhadap jasa yang kami berikan.
                    </p>
                    <!-- <a href="#">Learn More</a> -->
                  </div>
                </div>
              </div>

              <div class="span4">
                <div class="box flyIn">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-dropbox active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4>Rich of <strong>Experience</strong></h4>
                    <p>
                      Kami berharap dengan adanya karang taruna ini maka pengalaman dari para anggota akan menjadi lebih kaya, mereka dapat melakukan apapun dalam kondisi bagaimanapun.
                    </p>
                    <!-- <a href="#">Learn More</a> -->
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="box flyRight">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-laptop active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4>Modern <strong>Organization</strong></h4>
                    <p>
                      Kami merupakan organisasi yang modern, dimana kami mencoba mengikuti perkembangan zaman. kami menggunakan website untuk pemesanan barang & jasa kami.
                    </p>
                    <!-- <a href="#">Learn More</a> -->
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>


        <div class="row">
          <div class="span12 aligncenter">
            <h3 class="title">WHAT PEOPLE <strong>SAYING</strong> ABOUT US</h3>
            <div class="blankline30"></div>

            <ul class="bxslider">
              <li>
                <blockquote>
                  Karang Taruna adalah organisasi kemasyarakatan yang terdiri dari para pemuda, karang taruna membantu daerah RW 14 untuk lebih maju
                  mereka membantu dari hal hal kecil hingga hal hal besar.
                </blockquote>
                <div class="testimonial-autor">
                  <img src="img/dummies/testimonial/1.png" alt="" />
                  <h4>Ketua RW 14</h4>
                  <a href="#">Ketua RW 14</a>
                </div>
              </li>
              <li>
                <blockquote>
                Dengan Adanya Karang Taruna, suasana menjadi lebih ramai dan kondusif. karena karang taruna membantu untuk menertipkan kawasan pada daerah anggrek
                </blockquote>
                <div class="testimonial-autor">
                  <img src="img/dummies/testimonial/2.png" alt="" />
                  <h4>Ketua PB Anggrek</h4>
                  <a href="#">Ketua PB Anggrek</a>
                </div>
              </li>
              <li>
                <blockquote>
                Karang Taruna adalah organisasi kemasyarakatan yang terdiri dari para pemuda, karang taruna membantu daerah RW 14 untuk lebih maju
                  mereka membantu dari hal hal kecil hingga hal hal besar.
                </blockquote>
                <div class="testimonial-autor">
                  <img src="img/dummies/testimonial/3.png" alt="" />
                  <h4>Ketua RW 14</h4>
                  <a href="#">Ketua RW 14</a>
                </div>
              </li>
              <li>
              <blockquote>
                Dengan Adanya Karang Taruna, suasana menjadi lebih ramai dan kondusif. karena karang taruna membantu untuk menertipkan kawasan pada daerah anggrek
                </blockquote>
                <div class="testimonial-autor">
                  <img src="img/dummies/testimonial/2.png" alt="" />
                  <h4>Ketua PB Anggrek</h4>
                  <a href="#">Ketua PB Anggrek</a>
                </div>
              </li>
            </ul>

          </div>
        </div>

      </div>
    </section>

    <?php
include 'footer.php'
?>

</body>
</html>
