-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2022 at 10:59 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa_ampas`
--

CREATE TABLE `analisa_ampas` (
  `waktu` datetime NOT NULL,
  `id` int(11) NOT NULL,
  `bahan` int(20) NOT NULL,
  `zk` float NOT NULL,
  `kadar_air` float DEFAULT NULL,
  `pol_koreksi` float NOT NULL,
  `brix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_bintik_hitam_babonan`
--

CREATE TABLE `analisa_bintik_hitam_babonan` (
  `id` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `besar` int(11) NOT NULL,
  `sedang` int(11) NOT NULL,
  `kecil` int(11) NOT NULL,
  `kesimpulan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_bjb`
--

CREATE TABLE `analisa_bjb` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bahan` int(12) NOT NULL,
  `bjb` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_gured`
--

CREATE TABLE `analisa_gured` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bahan` int(12) NOT NULL,
  `gured` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_hplc`
--

CREATE TABLE `analisa_hplc` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bahan` varchar(12) NOT NULL,
  `fruktosa` float NOT NULL,
  `glukosa` float NOT NULL,
  `sukrosa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_kadarabu`
--

CREATE TABLE `analisa_kadarabu` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bahan` varchar(12) NOT NULL,
  `kadar_abu` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_kapur`
--

CREATE TABLE `analisa_kapur` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kapur` float NOT NULL,
  `supplier` varchar(120) DEFAULT NULL,
  `evaluasi` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_ketel`
--

CREATE TABLE `analisa_ketel` (
  `waktu` datetime NOT NULL,
  `id_analisa` int(11) NOT NULL,
  `sadah_jj` float DEFAULT NULL,
  `tds_jj` float DEFAULT NULL,
  `ph_jj` float DEFAULT NULL,
  `phospat_jj` float DEFAULT NULL,
  `tds_djj` float DEFAULT NULL,
  `ph_djj` float DEFAULT NULL,
  `sadah_y1` float DEFAULT NULL,
  `tds_y1` float DEFAULT NULL,
  `ph_y1` float DEFAULT NULL,
  `phospat_y1` float DEFAULT NULL,
  `sadah_y2` float DEFAULT NULL,
  `tds_y2` float DEFAULT NULL,
  `ph_y2` float DEFAULT NULL,
  `phospat_y2` float DEFAULT NULL,
  `tds_dy` float DEFAULT NULL,
  `ph_dy` float DEFAULT NULL,
  `sadah_hw` float DEFAULT NULL,
  `tds_hw` float DEFAULT NULL,
  `ph_hw` float DEFAULT NULL,
  `sadah_wtp` float NOT NULL,
  `tds_wtp` float NOT NULL,
  `ph_wtp` float NOT NULL,
  `volume_tangki1` float DEFAULT NULL,
  `volume_tangki2` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_nira_kotor`
--

CREATE TABLE `analisa_nira_kotor` (
  `id` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `ph` float DEFAULT NULL,
  `brix` float DEFAULT NULL,
  `suhu` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_npp`
--

CREATE TABLE `analisa_npp` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `wilayah` varchar(1) DEFAULT NULL,
  `brix` decimal(6,3) NOT NULL,
  `pol` decimal(6,3) NOT NULL,
  `rendemen` float NOT NULL,
  `is_moved` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_od_tetes`
--

CREATE TABLE `analisa_od_tetes` (
  `id` int(11) NOT NULL,
  `waktu` datetime DEFAULT NULL,
  `tetes` float DEFAULT NULL,
  `tetes_pikno` float DEFAULT NULL,
  `pikno` float DEFAULT NULL,
  `larutan` float DEFAULT NULL,
  `nilai_air` float DEFAULT NULL,
  `bj` float DEFAULT NULL,
  `abs` float DEFAULT NULL,
  `tangki` int(11) DEFAULT NULL,
  `od` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_packer`
--

CREATE TABLE `analisa_packer` (
  `id` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `bahan` int(12) NOT NULL,
  `IU` float NOT NULL,
  `kadar_air` float NOT NULL,
  `bintik` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_packer_karung`
--

CREATE TABLE `analisa_packer_karung` (
  `id` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `bahan` int(12) NOT NULL,
  `IU` float NOT NULL,
  `kadar_air` float NOT NULL,
  `bintik` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_pi`
--

CREATE TABLE `analisa_pi` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `p1` float DEFAULT NULL,
  `p2` float DEFAULT NULL,
  `pi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_sabut`
--

CREATE TABLE `analisa_sabut` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sabut_basah` float DEFAULT NULL,
  `sabut_kering` float DEFAULT NULL,
  `kadar_sabut` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_so2`
--

CREATE TABLE `analisa_so2` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bahan` varchar(12) NOT NULL,
  `so2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_tebu_lw`
--

CREATE TABLE `analisa_tebu_lw` (
  `id` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `register` varchar(20) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `nopol` varchar(20) NOT NULL,
  `kebun` varchar(120) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `brix` float NOT NULL,
  `pol` float NOT NULL,
  `hk` float NOT NULL,
  `nn` float NOT NULL,
  `hk_bawah` float NOT NULL,
  `hk_pucuk` float NOT NULL,
  `selisih_hk` float NOT NULL,
  `r_bawah` float NOT NULL,
  `r_pucuk` float NOT NULL,
  `r_selisih` float NOT NULL,
  `r_rerata` float NOT NULL,
  `fk` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_tsai`
--

CREATE TABLE `analisa_tsai` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bahan` int(12) NOT NULL,
  `tsai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `analisa_umum`
--

CREATE TABLE `analisa_umum` (
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  `bahan` int(15) NOT NULL,
  `cao` float NOT NULL,
  `ph` float NOT NULL,
  `tur` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `coloromat`
--

CREATE TABLE `coloromat` (
  `waktu` datetime DEFAULT current_timestamp(),
  `id` int(6) NOT NULL,
  `bahan` varchar(12) DEFAULT NULL,
  `IU` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_bahankimia`
--

CREATE TABLE `data_bahankimia` (
  `waktu` datetime NOT NULL,
  `id_analisa` int(11) NOT NULL,
  `belerang` float DEFAULT NULL,
  `kapur` float DEFAULT NULL,
  `floc_total` float DEFAULT NULL,
  `naoh_evap` float DEFAULT NULL,
  `bulab` float DEFAULT NULL,
  `diial` float DEFAULT NULL,
  `b894` float DEFAULT NULL,
  `b895` float DEFAULT NULL,
  `b210` float DEFAULT NULL,
  `asam_phospat` float DEFAULT NULL,
  `blotong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_keliling`
--

CREATE TABLE `data_keliling` (
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `id_analisa` int(11) NOT NULL,
  `tekanan_hpreevap1` float DEFAULT NULL,
  `tekanan_hpreevap2` float DEFAULT NULL,
  `tekanan_hevap1` float DEFAULT NULL,
  `tekanan_hevap2` float DEFAULT NULL,
  `tekanan_hevap3` float DEFAULT NULL,
  `tekanan_hevap4` float DEFAULT NULL,
  `tekanan_hevap5` float DEFAULT NULL,
  `tekanan_hevap6` float DEFAULT NULL,
  `tekanan_hevap7` float DEFAULT NULL,
  `tekanan_hmasakan1` float DEFAULT NULL,
  `tekanan_hmasakan2` float DEFAULT NULL,
  `tekanan_hmasakan3` float DEFAULT NULL,
  `tekanan_hmasakan4` float DEFAULT NULL,
  `tekanan_hmasakan5` float DEFAULT NULL,
  `tekanan_hmasakan6` float DEFAULT NULL,
  `tekanan_hmasakan7` float DEFAULT NULL,
  `tekanan_hmasakan8` float DEFAULT NULL,
  `tekanan_hmasakan9` float DEFAULT NULL,
  `tekanan_hmasakan10` float DEFAULT NULL,
  `tekanan_hmasakan11` float DEFAULT NULL,
  `tekanan_hmasakan12` float DEFAULT NULL,
  `tekanan_hmasakan13` float DEFAULT NULL,
  `tekanan_hmasakan14` float DEFAULT NULL,
  `tekanan_hmasakan15` float DEFAULT NULL,
  `tekanan_hmasakan16` float DEFAULT NULL,
  `tekanan_hmasakan17` float DEFAULT NULL,
  `tekanan_hmasakan18` float DEFAULT NULL,
  `tekanan_pompamasak` float DEFAULT NULL,
  `suhu_uappreevap1` float DEFAULT NULL,
  `suhu_uappreevap2` float DEFAULT NULL,
  `suhu_uapevap1` float DEFAULT NULL,
  `suhu_uapevap2` float DEFAULT NULL,
  `suhu_uapevap3` float DEFAULT NULL,
  `suhu_uapevap4` float DEFAULT NULL,
  `suhu_uapevap5` float DEFAULT NULL,
  `suhu_uapevap6` float DEFAULT NULL,
  `suhu_uapevap7` float DEFAULT NULL,
  `suhu_heater1` float DEFAULT NULL,
  `suhu_heater2` float DEFAULT NULL,
  `suhu_heater3` float DEFAULT NULL,
  `suhu_airinjeksi` float DEFAULT NULL,
  `suhu_airterjun` float DEFAULT NULL,
  `tekanan_uaptinggi` float DEFAULT NULL,
  `tekanan_uaprendah` float DEFAULT NULL,
  `tekanan_uapbekas` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gula_periodik`
--

CREATE TABLE `gula_periodik` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `periode` varchar(10) NOT NULL,
  `brix` float DEFAULT NULL,
  `abs` float DEFAULT NULL,
  `iu` float DEFAULT NULL,
  `fy` float DEFAULT NULL,
  `ml` float DEFAULT NULL,
  `so2` float DEFAULT NULL,
  `ka` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `moisture`
--

CREATE TABLE `moisture` (
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  `bahan` varchar(12) NOT NULL,
  `kadar_air` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `olah_file`
--

CREATE TABLE `olah_file` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `filename` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `operasional_ketel`
--

CREATE TABLE `operasional_ketel` (
  `waktu` datetime DEFAULT NULL,
  `id_Analisa` int(11) NOT NULL,
  `tekanan_JJ` float DEFAULT NULL,
  `uap_JJ` float DEFAULT NULL,
  `tekanan_Yosh1` float DEFAULT NULL,
  `uap_Yosh1` float DEFAULT NULL,
  `tekanan_Yosh2` float DEFAULT NULL,
  `uap_Yosh2` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `operasional_masakan`
--

CREATE TABLE `operasional_masakan` (
  `waktu` datetime NOT NULL,
  `id_analisa` int(11) NOT NULL,
  `pan` int(2) NOT NULL,
  `palung` int(2) NOT NULL,
  `hl` int(5) NOT NULL,
  `bahan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ronsel_masakan`
--

CREATE TABLE `ronsel_masakan` (
  `id` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `kode` int(124) NOT NULL,
  `masakan` varchar(5) DEFAULT NULL,
  `pan` int(2) DEFAULT NULL,
  `palung` int(2) DEFAULT NULL,
  `asal_babonan` int(2) DEFAULT NULL,
  `hl_babonan` int(124) DEFAULT NULL,
  `hl` int(124) DEFAULT NULL,
  `j_masuk` time DEFAULT NULL,
  `j_turun` time DEFAULT NULL,
  `opr` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saccharomat`
--

CREATE TABLE `saccharomat` (
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(6) NOT NULL,
  `bahan` bigint(12) NOT NULL,
  `brix` decimal(5,2) NOT NULL,
  `Z` decimal(5,2) NOT NULL,
  `pol` decimal(5,2) NOT NULL,
  `hk` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sampel_request`
--

CREATE TABLE `sampel_request` (
  `id` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `bahan` int(11) NOT NULL,
  `keterangan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `skmt`
--

CREATE TABLE `skmt` (
  `waktu` datetime NOT NULL,
  `id` int(11) NOT NULL,
  `antrian` varchar(20) DEFAULT NULL,
  `nopol` varchar(10) DEFAULT NULL,
  `register` varchar(20) DEFAULT NULL,
  `petani` varchar(124) DEFAULT NULL,
  `rafaksi` varchar(30) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `gambar2` varchar(100) DEFAULT NULL,
  `gambar3` varchar(100) DEFAULT NULL,
  `gambar4` varchar(100) DEFAULT NULL,
  `gambar5` varchar(100) DEFAULT NULL,
  `gambar6` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taksasi_volume`
--

CREATE TABLE `taksasi_volume` (
  `id` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `opr` varchar(100) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `peti_nira_mentah` int(5) DEFAULT NULL,
  `pemanas_nira_mentah` int(5) DEFAULT NULL,
  `reaction_tank` int(5) DEFAULT NULL,
  `defekator` int(5) DEFAULT NULL,
  `clarifier_st` int(5) DEFAULT NULL,
  `pemanas_nira_encer` int(5) DEFAULT NULL,
  `evap1` int(5) DEFAULT NULL,
  `evap2` int(5) DEFAULT NULL,
  `evap3` int(5) DEFAULT NULL,
  `evap4` int(5) DEFAULT NULL,
  `evap5` int(5) DEFAULT NULL,
  `evap6` int(5) DEFAULT NULL,
  `evap7` int(5) DEFAULT NULL,
  `evap8` int(5) DEFAULT NULL,
  `evap9` int(5) DEFAULT NULL,
  `nk_sebelum_sulfitasi` int(5) DEFAULT NULL,
  `nk_sulfitasi_atas` int(5) DEFAULT NULL,
  `nk_sulfitasi_bawah` int(5) DEFAULT NULL,
  `klare_shs_atas` int(5) DEFAULT NULL,
  `klare_shs_bawah` int(5) DEFAULT NULL,
  `pan1` int(5) DEFAULT NULL,
  `pan2` int(5) DEFAULT NULL,
  `pan3` int(5) DEFAULT NULL,
  `pan4` int(5) DEFAULT NULL,
  `pan5` int(5) DEFAULT NULL,
  `pan6` int(5) DEFAULT NULL,
  `pan7` int(5) DEFAULT NULL,
  `pan8` int(5) DEFAULT NULL,
  `pan9` int(5) DEFAULT NULL,
  `pan10` int(5) DEFAULT NULL,
  `pan11` int(5) DEFAULT NULL,
  `pan12` int(5) DEFAULT NULL,
  `pan13` int(5) DEFAULT NULL,
  `pan14` int(5) DEFAULT NULL,
  `palung1` int(5) DEFAULT NULL,
  `palung2` int(5) DEFAULT NULL,
  `palung3` int(5) DEFAULT NULL,
  `palung4` int(5) DEFAULT NULL,
  `palung5` int(5) DEFAULT NULL,
  `palung6` int(5) DEFAULT NULL,
  `dist_mixer_a_utara` int(5) DEFAULT NULL,
  `dist_mixer_a_selatan` int(5) DEFAULT NULL,
  `pan15` int(5) DEFAULT NULL,
  `pan16` int(5) DEFAULT NULL,
  `palung9` int(5) DEFAULT NULL,
  `cvp_c` int(5) DEFAULT NULL,
  `palung_cvp_c` int(5) DEFAULT NULL,
  `dist_mixer_c_timur` int(5) DEFAULT NULL,
  `dist_mixer_c_barat` int(5) DEFAULT NULL,
  `pan17` int(5) DEFAULT NULL,
  `pan18` int(5) DEFAULT NULL,
  `palung7` int(5) DEFAULT NULL,
  `palung8` int(5) DEFAULT NULL,
  `palung10` int(5) DEFAULT NULL,
  `cvp_d` int(5) DEFAULT NULL,
  `palung_cvp_d` int(5) DEFAULT NULL,
  `vertical_timur` int(5) DEFAULT NULL,
  `vertical_barat` int(5) DEFAULT NULL,
  `dist_mixer_d1` int(5) DEFAULT NULL,
  `dist_mixer_d2` int(5) DEFAULT NULL,
  `stroop_a_atas` int(5) DEFAULT NULL,
  `stroop_a_bawah` int(5) DEFAULT NULL,
  `stroop_c_atas` int(5) DEFAULT NULL,
  `stroop_c_bawah` int(5) DEFAULT NULL,
  `klare_d_atas` int(5) DEFAULT NULL,
  `klare_d_bawah` int(5) DEFAULT NULL,
  `einwuurf_c` int(5) DEFAULT NULL,
  `einwuurf_d` int(5) DEFAULT NULL,
  `clear_liquor_1` int(5) DEFAULT NULL,
  `clear_liquor_2` int(5) DEFAULT NULL,
  `remelt_a` int(5) DEFAULT NULL,
  `r1_mol_atas` int(5) DEFAULT NULL,
  `r1_mol_bawah` int(5) DEFAULT NULL,
  `r2_mol_atas` int(5) DEFAULT NULL,
  `r2_mol_bawah` int(5) DEFAULT NULL,
  `remelter_a1` int(5) DEFAULT NULL,
  `remelter_a2` int(5) DEFAULT NULL,
  `remelter_cd` int(5) DEFAULT NULL,
  `mingler_atas` int(5) DEFAULT NULL,
  `mingler_bawah` int(5) DEFAULT NULL,
  `silo_retail` int(5) DEFAULT NULL,
  `shs_silo` int(5) DEFAULT NULL,
  `pp` int(5) DEFAULT NULL,
  `reaction_tank_drk` int(5) DEFAULT NULL,
  `talo_phospatasi` int(5) DEFAULT NULL,
  `deep_bad_filter` int(5) DEFAULT NULL,
  `co2_gas_carbonator1` int(5) DEFAULT NULL,
  `co2_gas_carbonator2` int(5) DEFAULT NULL,
  `first_filtrat_tank` int(5) DEFAULT NULL,
  `sweet_water_tank` int(5) DEFAULT NULL,
  `clear_liquor_tank1` int(5) DEFAULT NULL,
  `clear_liquor_tank2` int(5) DEFAULT NULL,
  `carbonated_liquor_tank1` int(5) DEFAULT NULL,
  `carbonated_liquor_tank2` int(5) DEFAULT NULL,
  `raw_liquor_tank1` int(5) DEFAULT NULL,
  `raw_liquor_tank2` int(5) DEFAULT NULL,
  `clarifier_melt_tank1` int(5) DEFAULT NULL,
  `clarifier_melt_tank2` int(5) DEFAULT NULL,
  `filtered_melt_tank1` int(5) DEFAULT NULL,
  `filtered_melt_tank2` int(5) DEFAULT NULL,
  `back_wash_tank1` int(5) DEFAULT NULL,
  `back_wash_tank2` int(5) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Terkirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `password`, `role`) VALUES
(1, 'andik', 'Andik Kurniawan', '6e55f26dc6eb9a0ae8abbf206b950d5a', 'admin'),
(2, 'pabrikasi', 'Pabrikasi', 'a20a78496a4bef829731bd32cb05f8b6', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa_ampas`
--
ALTER TABLE `analisa_ampas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_bintik_hitam_babonan`
--
ALTER TABLE `analisa_bintik_hitam_babonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_bjb`
--
ALTER TABLE `analisa_bjb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_gured`
--
ALTER TABLE `analisa_gured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_hplc`
--
ALTER TABLE `analisa_hplc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_kadarabu`
--
ALTER TABLE `analisa_kadarabu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_kapur`
--
ALTER TABLE `analisa_kapur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_ketel`
--
ALTER TABLE `analisa_ketel`
  ADD PRIMARY KEY (`id_analisa`);

--
-- Indexes for table `analisa_nira_kotor`
--
ALTER TABLE `analisa_nira_kotor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_npp`
--
ALTER TABLE `analisa_npp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_od_tetes`
--
ALTER TABLE `analisa_od_tetes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_packer`
--
ALTER TABLE `analisa_packer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_packer_karung`
--
ALTER TABLE `analisa_packer_karung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_pi`
--
ALTER TABLE `analisa_pi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_sabut`
--
ALTER TABLE `analisa_sabut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_so2`
--
ALTER TABLE `analisa_so2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_tebu_lw`
--
ALTER TABLE `analisa_tebu_lw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_tsai`
--
ALTER TABLE `analisa_tsai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analisa_umum`
--
ALTER TABLE `analisa_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coloromat`
--
ALTER TABLE `coloromat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_bahankimia`
--
ALTER TABLE `data_bahankimia`
  ADD PRIMARY KEY (`id_analisa`);

--
-- Indexes for table `data_keliling`
--
ALTER TABLE `data_keliling`
  ADD PRIMARY KEY (`id_analisa`);

--
-- Indexes for table `gula_periodik`
--
ALTER TABLE `gula_periodik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moisture`
--
ALTER TABLE `moisture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `olah_file`
--
ALTER TABLE `olah_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operasional_ketel`
--
ALTER TABLE `operasional_ketel`
  ADD PRIMARY KEY (`id_Analisa`);

--
-- Indexes for table `operasional_masakan`
--
ALTER TABLE `operasional_masakan`
  ADD PRIMARY KEY (`id_analisa`);

--
-- Indexes for table `ronsel_masakan`
--
ALTER TABLE `ronsel_masakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saccharomat`
--
ALTER TABLE `saccharomat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sampel_request`
--
ALTER TABLE `sampel_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skmt`
--
ALTER TABLE `skmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taksasi_volume`
--
ALTER TABLE `taksasi_volume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa_ampas`
--
ALTER TABLE `analisa_ampas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_bintik_hitam_babonan`
--
ALTER TABLE `analisa_bintik_hitam_babonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_bjb`
--
ALTER TABLE `analisa_bjb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_gured`
--
ALTER TABLE `analisa_gured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_hplc`
--
ALTER TABLE `analisa_hplc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_kadarabu`
--
ALTER TABLE `analisa_kadarabu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_kapur`
--
ALTER TABLE `analisa_kapur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_ketel`
--
ALTER TABLE `analisa_ketel`
  MODIFY `id_analisa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_nira_kotor`
--
ALTER TABLE `analisa_nira_kotor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_npp`
--
ALTER TABLE `analisa_npp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_od_tetes`
--
ALTER TABLE `analisa_od_tetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_packer`
--
ALTER TABLE `analisa_packer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_packer_karung`
--
ALTER TABLE `analisa_packer_karung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_pi`
--
ALTER TABLE `analisa_pi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_sabut`
--
ALTER TABLE `analisa_sabut`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_so2`
--
ALTER TABLE `analisa_so2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_tebu_lw`
--
ALTER TABLE `analisa_tebu_lw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_tsai`
--
ALTER TABLE `analisa_tsai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `analisa_umum`
--
ALTER TABLE `analisa_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coloromat`
--
ALTER TABLE `coloromat`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_bahankimia`
--
ALTER TABLE `data_bahankimia`
  MODIFY `id_analisa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_keliling`
--
ALTER TABLE `data_keliling`
  MODIFY `id_analisa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gula_periodik`
--
ALTER TABLE `gula_periodik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moisture`
--
ALTER TABLE `moisture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `olah_file`
--
ALTER TABLE `olah_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `operasional_ketel`
--
ALTER TABLE `operasional_ketel`
  MODIFY `id_Analisa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `operasional_masakan`
--
ALTER TABLE `operasional_masakan`
  MODIFY `id_analisa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ronsel_masakan`
--
ALTER TABLE `ronsel_masakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saccharomat`
--
ALTER TABLE `saccharomat`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sampel_request`
--
ALTER TABLE `sampel_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skmt`
--
ALTER TABLE `skmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taksasi_volume`
--
ALTER TABLE `taksasi_volume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
