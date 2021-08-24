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
                <li class="active">Team</li>
              </ul>
              <h2>Kategori Barang</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul class="team-categ filter">
              <li class="all active"><a href="#">All Kategori</a></li>
              <li class="A"><a href="#" title="">Kategori A</a></li>
              <li class="B"><a href="#" title="">Kategori B</a></li>
              <li class="C"><a href="#" title="">Dan Lainnya</a></li>
            </ul>

            

            <div class="clearfix"></div>
            <div class="row">
              <section id="team">
                <ul id="thumbs" class="team">


                <?php $ambil=$koneksi->query("SELECT * FROM menu1 WHERE letak_barang != 'Belum Masuk Etalase' ORDER BY nama_menu ASC"); ?>
	            	<?php while($pecah = $ambil->fetch_assoc()){ ?>
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="<?php echo $pecah['kategori']; ?>">
                    <div class="team-box thumbnail">
                      <img src="" alt="" />
                      <div class="caption">
                        <h5><?php echo $pecah['nama_menu']; ?></h5>
                        Stok Barang : <?php echo $pecah['stok']; ?>
                        <p>
                        Letak Barang : <?php echo $pecah['letak_barang']; ?>
                        </p>
                        <p>
                         <td>Rp <?php echo number_format($pecah['harga'],0,',','.'); ?></td> 
                        </p>
                        <a href="servicespinjam2.php?&id=<?php echo $pecah['kode_menu']; ?>" class="btn btn-success">Pesan</a>
                        <!--<ul class="social-network">-->
                        <!--  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>-->
                        <!--  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>-->
                        <!--  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>-->
                        <!--</ul>-->
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                  <!-- End Item Project -->

                 

                </ul>
              </section>

            </div>
          </div>
        </div>
      </div>
    </section>

<?php
include 'footer.php'
?>

</body>

</html>
