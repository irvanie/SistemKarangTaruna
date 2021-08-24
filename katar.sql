-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 08:01 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', 'admin', 'admin kartar');

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `jumlah_barang` int(50) NOT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`id`, `nama`, `alamat`, `nohp`, `nama_barang`, `harga`, `jumlah_barang`, `jumlah`) VALUES
(1, 'Anisa', 'Karang Satria RT01/01 No.27, Tambun Utara', '2147483647', 'Menu Paket Paket B', 25000, 200, 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `booklap`
--

CREATE TABLE `booklap` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jam_sewa` varchar(10) NOT NULL,
  `tgl_sewa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booklap`
--

INSERT INTO `booklap` (`id`, `nama`, `jam_sewa`, `tgl_sewa`) VALUES
(1, 'Irfan Evandio', '10', '2021-01-01'),
(2, 'Irfan Evandio', '10', '2021-12-31'),
(3, 'Irfan Evandio', '10', '2021-11-30'),
(4, 'Irfan Evandio', '11', '2021-12-31'),
(5, 'Irfan Evandio', '16', '2021-12-31'),
(6, 'Irfan Evandio', '10', '2021-07-03'),
(7, 'Irfan Evandio', '10', '2021-07-04'),
(8, 'Irfan Evandio', '10', '2021-07-08'),
(9, 'Irfan Evandio', '12', '2021-07-10'),
(11, 'Irfan Evandio', '18', '2021-07-08'),
(12, 'Irfan Evandio', '10', '2021-07-11'),
(13, 'Irfan Evandio', '10', '2021-07-12'),
(14, 'Irfan Evandio', '11', '2021-07-11'),
(15, 'Pak Iwan Sonjaya', '10', '2021-07-13'),
(16, 'Pak Iwan Sonjaya', '10', '2021-07-14'),
(17, 'Pak Iwan Sonjaya', '12', '2021-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `cekverif`
--

CREATE TABLE `cekverif` (
  `id` int(100) NOT NULL,
  `nama_cek` varchar(25) NOT NULL,
  `harga_cek` int(100) DEFAULT NULL,
  `nowa` varchar(20) DEFAULT NULL,
  `gantirugi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cekverif`
--

INSERT INTO `cekverif` (`id`, `nama_cek`, `harga_cek`, `nowa`, `gantirugi`) VALUES
(13, 'Irfan Evandio', 75000, '081293356557', 0),
(14, 'Irfan Evandio', 75000, '081293356557', 0),
(15, 'Irfan Evandio', 1000000, '081293356557', 0),
(16, 'admin', 50000, '123123', 50000),
(17, 'Irfan Evandio', 75000, '081293356557', 75000),
(18, 'irfane', 1000000, '+6281293356557', 0),
(19, 'irfane', 100000, '+6281293356557', 0),
(20, 'irfane', 100000, '+6281293356557', 100000),
(21, 'Test', 100000, 'Test', 100000),
(22, 'Irfan Evandio', 50000, '+6281293356557', 50000),
(23, 'Irfan Evandio', 50000, '+6281293356557', 50000),
(24, 'Irfan Evandio', 50000, '+6281293356557', 50000),
(25, 'Irfan Evandio', 50000, '+6281293356557', 50000),
(26, 'Irfan Evandio', 50000, '+6281293356557', 50000),
(27, 'Irfan Evandio', 50000, '+6281293356557', 50000),
(28, 'Irfan Evandio', 50000, '+6281293356557', 50000),
(29, 'Irfan Evandio', 50000, '+6281293356557', 50000),
(30, 'Irfan Evandio', 10000, '081293356557', 10000),
(31, 'Irfan Evandio', 5000, '+6281293356557', 0),
(32, 'Irfan Evandio', 5000, '081293356557', 5000),
(33, 'Irfan Evandio', 50000, '081293356557', 50000),
(34, 'Pak Iwan Sonjaya', 50000, '081293356557', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `paketjasa` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `jumlahpaket` int(50) NOT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id`, `nama`, `alamat`, `nohp`, `paketjasa`, `harga`, `jumlahpaket`, `jumlah`) VALUES
(1, 'irfane', 'KRANGGAN PERMAI', '+6281293356557', 'Paket Pemasangan Tenda @5Person', 100000, 1, 100000),
(2, 'aldin_ahmad', 'jl.aja dulu', '098767888342', 'Paket Wedding Organizer @10Person', 1000000, 1, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`id`, `komentar`) VALUES
(1, 'asd'),
(2, 'tes komen'),
(3, 'tes komen'),
(4, 'mantap bro'),
(5, 'mantap bro'),
(6, 'heyoo'),
(7, 'heyoo');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `kode_menu` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `stok` int(100) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kode_menu`, `nama_menu`, `stok`, `harga`) VALUES
(8, 'Shuttlecock (15pcs)', 10, 130000);

-- --------------------------------------------------------

--
-- Table structure for table `menu1`
--

CREATE TABLE `menu1` (
  `kode_menu` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `stok` int(100) DEFAULT NULL,
  `harga` int(50) NOT NULL,
  `denda_pengembalian` int(100) NOT NULL,
  `pemilik_barang` varchar(25) NOT NULL,
  `letak_barang` varchar(25) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu1`
--

INSERT INTO `menu1` (`kode_menu`, `nama_menu`, `stok`, `harga`, `denda_pengembalian`, `pemilik_barang`, `letak_barang`, `kategori`) VALUES
(3, 'Bola Futsal', 1, 5000, 5000, 'Irfan Evandio', 'A1', 'A'),
(4, 'Bola Volly', 5, 5000, 5000, 'Irfan Evandio', 'A2', 'B'),
(5, 'Bola Basket', 5, 5000, 5000, 'Irfan Evandio', 'A3', 'A'),
(6, 'Kursi Plastik', 25, 2500, 500, 'Irfan Evandio', 'B1', 'B'),
(7, 'Kursi Besi', 25, 5000, 1000, 'Irfan Evandio', 'B2', 'A'),
(8, 'Sepatu Bulutangkis uk 37', 2, 10000, 2500, 'Irfan Evandio', 'B3', 'B'),
(10, 'Shuttlecock (10pcs)', 10, 70000, 2500, 'Irfan Evandio', 'A3', 'A'),
(12, 'a', 9, 70000, 2500, 'Irfan Evandio', 'Belum Masuk Etalase', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `menu2`
--

CREATE TABLE `menu2` (
  `kode_menu` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `stok` int(100) DEFAULT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu2`
--

INSERT INTO `menu2` (`kode_menu`, `nama_menu`, `stok`, `harga`) VALUES
(2, 'Paket Pemasangan Tenda @5Person', 100, 100000),
(3, 'Paket Panitia Acara @15Person', 10, 750000),
(4, 'Paket Panitia Acara @10Person', 10, 500000),
(5, 'Paket Panitia Acara @5Person', 10, 250000),
(6, 'Paket Bantu Cathering @15Person', 10, 600000),
(7, 'Paket Bantu Cathering @10Person', 10, 400000),
(8, 'Paket Bantu Cathering @5Person', 10, 200000),
(9, 'Paket Panitia Acara @15Person', 100, 750000);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nama_pinjam` varchar(100) NOT NULL,
  `alamat_pinjam` varchar(255) NOT NULL,
  `nohp_pinjam` varchar(15) NOT NULL,
  `barang_pinjam` varchar(255) NOT NULL,
  `harga_pinjam` int(50) NOT NULL,
  `jumlah_barang` int(50) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `tot_harga` int(50) NOT NULL,
  `denda_telat` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id`, `username`, `nama_pinjam`, `alamat_pinjam`, `nohp_pinjam`, `barang_pinjam`, `harga_pinjam`, `jumlah_barang`, `tgl_pengembalian`, `tot_harga`, `denda_telat`) VALUES
(21, '', 'Irfan Evandio', 'KRANGGAN PERMAI', '+6281293356557', 'Bola Futsal', 50000, 2, '2021-07-20', 100000, 5000),
(22, '', 'irfane', 'KRANGGAN PERMAI', '+6281293356557', 'Bola Futsal', 5000, 1, '2021-07-25', 5000, 5000),
(23, '', 'irfane', 'KRANGGAN PERMAI', '+6281293356557', 'a', 70000, 1, '2021-07-25', 70000, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `nowa` varchar(20) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `namafile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_lengkap`, `nowa`, `email_user`, `jenis_kelamin`, `alamat_rumah`, `namafile`) VALUES
(1, 'Abdi', 'abditehsaha', 'Abditeh', '081210200418', 'abditehsaha@yahoo.co.id', 'L', 'KRANGGAN PERMAI', ''),
(2, 'irfane', 'irfane123', 'Irfan Evandio', '+6281293356557', 'irfan.evandio.ie@gmail.com', 'L', 'KRANGGAN PERMAI', ''),
(3, 'irfane2', 'irfane2', 'Irfan Evandio', '+6281293356557', 'irfan.evandio.ie@gmail.com', 'L', 'Depok', ''),
(4, 'irvan', 'irvan123', 'irvan lazuardi', '08892137563', 'irvanlzrd26@gmail.com', 'L', 'PONDOK KELAPA RT 001/ RW 001 PONDOK KELAPA DUREN SAWIT', ''),
(5, 'erinapriliaa', '05april01', 'Erina Aprilia', '081943576286', 'erinaaprilia0521@gmail.com', 'P', 'Jl. Anggrek 13 no. 29 as. 29, Kranggan Permainan, Bekasi', ''),
(6, 'ridhatp', 'ridhajenner', 'Ridha Tiomanta', '082298170678', 'ridhatioprb@gmail.com', 'P', 'Jl. Anggrek Raya No.15/43 Kranggan Permai, Jatisampurna.', ''),
(7, 'Ilhamrizky', 'ilham123', 'Ilham Tri Putra Rizky', '081278121437', 'ilhamrizky410@gmail.com', 'L', 'Jl.anggrek 10 no. 10 krangganpermai', ''),
(8, 'rafifariq', 'kenaliaku17', 'Rafif Nurfaqih Ariq', '081297793816', 'faqih17j@gmail.com', 'L', 'Anggrek Raya AS 36/17 Kranggan Permai', ''),
(9, 'radityaarsatya', 'Azulgrana14', 'Raditya Aryasatya Pratama', '081287686973', 'adityaphimen@gmail.com', 'L', 'Kranggan Permai', ''),
(10, 'leliaprilia', 'Aprilia2001', 'Leli Aprilia', '085710351900', 'leli.aprilia2001@gmail.com', 'P', 'jl. anggrek 7 blok as 34 no.15', ''),
(11, 'parepare', 'remi1989', 'Wawan harianto', '082135435551', 'pare.cobain@gmail.com', 'L', 'Jl. Katelia raya as 37 no 32 kranggan Permai jatisampurna bekasi', ''),
(12, 'Bani', '0987654321', 'Muhammad Robbani', '081317210760', 'bangbeny001011@gmail.com', 'L', '', ''),
(13, '_._ardian._', 'zahrra0607', 'Ardian Luthfi Prasetyo ', '081237922182', 'ardianmuach83@gmail.com', 'L', 'Jl.Anggrek 6 No.27/as-36 Jatisampurna, Kota bekasi', ''),
(14, 'tiiobp', 'amases', 'Bagus Prassetio', '085719995653', 'tiio.160@gmail.com', 'L', 'AS1 No', ''),
(16, 'nadaaa', 'nadanadhif1627', 'Hasna Putri Nada Naurah', '0895800343837', 'nadaanau@gmail.com', 'P', 'Jl. Anggrek 12 No 17 AS 30', ''),
(17, 'tester2', '123123', 'Irfan Evandio', '+6281293356557', 'irfan.evandio.ie@gmail.com', 'L', 'Depok', ''),
(19, 'adminadmin', '213', '123123', '1213123', '12312@gmail.com', 'L', 'Depok', ''),
(20, '123123123', '123123123', 'Irfan Evandio', '+6281293356557', '12312@gmail.com', 'P', 'KRANGGAN PERMAI', ''),
(21, '312321321', '32132131', 'aabbcc', '081210200418', 'irfan.evandio.ie@gmail.com', 'P', 'Depok', ''),
(22, '01010101', '01010101', 'Irfan Evandio', '+6281293356557', '1231@gmail.com', 'P', 'Depok', ''),
(23, 'fitrah', 'anggrek6', 'Irfan Evandio', '+6281293356557', '123123@gmail.com', 'P', 'Depok', ''),
(24, 'irfane123', 'irfane123', 'Irfan Evandio', '+6281293356557', 'irfan.evandio.ie@gmail.com', 'P', 'Depok', ''),
(25, 'admin', '123123', 'Irfan Evandio', '+6281293356557', 'irfan.evandio.ie@gmail.com', 'P', 'Depok', ''),
(26, '48170707588', '123123', 'Irfan Evandio', '+6281293356557', 'irfan.evandio.ie@gmail.com', 'P', 'Depok', ''),
(27, '1234567890', '1234567890', '1234567890', '1234567890', '1234567890@gmail.com', 'P', 'Depok', ''),
(28, 'admin1234567890', '1234567890', '1234567890', '+6281293356557', '1234567890@gmail.com', 'P', 'Depok', ''),
(29, 'agro', '123', 'RaihanAgro Lestari', '081318489028', 'agro@gmail.com', 'L', 'Bogor', ''),
(30, 'HanaTI8C', '123456', 'Hana Khairunisa', '089637475050', 'hkhairunisa27@gmail.com', 'P', 'Jl. Kayu VII No.06', ''),
(31, 'Fahrini', 'fahrini123', 'Fahrini ayusatia', '085819295769', 'fahrini2506@gmail.com', 'P', 'Bekasi,villa indah permai', ''),
(32, 'Ok', 'ok', 'Ok deh', '08999', 'ok@gmail.com', 'L', 'Alamat', ''),
(33, 'aldin_ahmad', 'aldin123', 'ahmad aldien', '098767888342', 'aldin@gmail.com', 'L', 'jl.aja dulu', ''),
(34, 'alrani', 'ratawa24', 'nurul qalbi alrani', '081297585264', 'nqalraniii@gmail.com', 'P', 'perumahan kranggan permai jl anggrek 01, jatisampurna', ''),
(36, 'Test', 'test', 'Test', 'Test', 'test@test.id', 'L', 'Test', ''),
(37, 'Luthfi_lidya', 'luthfii94', 'Luthfi Lidya', '089501632004', 'lidyalutfi@gmail.com', 'P', 'Bekasi', ''),
(38, 'Sagap', 'ayamayam', 'Aagapey', '0895405916040', 'gggtu67@gmail.com', 'L', 'Kota Bekasi', ''),
(39, 'putrihanifahadr', '40016239ee', 'Putri Adriyani Hanifah', '081382492499', 'putriadriyani51@gmail.com', 'P', 'Jalan Sulawesi', ''),
(40, 'N', '249512', 'N', '81298762477', 'natashaersa24@gmail.com', 'P', 'Jatisampurna', ''),
(41, 'tesregisteronline', 'anggrek6', 'Irfan Evandio', '+6281293356557', 'irfan.evandio.ie@gmail.com', 'P', 'Depok', ''),
(42, 'nazul76', 'natasha123', 'Natasha Nuzula', '085780295457', 'natashanuzula76@gmail.com', 'P', 'Jalan Al-Muzamil, Vila Alam Permai 9', ''),
(43, 'cobacobi', 'cobacobi', 'Novilia P', '0895322792818', 'noviliaps13@gmail.com', 'P', 'Bekasi', ''),
(44, 'irfanevandiotest', '12345678', 'Irfan Evandio', '081293356557', 'irvan.evandio.ie@gmail.com', 'L', 'Jl anggrek 6 as 35 no 15', ''),
(45, 'pakiwan', '12345678', 'Pak Iwan Sonjaya', '081293356557', 'pakiwan@gmail.com', 'L', 'Jl anggrek 6 as 35 no 15', ''),
(46, 'admin123123', '12345678', 'asdasdasd', '081293356557', 'asdasd@gmail.com', 'L', 'Jl anggrek 6 as 35 no 15', 'ktp.jpg'),
(49, 'irfanevandioadada ', 'adadadad ', 'asdasdasd', '081293356557', 'asdasd@gmail.com', 'L', 'Jl anggrek 6 as 35 no 15', 'irfanevandioadada.ktp.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `user_temp`
--

CREATE TABLE `user_temp` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `nowa` varchar(20) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `namafile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booklap`
--
ALTER TABLE `booklap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cekverif`
--
ALTER TABLE `cekverif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kode_menu`);

--
-- Indexes for table `menu1`
--
ALTER TABLE `menu1`
  ADD PRIMARY KEY (`kode_menu`);

--
-- Indexes for table `menu2`
--
ALTER TABLE `menu2`
  ADD PRIMARY KEY (`kode_menu`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_temp`
--
ALTER TABLE `user_temp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booklap`
--
ALTER TABLE `booklap`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cekverif`
--
ALTER TABLE `cekverif`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `kode_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu1`
--
ALTER TABLE `menu1`
  MODIFY `kode_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu2`
--
ALTER TABLE `menu2`
  MODIFY `kode_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user_temp`
--
ALTER TABLE `user_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
