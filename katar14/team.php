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
              <h2>Our Team</h2>
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
              <li class="all active"><a href="#">All Divisions</a></li>
              <li class="dev"><a href="#" title="">Ketua/Ketua Divisi</a></li>
              <li class="design"><a href="#" title="">Sekeretaris/Bendahara</a></li>
              <li class="marketing"><a href="#" title="">Anggota</a></li>
            </ul>

            <div class="clearfix"></div>
            <div class="row">
              <section id="team">
                <ul id="thumbs" class="team">

                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="design">
                    <div class="team-box thumbnail">
                      <img src="img/dummies/team/shinta.jpeg" alt="" />
                      <div class="caption">
                        <h5>Shinta</h5>
                        <p>
                          Bendahara
                        </p>
                        <!--<ul class="social-network">-->
                        <!--  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>-->
                        <!--  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>-->
                        <!--  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>-->
                        <!--</ul>-->
                      </div>
                    </div>
                  </li>
                  <!-- End Item Project -->

                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 dev" data-id="id-1" data-type="dev">
                    <div class="team-box thumbnail">
                      <img src="img/dummies/team/rafif.jpeg" alt="" />
                      <div class="caption">
                        <h5>M Rafif</h5>
                        <p>
                          Ketua
                        </p>
                        <!--<ul class="social-network">-->
                        <!--  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>-->
                        <!--  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>-->
                        <!--  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>-->
                        <!--</ul>-->
                      </div>
                    </div>
                  </li>
                  <!-- End Item Project -->

                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 dev" data-id="id-2" data-type="dev">
                    <div class="team-box thumbnail">
                      <img src="img/dummies/team/irfan.jpeg" alt="" />
                      <div class="caption">
                        <h5>Irfan Evandio</h5>
                        <p>
                          Ketua Divisi 1
                        </p>
                        <!--<ul class="social-network">-->
                        <!--  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>-->
                        <!--  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>-->
                        <!--  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>-->
                        <!--</ul>-->
                      </div>
                    </div>
                  </li>
                  <!-- End Item Project -->

                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 dev" data-id="id-0" data-type="dev">
                    <div class="team-box thumbnail">
                      <img src="img/dummies/team/bima.jpeg" alt="" />
                      <div class="caption">
                        <h5>Adi Bima Sanjaya</h5>
                        <p>
                          Ketua Divisi 2 
                        </p>
                        <!--<ul class="social-network">-->
                        <!--  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>-->
                        <!--  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>-->
                        <!--  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>-->
                        <!--</ul>-->
                      </div>
                    </div>
                  </li>
                  <!-- End Item Project -->

                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 dev" data-id="id-4" data-type="dev">
                    <div class="team-box thumbnail">
                      <img src="img/dummies/team/dhika.jpeg" alt="" />
                      <div class="caption">
                        <h5>Andhika Setiawan</h5>
                        <p>
                          Ketua Divisi 3
                        </p>
                        <!--<ul class="social-network">-->
                        <!--  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>-->
                        <!--  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>-->
                        <!--  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>-->
                        <!--</ul>-->
                      </div>
                    </div>
                  </li>
                  <!-- End Item Project -->

                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 marketing" data-id="id-5" data-type="marketing">
                    <div class="team-box thumbnail">
                      <img src="img/dummies/team/akbar.jpeg" alt="" />
                      <div class="caption">
                        <h5>Akbar Evandio</h5>
                        <p>
                          Anggota 1
                        </p>
                        <!--<ul class="social-network">-->
                        <!--  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>-->
                        <!--  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>-->
                        <!--  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>-->
                        <!--</ul>-->
                      </div>
                    </div>
                  </li>
                  <!-- End Item Project -->

                  <li class="item-thumbs span3 marketing" data-id="id-0" data-type="marketing">
                    <div class="team-box thumbnail">
                      <img src="img/dummies/team/bule.jpeg" alt="" />
                      <div class="caption">
                        <h5>Rifqi Darmawan</h5>
                        <p>
                          Anggota 2
                        </p>
                        <!--<ul class="social-network">-->
                        <!--  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>-->
                        <!--  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>-->
                        <!--  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>-->
                        <!--</ul>-->
                      </div>
                    </div>
                  </li>
                  <!-- End Item Project -->

                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="design">
                    <div class="team-box thumbnail">
                      <img src="img/dummies/team/alrani.jpeg" alt="" />
                      <div class="caption">
                        <h5>Alrani</h5>
                        <p>
                          Sekretaris
                        </p>
                        <!--<ul class="social-network">-->
                        <!--  <li><a href="#" title="Twitter"><i class="icon-circled icon-bgdark icon-twitter"></i></a></li>-->
                        <!--  <li><a href="#" title="Google +"><i class="icon-circled icon-bgdark icon-google-plus"></i></a></li>-->
                        <!--  <li><a href="#" title="Dribbble"><i class="icon-circled icon-bgdark icon-dribbble"></i></a></li>-->
                        <!--</ul>-->
                      </div>
                    </div>
                  </li>
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
