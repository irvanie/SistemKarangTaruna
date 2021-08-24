  <!-- ======= Hero Section ======= -->
  <div class="info">
              <div>
                <i class="" ></i>
                <p>Username :</p>
              </div>
            </div>

           

    
            <div class="form">
             <form action="userall_cari.php" method="get">
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="username" placeholder="" required>
                </div>

                <div class="text-center"><button type="submit" class="btn btn-primary">Cek Hasil</button></div>
                <br>
              </form>
              <?php 
?>
 
 <table width="100%" class="table-bordered " id="dataTables-example datatab">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Harga Sewa</th>
    <th>Kapasitas</th>
  </tr>
  <?php 
  include "koneksi.php";
  if(isset($_GET['username'])){
    $username = $_GET['username'];
    $data = mysqli_query($koneksi,"SELECT * FROM user WHERE username like '%".$username."%'");       
  }else{
    $data = mysqli_query($koneksi,"SELECT * from user");   
  }
  $no = 1;
  while($d = mysqli_fetch_array($data)){
  ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['username']; ?></td>
    <td><?php echo $d['nama_lengkap']; ?></td>
    <td><?php echo $d['nowa']; ?></td>
	<td><img src="<?php echo "../file/".$d['namafile']; ?>" width='150' height='150'></td>  
    <td>
    <a href="index.php?halaman=detailuser2&id=<?php echo $d['id']; ?>" class="btn btn-warning">Detail</a>
	</td>
  </tr>
  <?php } ?>
</table>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
$(document).ready(function(){
  $('datatab').DataTable();
});
</script>

</body>

</html>
