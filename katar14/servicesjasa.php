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
<?php
include 'header.php'
?>

</head>

<body>

  <div id="wrapper">

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
        <h2 class="text-center">JASA KAMI UNTUK MASYARAKAT</h2>
        <!-- <div class="card">
          <div class="card-header"> -->
        <hr>
      </div>
        <form method="POST">        
            <div class="card-body">
              <table class="table">
                <tbody>
                  <tr>
                    <td>Nama Pemohon</td>
                    <td>:</td>
                    <td>
                      <input type="text" name="nama" class="form-control" value="<?php echo $nama_lengkap ?>" readonly required="">
                    </td>
                  </tr>

                  <tr>
                    <td>Alamat Pemohon</td>
                    <td>:</td>
                    <td>
                      <input type="text" name="alamat" class="form-control" value="<?php echo $alamat ?>" readonly style="height:70px" required="">
                    </td>
                  </tr>

                    <tr>
                    <td>No Hp Pemohon</td>
                    <td>:</td>
                    <td>
                    <input type="text" name="nohp" id="nohp"  readonly value="<?php echo $nowa ?>" class="form-control" >
                      </td>
                  </tr>

                    <tr>
                        <td>Jenis Jasa</td>
                        <td>:</td>
                        <td>
                            <?php
                                $query = "select * from menu2";
                                $hasil = mysqli_query($koneksi, $query);
                                $namaM = "var Nmenu= new Array();\n";
                                echo '<select id="paketjasa" name="paketjasa" class="form-control" onchange="changeValue(this.value)" onclick="total()">';
                                echo '<option>Pilih Paket</option>';
                                while ($tabel = mysqli_fetch_array($hasil)){
                                    echo '<option value="'.$tabel['nama_menu'].'">'.$tabel['nama_menu'].'</option>';  
                                    $namaM .= "Nmenu['" . $tabel['nama_menu'] . "'] = {name:'" . addslashes($tabel['harga']) . "'};\n";     
                                }
                                echo '</select>';
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga Jasa</td>
                        <td>:</td>
                        <td>
                            <input type="number" name="harga" id="harga" class="form-control" required="" onchange="total()" readonly>
                            <script type="text/javascript">
                                <?php echo $namaM; ?>
                                function changeValue(id){
                                document.getElementById('harga').value = Nmenu[id].name;
                                }
                            </script>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Paket Jasa</td>
                        <td>:</td>
                        <td>
                            <input type="number" id="jumlahpaket" name="jumlahpaket" class="form-control" class="form-control" required="" onkeyup="total()">
                        </td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="jumlah" id="jumlah" class="form-control" required="" readonly>
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
                    $nama                 = $_POST['nama'];
                    $alamat               = $_POST['alamat'];
                    $nohp                 = $_POST['nohp'];
                    $paketjasa            = $_POST['paketjasa'];
                    $harga                = $_POST['harga'];
                    $jumlahpaket         = $_POST['jumlahpaket'];
                    $jumlah               = $_POST['jumlah'];
                    $query="INSERT INTO jasa SET nama='$nama', alamat='$alamat', nohp='$nohp', paketjasa='$paketjasa', harga='$harga', jumlahpaket='$jumlahpaket', jumlah='$jumlah'";
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

    </section>
<?php
include 'footer.php'
?>

  </body>
  </html>
  <script>
        function total() {
            if ($('#jumlahpaket').val() != 0) {
            var harga = parseInt(document.getElementById('harga').value);
            var jumlahpaket = parseInt(document.getElementById('jumlahpaket').value);
            
            var Jtotal = harga * jumlahpaket;
            document.getElementById('jumlah').value = Jtotal;
            } else{
                document.getElementById('jumlah').value = "0";
            }
        }
  </script>