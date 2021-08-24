<footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Our Services</h5>
              <ul class="link-list">
                <li><a href="team.php">Our Organization</a></li>
                <li><a href="servicespinjam.php">Peminjaman Barang</a></li>
                <li><a href="servicesbeli.php">Pembelian Barang</a></li>
                <li><a href="servicesjasa.php">Penyewaan Jasa</a></li>
              </ul>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Contact</h5>
              <address>
							<strong>Karang Taruna 14</strong><br>
							Kranggan Permai<br>
							Bekasi 17433 Indonesia
						</address>
              <p>
                <i class="icon-phone"></i> (+62) 812 9335 6557 <br>
                <i class="icon-envelope-alt"></i> karangtaruna14@gmail.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Saran</h5>
              <p>
                Berikan Saran Anda, Karena kami maju bersama saran dari anda.
              </p>
              <form class="subscribe">
                <div class="input-append">
                  <input class="span2" id="appendedInputButton" type="text">
                  <button class="btn btn-theme" type="submit">Submit Saran</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; Organization Of Karang Taruna 14. All right reserved</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
                -->
                Designed by <a href="https://bootstrapmade.com/">Irfan Evandio PNJ TI 8C JTW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>


  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>

  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/camera/camera.js"></script>
  <script src="js/camera/setting.js"></script>

  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>

  <script src="js/jquery.flexslider.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/inview.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  
<script>
  $(document).ready( function () {
    $('.datatables').DataTable();
} );
</script>





<script>
        function total() {
            if ($('#jumlah_barangb').val() != 0) {
            var harga = parseInt(document.getElementById('hargab').value);
            var jumlah_barang = parseInt(document.getElementById('jumlah_barangb').value);
            
            var Jtotal = harga * jumlah_barang;
            document.getElementById('jumlahb').value = Jtotal;
            } else{
                document.getElementById('jumlahb').value = "0";
            }
        }
  </script>

