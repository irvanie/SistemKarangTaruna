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
      <div class="col-lg-16">
        <h2 class="text-center">KARANG TARUNA STORE</h2>
        <!-- <div class="card">
          <div class="card-header"> -->
        <hr>
      </div>
        <form method="POST">        
            <div class="card-body">
              <table class="table">
                <tbody>
                  <tr>
                    <td>Nama Pembeli</td>
                    <td>:</td>
                    <td>
                      <input type="text" name="nama" value="<?php echo $nama_lengkap ?>" readonly class="form-control" required="">
                    </td>
                  </tr>

                  <tr>
                    <td>Alamat Pembeli</td>
                    <td>:</td>
                    <td>
                      <input type="text" name="alamat" class="form-control" value="<?php echo $alamat ?>" readonly style="height:70px" required="">
                    </td>
                  </tr>

                    <tr>
                    <td>No Hp Pembeli</td>
                    <td>:</td>
                    <td>
                      <input type="text" name="nohp" class="form-control" value="<?php echo $nowa ?>" readonly required pattern="\d*" maxlength="15" title="Input a number">
                    </td>
                  </tr>  
                    <tr>
                        <td>Nama Barang</td>
                        <td>:</td>
                        <td>
                            <?php
                                $query = "select * from menu";
                                $hasil = mysqli_query($koneksi, $query);
                                $namaM = "var Nmenu= new Array();\n";
                                echo '<select id="nama_barang" name="nama_barang" class="form-control" onchange="changeValue(this.value)" onclick="total()">';
                                echo '<option>Pilih Barang</option>';
                                while ($tabel = mysqli_fetch_array($hasil)){
                                    echo '<option value="'.$tabel['nama_menu'].'">'.$tabel['nama_menu'].'</option>';  
                                    $namaM .= "Nmenu['" . $tabel['nama_menu'] . "'] = {name:'" . addslashes($tabel['harga']) . "'};\n";     
                                }
                                echo '</select>';
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga Barang</td>
                        <td>:</td>
                        <td>
                            <input type="number" name="harga" id="hargab" class="form-control" required="" onchange="total()" readonly>
                            <script type="text/javascript">
                                <?php echo $namaM; ?>
                                function changeValue(id){
                                document.getElementById('hargab').value = Nmenu[id].name;
                                }
                            </script>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Barang</td>
                        <td>:</td>
                        <td>
                            <input type="number" id="jumlah_barangb" name="jumlah_barang" class="form-control" class="form-control" required="" onkeyup="total()">
                        </td>
                    </tr>
                    <tr>
                        <td>Total Barang</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="jumlah" id="jumlahb" class="form-control" required="" readonly>
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
                  if($_POST['jumlah_barang'] < 0){
                    echo "<script>alert('Data Jumlah Barang Tidak bisa dibawah 0');</script>";
                    echo "<script>location='servicesbeli.php';</script>";
                  }else{
                    $nama                 = $_POST['nama'];
                    $alamat               = $_POST['alamat'];
                    $nohp                 = $_POST['nohp'];
                    $nama_barang          = $_POST['nama_barang'];
                    $harga                = $_POST['harga'];
                    $jumlah_barang        = $_POST['jumlah_barang'];
                    $jumlah               = $_POST['jumlah'];
                    $query="INSERT INTO beli SET nama='$nama', alamat='$alamat', nohp='$nohp', nama_barang='$nama_barang', harga='$harga', jumlah_barang='$jumlah_barang', jumlah='$jumlah'";
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
        </div>
      </div>
    </div>
        
              </div>

    </section>
<?php
include 'footer.php'
?>
    </div>
    <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>
  
    <!-- javascript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  
  </body>
  </html>
  