<?php
session_start();
ob_start();
// skrip koneksi
include 'koneksi.php';  
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="admin/img/logo.png" type="logo" sizes="16x16">
    <title>Login User Karang Taruna</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="admin/css/style1.css">
</head>
<body>
    <div class="text-center satu">
        <!-- Button HTML (to Trigger Modal) -->
        <!-- Notifikasi -->
        <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "Login Gagal! Periksa Lagi Username atau Password Anda!!";
                }else if($_GET['pesan'] == "logout"){
                    echo "Anda Telah Berhasil Logout";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "Anda Harus Login Untuk Mengakses Website Karang Taruna 14";
                }
            }
        ?>
        <div id="con" class="card bg-dark text-white">
            <a href="#myModal" class="trigger-btn" data-toggle="modal">
                <img src="admin/gambar/orang.png" weight="200" height="200" alt="gambar">
                <h1 style="color:rgb(17, 16, 16)">Karang Taruna 14</h1><br>
                <h1 style="color: rgb(17, 16, 16)">LOGIN HERE!!</h1>
            </a>
        </div>
    </div>

                  <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Login Account</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                            <div class="modal-body">
                                <form role="form" method="post">
                                       <br />
                                     <div class="form-group input-group">
                                            <label>username</label>
                                            <input type="text" class="form-control" name="user" />
                                        </div>
                                        <div class="form-group input-group">
                                            <label>password</label>
                                            <input type="password" class="form-control"  name="pass" />
                                        </div>
                                        <button class="btn btn-primary" name="login">Login</button>
                                    </form>
                                    <?php
                                    if (isset($_POST['login']))
                                    {
                                      $ambil = $koneksi->query("SELECT * FROM user WHERE username='$_POST[user]'
                                      AND password = '$_POST[pass]'");
                                    $yangcocok = $ambil->num_rows;
                                    if ($yangcocok==1)
                                    {
                                      $_SESSION['User']=$ambil->fetch_assoc();
                                      echo "<div class='alert alert-info'>Login Berhasil</div>";
                                      echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                                    }
                                    else                                    
                                      echo "<div class='alert alert-danger'>Login Gagal</div>";
                                      echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                                    }
                                    ?>
                            </div>
                            Not register ? <a href="registeration.php" >click here </a>

                        </div>
                    </div>


        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assetslogin/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assetslogin/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assetslogin/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assetslogin/js/custom.js"></script>

</body>
</html>