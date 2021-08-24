<?php
// skrip koneksi
include 'koneksi.php';
?>

<!doctype html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assetslogin/css/normalize.css">
    <link rel="stylesheet" href="assetslogin/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetslogin/css/font-awesome.min.css">
    <link rel="stylesheet" href="assetslogin/css/themify-icons.css">
    <link rel="stylesheet" href="assetslogin/css/flag-icon.min.css">
    <link rel="stylesheet" href="assetslogin/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assetslogin/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assetslogin/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="" method="POST" onSubmit="validasi()" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username" id="username" name="username" minlength="6" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password Min 8 character" id="password" name="password"  minlength="8" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Retype Password</label>
                            <input type="password" class="form-control" placeholder="Retype Password" id="repassword" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email"  name="email_user" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" name="nama_lengkap" required>
                        </div>
                        
                        <div class="form-group">
                            <label>No Whatsapp</label>
                            <input type="text" class="form-control" placeholder="Phone Number" id="nowa" name="nowa" pattern="\d*" maxlength="15" required>
                        </div>
                        
                        <div class="radiobox">
                            <label>
                            <input type="radio" name="jenis_kelamin" value="L"> Laki-laki<br>
                            <input type="radio" name="jenis_kelamin" value="P"> Perempuan<br>
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Address" id="alamat_rumah" name="alamat_rumah" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Foto KTP / Identitas :</label>
                                <input type="file" class="form-control" name="foto" placeholder="Gambar Foto" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="register" value="Daftar" >Register</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="loginu.php"> Sign in</a></p>
                        </div>
                    </form>
                    <?php 
                        include 'koneksi.php';
                      if(isset($_POST['register'])){
                        $username=$_POST['username'];
                        $password=$_POST['password'];
                        $nama_lengkap=$_POST['nama_lengkap'];
                        $nowa=$_POST['nowa'];
                        $email_user=$_POST['email_user'];
                        $alamat_rumah=$_POST['alamat_rumah'];

                        $ekstensi_diperbolehkan	= array('png','jpg');
                            $namafile = $_FILES['foto']['name'];
                            $x = explode('.', $namafile);
                            $ekstensi = strtolower(end($x));
                            $ukuran	= $_FILES['foto']['size'];
                            $file_tmp = $_FILES['foto']['tmp_name'];	
                                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                                    if($ukuran < 1044070){			
                                    move_uploaded_file($file_tmp, 'file/'.$username.$namafile);
                                    $daftar = mysqli_query($koneksi,"INSERT INTO user_temp VALUES (
                                        NULL,
                                        '$username',
                                        '$password',
                                        '$nama_lengkap',
                                        '$nowa',
                                        '$email_user',
                                        '".$_POST['jenis_kelamin']."',
                                        '$alamat_rumah',
                                        '$username$namafile'
                                        )");
                                            
                                    if($daftar){
                                        echo 'FILE BERHASIL DI UPLOAD';
                                        echo "<div class='alert alert-success'>Berhasil Daftar ! Silahkan Tunggu 1x24 Jam ! Jika Belum Bisa silahkan Mendaftar Kembali</div>";
                                        echo "<meta http-equiv='refresh' content='1;url=loginu.php'>";
                                    }else{
                                        echo 'GAGAL MENGUPLOAD IDENTITAS';
                                    }
                                    }else{
                                    echo 'UKURAN FILE TERLALU BESAR';
                                    }
                                   }else{
                                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                                   }
                                }
                    ?>
                </div>
            </div>
        </div>
    </div>


    <script src="assetslogin/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assetslogin/js/popper.min.js"></script>
    <script src="assetslogin/js/plugins.js"></script>
    <script src="assetslogin/js/main.js"></script>

    <script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var nowa = document.getElementById("nowa").value;
		var alamat_rumah = document.getElementById("alamat_rumah").value;
        var password = document.getElementById("password").value;
		var repassword = document.getElementById("repassword").value;
		if (username != "" && nowa!="" && alamat_rumah !="" && password==repassword) {
            alert('Berhasil Daftar ! Silahkan Tunggu 1x24 Jam ! Jika Belum Bisa silahkan Mendaftar Kembali');
            window.location.href = "loginu.php";
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>

    // <script type = "text/javascript">
    //     function Redirect() {
    //         window.location.href = "https://katar14jatisampurna.my.id/";
    //         }
    // </script>
</body>
</html>
