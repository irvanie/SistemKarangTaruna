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
  $usernamecari =stripslashes($value['username']) ;
  if($value == $_SESSION['User']){
        $nama_lengkap = $nama_lengkapcari;
        $nowa = $nowacari;
        $alamat = $alamatcari;
        $username = $usernamecari;
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

    <!-- section featured -->
    <section id="content">
        <div class="container">

    <!-- ISI DENGAN FORM CRUD -->

    <!-- FORM UNTUK DATA PINJAM BELI DAN SEWA JASA KARANG TARUNA 14 -->
    <section id="pesan"><div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="text-center">KARANG TARUNA 14 INVEN</h2>
        <!-- <div class="card">
          <div class="card-header"> -->
        <hr>
      </div>
        <form method="POST">        
            <div class="card-body">
              <table class="table">
                <tbody>
                  <tr>
                    <td>Nama Peminjam</td>
                    <td>:</td>
                    <td>
                      <input type="text" name="nama_pinjam" value="<?php echo $nama_lengkap ?>" readonly class="form-control" required="">
                    </td>
                  </tr>
                  <tr>
                    <td>Username Peminjam</td>
                    <td>:</td>
                    <td>
                      <input type="text" name="nama_pinjam" value="<?php echo $username ?>" readonly class="form-control" required="">
                    </td>
                  </tr>
                  <tr>
                    <td>Alamat Peminjam</td>
                    <td>:</td>
                    <td>
                      <input type="text" name="alamat_pinjam" value="<?php echo $alamat ?>" readonly class="form-control" style="height:70px" required="">
                    </td>
                  </tr>

                  <tr>
                    <td>No Hp Peminjam</td>
                    <td>:</td>
                    <td>
                      <input type="text" name="nohp_pinjam" class="form-control" value="<?php echo $nowa ?>" readonly required pattern="\d*" maxlength="15" title="Input a number">
                    </td>
                  </tr>  
                    <tr>
                        <td>Nama Barang</td>
                        <td>:</td>
                        <td>
                        <?php
                        include "koneksi.php";
                        $ambil = $koneksi->query("SELECT * FROM menu1 WHERE kode_menu='$_GET[id]'");
                        $pecah = $ambil->fetch_assoc();
                          ?>                          
                        <input type="text" id="barang_pinjam" name="barang_pinjam" class="form-control" value="<?php echo $pecah['nama_menu'] ?>" required="" onclick="total()" readonly>
                        </td>
                    </tr>

                    <tr>
                        <td>Harga Barang</td>
                        <td>:</td>
                        <td>
                        <?php
                        include "koneksi.php";
                        $ambil = $koneksi->query("SELECT * FROM menu1 WHERE kode_menu='$_GET[id]'");
                        $pecah = $ambil->fetch_assoc();
                          ?>                          
                        <input type="text" id="harga" name="harga" class="form-control" value="<?php echo $pecah['harga'] ?>" required="" onclick="total()" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Barang</td>
                        <td>:</td>
                        <td>
                            <input type="number" id="jumlah_barang" name="jumlah_barang" class="form-control" class="form-control" required="" onkeyup="total()">
                        </td>
                    </tr>

                  <tr>
                    <td>Tanggal Pengembalian</td>
                    <td>:</td>
                    <td>
                      <input type="date" name="tgl_pengembalian" id="tgl_pengembalian" class="form-control" title="Input a Date" min= "<?php echo date('Y-m-d'); ?>"  max="<?php echo date('Y-m-d', strtotime('+1 months')); ?>" onchange="total()">
                    </td>
                  </tr>

                    <tr>
                        <td>Total</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tot_harga" id="tot_harga" class="form-control" required=""  readonly>
                            <br>
                            </br>
                            <button type="submit" name="submit" class="btn btn-primary mt-3" style="width:1000px">Pesan</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
            <?php       
                if(isset($_POST['submit'])){
                    $nama_pinjam                  = $_POST['nama_pinjam'];
                    $username                     = $_POST['username'];
                    $alamat_pinjam                = $_POST['alamat_pinjam'];
                    $nohp_pinjam                  = $_POST['nohp_pinjam'];
                    $barang_pinjam                = $_POST['barang_pinjam'];
                    $harga                        = $_POST['harga'];
                    $jumlah_barang                = $_POST['jumlah_barang'];
                    $tgl_pengembalian             = $_POST['tgl_pengembalian'];
                    $tot_harga                    = $_POST['tot_harga'];
                    $selSto =mysqli_query($koneksi, "SELECT * FROM menu1 WHERE nama_menu='$barang_pinjam'");
                    $sto    =mysqli_fetch_array($selSto);
                    $stok    =$sto['stok'];
                    $sisa = $stok-$jumlah_barang;
                    
                    $denda_telatcari =mysqli_query($koneksi, "SELECT * FROM menu1 WHERE nama_menu='$barang_pinjam'");
                    $dt    =mysqli_fetch_array($denda_telatcari);
                    $denda_telat    =$dt['denda_pengembalian'];


                    if($jumlah_barang>$stok){
                      echo "<script>alert('Stok Barang Kurang');</script>";
                    }
                    elseif($jumlah_barang<=0){
                      echo "<script>alert('Isi Jumlah Barang Dengan Benar');</script>";
                    }
                    elseif($tot_harga<=0){
                      echo "<script>alert('Isi Tanggal Dengan Benar');</script>";
                    }
                    else
                    {
                    $upstok= mysqli_query($koneksi, "UPDATE menu1 SET stok='$sisa' WHERE nama_menu='$barang_pinjam'"); 
                    
      
                    $query="INSERT INTO pinjam  SET  username='$username',nama_pinjam='$nama_pinjam', alamat_pinjam='$alamat_pinjam', nohp_pinjam='$nohp_pinjam', barang_pinjam='$barang_pinjam', harga_pinjam='$harga', jumlah_barang='$jumlah_barang',tgl_pengembalian='$tgl_pengembalian', tot_harga='$tot_harga', denda_telat ='$denda_telat'";
                    $result=mysqli_query($koneksi, $query);
                    if($query){
                        echo "<script>alert('Back To Home');</script>";
                        echo "<script>location='index.php';</script>";
                    }
                  }
                }
            ?>
            </form>
          </div>
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

  <script>
        function total() {
            if ($('#jumlah_barang').val() != 0) {
            var harga = parseInt(document.getElementById('harga').value);
            var jumlah_barang = parseInt(document.getElementById('jumlah_barang').value);
            var t = new Date();
            var y = new Date(document.getElementById('tgl_pengembalian').value);
            var x = y.getDate()-t.getDate();
            var z = x ;

            var Jtotal = harga * jumlah_barang * (z+1) ;
            document.getElementById('tot_harga').value = Jtotal;
            } else{
                document.getElementById('tot_harga').value = "0";
            }
        }
  </script>