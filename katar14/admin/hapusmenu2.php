<?php

$ambil = $koneksi->query("SELECT * FROM menu1 WHERE kode_menu = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['foto_produk'];
if (file_exists("../foto_produk/$fotoproduk"))
{
	unlink("../foto_produk/$fotoproduk");
}


$koneksi->query("DELETE FROM menu1 WHERE kode_menu='$_GET[id]'");

echo "<script>alert('produk terhapus'); </script>";
echo "<script>location='index.php?halaman=menu2';</script>";

?>