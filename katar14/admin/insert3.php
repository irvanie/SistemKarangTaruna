<?php
	include "koneksi.php";
 
	$nama_menu = $_POST["nama_menu"];
	$harga = $_POST["harga"];
	$stok = $_POST["stok"];
 
 
	// query sql
	$sql = "INSERT INTO menu2 (nama_menu, harga,stok) VALUES('$nama_menu','$harga','$stok')";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
	

echo "<script>alert('Data Berhasil Ditambah'); </script>";
echo "<script>location='index.php?halaman=menu';</script>";
 
	mysqli_close($koneksi);
 
?>