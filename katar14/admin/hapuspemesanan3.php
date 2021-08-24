<?php

$ambil = $koneksi->query("SELECT * FROM jasa WHERE id = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['foto_produk'];
if (file_exists("../foto_produk/$fotoproduk"))
{
	unlink("../foto_produk/$fotoproduk");
}


$koneksi->query("DELETE FROM jasa WHERE id ='$_GET[id]'");

echo "<script>alert('produk terhapus'); </script>";
echo "<script>location='index.php?halaman=menu3';</script>";

?>