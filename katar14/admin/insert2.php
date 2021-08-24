<?php
	include "koneksi.php";
 
	$nama_menu = $_POST["nama_menu"];
	$harga = $_POST["harga"];
	$stok = $_POST["stok"];
    $denda_pengembalian = $_POST['denda_pengembalian'];
	$pemilik_barang = $_POST["pemilik_barang"];
	$letak_barang = $_POST["letak_barang"];
	$kategori = $_POST["kategori"];

	// query sql
	$sql = "INSERT INTO menu1 (nama_menu, harga,stok,denda_pengembalian,pemilik_barang,letak_barang,kategori) VALUES('$nama_menu','$harga','$stok','$denda_pengembalian','$pemilik_barang','$letak_barang','$kategori')";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
	

echo "<script>alert('Data Berhasil Ditambah'); </script>";
echo "<script>location='index.php?halaman=menu2';</script>";
 
	mysqli_close($koneksi);
 
?>