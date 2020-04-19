-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Apr 2020 pada 15.05
-- Versi Server: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gaji_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gaji`
--

CREATE TABLE IF NOT EXISTS `tb_gaji` (
  `gaji_id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `gaji_menit` int(11) NOT NULL,
  `gaji_lembur` int(11) NOT NULL,
  `gaji_pokok` float NOT NULL,
  `gaji_tgl_transfer` date NOT NULL,
  `gaji_total` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gaji`
--

INSERT INTO `tb_gaji` (`gaji_id`, `pegawai_id`, `jabatan_id`, `gaji_menit`, `gaji_lembur`, `gaji_pokok`, `gaji_tgl_transfer`, `gaji_total`) VALUES
(4, 5, 0, 5000000, 3600, 720000, '2020-04-19', 5720000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE IF NOT EXISTS `tb_jabatan` (
  `jabatan_id` int(11) NOT NULL,
  `jabatan_kode` varchar(255) NOT NULL,
  `jabatan_nama` varchar(255) NOT NULL,
  `jabatan_gapok` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`jabatan_id`, `jabatan_kode`, `jabatan_nama`, `jabatan_gapok`) VALUES
(1, 'PMP', 'Pimpinan', 5000000),
(4, 'MNG', 'Manager', 4500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lembur`
--

CREATE TABLE IF NOT EXISTS `tb_lembur` (
  `lembur_id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `lembur_menit` int(11) NOT NULL,
  `lembur_gaji` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lembur`
--

INSERT INTO `tb_lembur` (`lembur_id`, `pegawai_id`, `lembur_menit`, `lembur_gaji`) VALUES
(1, 4, 60, 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `pegawai_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `pegawai_nip` varchar(255) NOT NULL,
  `pegawai_nama` varchar(255) NOT NULL,
  `pegawai_tmp_tgl_lahir` varchar(255) NOT NULL,
  `pegawai_jenis_kelamin` varchar(255) NOT NULL,
  `pegawai_alamat` varchar(255) NOT NULL,
  `pegawai_tgl_masuk` date NOT NULL,
  `pegawai_no_rek` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`pegawai_id`, `jabatan_id`, `pegawai_nip`, `pegawai_nama`, `pegawai_tmp_tgl_lahir`, `pegawai_jenis_kelamin`, `pegawai_alamat`, `pegawai_tgl_masuk`, `pegawai_no_rek`) VALUES
(5, 1, '15101152610542', 'Egova Riva Gustino', 'Bukittinggi/1996-08-13', 'Laki-Laki', 'Padang', '2020-04-19', '081962431');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE IF NOT EXISTS `tb_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_username` varchar(255) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_nama` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`gaji_id`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indexes for table `tb_lembur`
--
ALTER TABLE `tb_lembur`
  ADD PRIMARY KEY (`lembur_id`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  MODIFY `gaji_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `jabatan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_lembur`
--
ALTER TABLE `tb_lembur`
  MODIFY `lembur_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `pegawai_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
