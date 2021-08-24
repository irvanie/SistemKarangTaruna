<?php

$ambil = $koneksi->query("SELECT * FROM user_temp WHERE id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['namafile'];
if (file_exists("../file/$fotoproduk"))
{
	unlink("../file/$fotoproduk");
}


$koneksi->query("DELETE FROM user_temp WHERE id ='$_GET[id]'");

echo "<script>alert('User Tidak di Acc'); </script>";
echo "<script>location='index.php?halaman=user_temp';</script>";

?>