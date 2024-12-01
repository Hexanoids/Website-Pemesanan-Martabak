-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2024 pada 11.03
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_martabak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_martabak`
--

CREATE TABLE `category_martabak` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category_martabak`
--

INSERT INTO `category_martabak` (`id_category`, `name_category`) VALUES
(1, 'MARTABAK TELUR AYAM'),
(2, 'MARTABAK TELUR BEBEK'),
(3, 'TERANG BULAN SPESIAL DILIPAT ( UKURAN LOYANG 28 CM OLESAN SIMAS )'),
(4, 'TERANG BULAN BIASA DILIPAT ( UKURAN LOYANG 23 CM OLESAN SIMAS )'),
(5, 'TERANG BULAN ISTIMEWA MEDIUM ( MODEL PIZZA / 8 RASA )'),
(6, 'TERANG BULAN ISTIMEWA BESAR LOYANG 28 CM ( MODEL PIZZA / 8 RASA )'),
(7, 'TERANG BULAN PREMIUM DILIPAT BESAR UK 28CM'),
(8, 'TERANG BULAN PREMIUM DILIPAT UK 23 CM'),
(9, 'PAKET ULANG TAHUN'),
(10, 'MARTABAK MINI 13CM'),
(11, 'NASI PUTIH'),
(17, 'TERANG BULAN SUPER DILIPAT ( UKURAN LOYANG 28 CM OLESAN SIMAS )');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_martabak`
--

CREATE TABLE `menu_martabak` (
  `id_menu` int(11) NOT NULL,
  `name_menu` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `img_menu` varchar(200) DEFAULT '',
  `id_category` int(11) DEFAULT NULL,
  `no_varian` varchar(200) DEFAULT '',
  `stok` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menu_martabak`
--

INSERT INTO `menu_martabak` (`id_menu`, `name_menu`, `price`, `img_menu`, `id_category`, `no_varian`, `stok`) VALUES
(1, 'Martabak Telur (2 Telur Ayam)', 30000, 'martabak-telur.jpg', 1, 'NON', 'Tidak Tersedia'),
(2, 'Martabak Telur (3 Telur Ayam)', 35000, 'martabak-telur.jpg', 1, 'NON', 'Tersedia'),
(3, 'Martabak Telur (4 Telur Ayam)', 40000, 'martabak-telur.jpg', 1, 'NON', 'Tersedia'),
(4, 'Martabak Telur (5 Telur Ayam)', 50000, 'martabak-telur.jpg', 1, 'NON', 'Tersedia'),
(5, 'Martabak Telur (6 Telur Ayam)', 55000, 'martabak-telur.jpg', 1, 'NON', 'Tersedia'),
(6, 'Martabak Telur (7 Telur Ayam)', 60000, 'martabak-telur.jpg', 1, 'NON', 'Tersedia'),
(7, 'Martabak Telur (8 Telur Ayam)', 65000, 'martabak-telur.jpg', 1, 'NON', 'Tersedia'),
(8, 'Martabak Telur (9 Telur Ayam)', 70000, 'martabak-telur.jpg', 1, 'NON', 'Tersedia'),
(9, 'Martabak Telur (10 Telur Ayam)', 75000, 'martabak-telur.jpg', 1, 'NON', 'Tersedia'),
(10, 'Martabak Telur (2 Telur Bebek)', 33500, 'martabak-telur-bebek.jfif', 2, 'NON', 'Tersedia'),
(11, 'Martabak Telur (3 Telur Bebek)', 38500, 'martabak-telur-bebek.jfif', 2, 'NON', 'Tersedia'),
(12, 'Martabak Telur (4 Telur Bebek)', 44500, 'martabak-telur-bebek.jfif', 2, 'NON', 'Tersedia'),
(13, 'Martabak Telur (5 Telur Bebek)', 49500, 'martabak-telur-bebek.jfif', 2, 'NON', 'Tersedia'),
(14, 'KEJU CAMPUR PAKET 1 ( MAKSIMAL 4 TOPING )', 44000, 'KCP1-TB-SUPER-DILIPAT.jpg', 17, 'KCP1', 'Tersedia'),
(15, 'KEJU CAMPUR PAKET 2 ( MAKSIMAL 3 TOPING )', 43000, 'KCP2-TB-SUPER-DILIPAT.jpg', 17, 'KCP2', 'Tersedia'),
(16, 'KEJU CAMPUR PAKET 3 ( MAKSIMAL 2 TOPING )', 42000, 'KCP2-TB-SUPER-DILIPAT.jpg', 17, 'KCP3', 'Tersedia'),
(17, 'KEJU POLOS', 44000, 'KEJU-POLOS-SUPER-DILIPAT.jpg', 17, 'KP', 'Tersedia'),
(18, 'PAKET 1 CAMPUR KECUALI KEJU ( MAKSIMAL 4 TOPING )', 44000, 'P1CKK-TB-SUPER-DILIPAT.jpg', 17, 'KCP1', 'Tersedia'),
(19, 'PAKET 2 CAMPUR KECUALI KEJU ( MAKSIMAL 3 TOPING )', 43000, 'P2CKK-TB-SUPER-DILIPAT.jpg', 17, 'KCP2', 'Tersedia'),
(20, 'PAKET 3 CAMPUR KECUALI KEJU ( MAKSIMAL 2 TOPING )', 42000, 'P3CKK-TB-SUPER-DILIPAT.jpg', 17, 'KCP3', 'Tersedia'),
(21, 'KEJU CAMPUR PAKET 1 ( MAKSIMAL 4 TOPING )', 42000, 'KCP1-TB-SPESIAL-DILIPAT.jpg', 3, 'KCP1', 'Tersedia'),
(22, 'KEJU CAMPUR PAKET 2 ( MAKSIMAL 3 TOPING )', 41000, 'KCP2-TB-SPESIAL-DILIPAT.jpg', 3, 'KCP2', 'Tersedia'),
(23, 'KEJU CAMPUR PAKET 3 ( MAKSIMAL 2 TOPING )', 40000, 'KCP3-TB-SPESIAL-DILIPAT.jpg', 3, 'KCP3', 'Tersedia'),
(24, 'KEJU POLOS', 41000, 'KEJU-POLOS-SPESIAL-DILIPAT.jpg', 3, 'KP', 'Tersedia'),
(25, 'PAKET 1 CAMPUR KECUALI KEJU ( MAKSIMAL 4 TOPING )', 41000, 'P1CKK-TB-SPESIAL-DILIPAT.jpg', 3, 'KCP1', 'Tersedia'),
(26, 'PAKET 2 CAMPUR KECUALI KEJU ( MAKSIMAL 3 TOPING )', 40000, 'P2CKK-TB-SPESIAL-DILIPAT.jpg', 3, 'KCP2', 'Tersedia'),
(27, 'PAKET 3 CAMPUR KECUALI KEJU ( MAKSIMAL 2 TOPING )', 33000, 'P3CKK-TB-SPESIAL-DILIPAT.jpg', 3, 'KCP3', 'Tersedia'),
(28, 'KEJU CAMPUR PAKET 1 ( MAKSIMAL 4 TOPING )', 24000, 'KCP1-TB-BIASA-DILIPAT.jpg', 4, 'KCP1', 'Tersedia'),
(29, 'KEJU CAMPUR PAKET 2 ( MAKSIMAL 3 TOPING )', 23000, 'KCP2-TB-BIASA-DILIPAT.jpg', 4, 'KCP2', 'Tersedia'),
(30, 'KEJU CAMPUR PAKET 3 ( MAKSIMAL 2 TOPING )', 22000, 'KCP3-TB-BIASA-DILIPAT.jpg', 4, 'KCP3', 'Tersedia'),
(31, 'KEJU POLOS', 23000, 'KEJU-POLOS-BIASA-DILIPAT.jpg', 4, 'KP', 'Tersedia'),
(32, 'PAKET 1 CAMPUR KECUALI KEJU ( MAKSIMAL 4 TOPING )', 24000, 'P1CKK-TB-BIASA-DILIPAT.jpg', 4, 'KCP1', 'Tersedia'),
(33, 'PAKET 2 CAMPUR KECUALI KEJU ( MAKSIMAL 3 TOPING )', 23000, 'P2CKK-TB-BIASA-DILIPAT.jpg', 4, 'KCP2', 'Tersedia'),
(34, 'PAKET 3 CAMPUR KECUALI KEJU ( MAKSIMAL 2 TOPING )', 22000, 'P3CKK-TB-BIASA-DILIPAT.jpg', 4, 'KCP3', 'Tersedia'),
(35, 'TERANG BULAN PREMIUM 8 RASA ( MAKSIMAL 8 TOPING )', 80000, 'TB-PREMIUM-8-RASA.jpg', 5, 'TBP8R', 'Tersedia'),
(36, 'TERANG BULAN PREMIUM 12 RASA ( MAKSIMAL 12 TOPING )', 100000, 'TB-PREMIUM-12-RASA.jpg', 5, 'TBP12R', 'Tersedia'),
(37, 'TERANG BULAN PREMIUM 16 RASA', 125000, 'TB-PREMIUM-16-RASA.jpg', 5, 'TBP16R', 'Tersedia'),
(38, 'TERANG BULAN 8 RASA KLASIK PAKET 1', 50000, 'TB-8-RKP-1.jpg', 5, 'TBK', 'Tersedia'),
(39, 'TERANG BULAN 8 RASA KLASIK PAKET 2', 45000, 'TB-8-RKP-2.jpg', 5, 'TBK', 'Tersedia'),
(40, 'TERANG BULAN 3 RASA KLASIK ( MAKSIMAL 3 PILIHAN TOPING )', 40000, 'TB-3-RK.jpg', 5, 'TBK', 'Tersedia'),
(41, 'TERANG BULAN 2 RASA KLASIK TANPA KEJU ( MAKSIMAL 2 TOPING )', 35000, 'TB-2-RKTK.jpg', 5, 'TBKTK', 'Tersedia'),
(42, 'Terang Bulan Istimewa 1 Rasa Medium Ceres ', 35000, 'TBI-1-RMC-2-RASA.jpg', 5, 'NON', 'Tersedia'),
(43, 'Terang Bulan Istimewa 1 Rasa Medium Keju', 35000, 'TBI-1-RMC-1-RASA.jpg', 5, 'NON', 'Tersedia'),
(44, 'Terang Bulan Istimewa 1 Rasa Medium Chacha', 57000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(45, 'Terang Bulan Istimewa 1 Rasa Medium Nutella', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(46, 'Terang Bulan Istimewa 1 Rasa Medium Toblerone Coklat', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(47, 'Terang Bulan Istimewa 1 Rasa Medium Silverqueen Putih', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(48, 'Terang Bulan Istimewa 1 Rasa Medium Kit Kat Green Tea', 68000, 'TBI-1-RM-KKGT.jpg', 5, 'NON', 'Tersedia'),
(49, 'Terang Bulan Istimewa 1 Rasa Medium Kit Kat Coklat', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(50, 'Terang Bulan Istimewa 1 Rasa Medium Chungkybar Putih', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(51, 'Terang Bulan Istimewa 1 Rasa Medium Ovomaltine', 70000, 'TBI-1-RM-O.jpg', 5, 'NON', 'Tersedia'),
(52, 'Terang Bulan Istimewa 1 Rasa Medium Delfi', 60000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(53, 'Terang Bulan Istimewa 1 Rasa Medium Chungkybar Coklat', 68000, 'TBI-1-RM-CC.jpg', 5, 'NON', 'Tersedia'),
(54, 'Terang Bulan Istimewa 1 Rasa Medium Silverqueen Coklat', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(55, 'Terang Bulan Istimewa 1 Rasa Medium Toblerone Putih', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(56, 'Terang Bulan Istimewa 1 Rasa Medium Chungkybar Coklat Rasa Orange', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(57, 'Terang Bulan Istimewa 1 Rasa Medium Silverqueen Hitam', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(58, 'Terang Bulan Istimewa 1 Rasa Medium Cadbury', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(60, 'Terang Bulan Istimewa 1 Rasa Medium Chungkybar Hitam', 68000, 'TBI-1-RM-CH.jpg', 5, 'NON', 'Tersedia'),
(61, 'Terang Bulan Istimewa 1 Rasa Medium Toblerone Hitam', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(62, 'Terang Bulan Istimewa 1 Rasa Medium Skippy', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(63, 'Terang Bulan Istimewa 1 Rasa Medium Van Hautten', 68000, 'NON-IMG.jpg', 5, 'NON', 'Tersedia'),
(64, 'Terang Bulan Istimewa 1 Rasa Oreo', 60000, 'TBI-1-R-O.jpg', 5, 'NON', 'Tersedia'),
(65, 'Terang Bulan 2 Rasa Ketan Hitam Dan Ceres', 30000, 'TB-2-RKTHDC.jpg', 5, 'NON', 'Tersedia'),
(66, 'Terang Bulan Istimewa 1 Rasa Medium Marsmallow', 68000, 'TBI-1-RM-M.jpg', 5, 'NON', 'Tersedia'),
(67, 'Terang Bulan Istimewa 8 Rasa Premium ( Maksimal 8 Rasa )', 125000, 'TBI-8-RM-M8R.jpg', 6, 'TBP8R', 'Tersedia'),
(68, 'Terang Bulan Istimewa 12 Rasa Premium ( Maksimal 12 Rasa )', 145000, 'TBI-12-RM-M12R.jpg', 6, 'TBP12R', 'Tersedia'),
(69, 'Terang Bulan Istimewa 16 Rasa Premium Besar ( Maksimal 16 Rasa )', 172500, 'TBI-16-RM-M16R.jpg', 6, 'TBP16R', 'Tersedia'),
(70, 'Terang Bulan Istimewa 8 Rasa Besar Klasik', 80000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(71, 'Terang Bulan Istimewa 1 Rasa Besar Kit Kat Green Tea', 110000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(72, 'Terang Bulan Istimewa 1 Rasa Besar Toblerone Coklat', 110000, 'TBI-1-RB-TC.jpg', 6, 'NON', 'Tersedia'),
(73, 'Terang Bulan Istimewa 1 Rasa Besar Chungkybar Putih', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(74, 'Terang Bulan Istimewa 1 Rasa Besar Cadbury', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(75, 'Terang Bulan Istimewa 1 Rasa Besar Toblerone Putih', 110000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(76, 'Terang Bulan Istimewa 1 Rasa Besar Marsmallow', 105000, 'TBI-1-RB-M.jpg', 6, 'NON', 'Tersedia'),
(77, 'Terang Bulan Istimewa 1 Rasa Besar Ovomaltine', 110000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(78, 'Terang Bulan Istimewa 1 Rasa Besar Chungkybar Hitam', 100000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(79, 'Terang Bulan Istimewa 1 Rasa Besar Silverqueen Coklat', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(80, 'Terang Bulan Istimewa 1 Rasa Besar Chungkybar Coklat', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(81, 'Terang Bulan Istimewa 1 Rasa Besar Silverqueen Hitam', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(82, 'Terang Bulan Istimewa 1 Rasa Besar Skippy', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(83, 'Terang Bulan Istimewa 1 Rasa Besar Toblerone Hitam', 110000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(84, 'Terang Bulan Istimewa 1 Rasa Besar Van Hautten', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(85, 'Terang Bulan Istimewa 1 Rasa Besar Chungkybar Coklat Rasa Orange', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(86, 'Terang Bulan Istimewa 1 Rasa Besar Silverqueen Putih', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(87, 'Terang Bulan Istimewa 1 Rasa Besar Tim Tam Red Velvet', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(88, 'Terang Bulan Istimewa 1 Rasa Besar Chacha', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(89, 'Terang Bulan Istimewa 1 Rasa Besar Ceres', 60000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(90, 'Terang Bulan Istimewa 1 Rasa Besar Nutella', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(91, 'Terang Bulan Istimewa 1 Rasa Besar Keju', 60000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(92, 'Terang Bulan Istimewa 1 Rasa Besar Delfi', 100000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(93, 'Terang Bulan Istimewa 2 Rasa Besar Kacang Ceres', 60000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(94, 'Terang Bulan Istimewa 1 Rasa Besar Kit Kat Coklat', 105000, 'NON-IMG.jpg', 6, 'NON', 'Tersedia'),
(95, 'KEJU CAMPUR NUTELLA', 80000, 'KC-NUTELLA.jpg', 7, 'NON', 'Tersedia'),
(96, 'KEJU CAMPUR OVOMALTINE', 80000, 'KC-OVOMALTINE.jpg', 7, 'NON', 'Tersedia'),
(97, 'KEJU CAMPUR SKIPHY', 80000, 'KC-SKIPHY.jpg', 7, 'NON', 'Tersedia'),
(98, 'KEJU CAMPUR TOBLERONE COKLAT', 80000, 'KC-TOBLERONE-COKLAT.jpg', 7, 'NON', 'Tersedia'),
(99, 'KEJU CAMPUR TOBLERONE PUTIH', 80000, 'KC-TOBLERONE-PUTIH.jpg', 7, 'NON', 'Tersedia'),
(100, 'KEJU CAMPUR TOBLERONE HITAM', 80000, 'KC-TOBLERONE-HITAM.jpg', 7, 'NON', 'Tersedia'),
(101, 'KEJU CAMPUR SILVERQUEEN COKLAT', 80000, 'KC-SILVERQUEEN-COKLAT.jpg', 7, 'NON', 'Tersedia'),
(102, 'KEJU CAMPUR SILVERQUEEN PUTIH', 80000, 'KC-SILVERQUEEN-PUTIH.jpg', 7, 'NON', 'Tersedia'),
(103, 'KEJU CAMPUR SILVERQUEEN HITAM', 80000, 'KC-SILVERQUEEN-HITAM.jpg', 7, 'NON', 'Tersedia'),
(104, 'KEJU CAMPUR SILVERQUEEN GREEN TEA', 80000, 'KC-SILVERQUEEN-GREEN-TEA.jpg', 7, 'NON', 'Tersedia'),
(105, 'KEJU CAMPUR SILVERQUEEN YOGURTH', 80000, 'KC-SILVERQUEEN-YOGURTH.jpg', 7, 'NON', 'Tersedia'),
(106, 'KEJU CAMPUR CHUNGKYBAR COKLAT', 80000, 'KC-CHUNGKYBAR-COKLAT.jpg', 7, 'NON', 'Tersedia'),
(107, 'KEJU CAMPUR CHUNGKYBAR PUTIH', 80000, 'KC-CHUNGKYBAR-PUTIH.jpg', 7, 'NON', 'Tersedia'),
(108, 'KEJU CAMPUR CHUNGKYBAR HITAM', 80000, 'KC-CHUNGKYBAR-HITAM.jpg', 7, 'NON', 'Tersedia'),
(109, 'KEJU CAMPUR CUNGHKYBAR HITAM RASA ORANGE', 80000, 'KC-CUNGHKYBAR-HITAM-RASA-ORANGE.jpg', 7, 'NON', 'Tersedia'),
(110, 'KEJU CAMPUR DELFI', 80000, 'KC-DELFI.jpg', 7, 'NON', 'Tersedia'),
(111, 'KEJU CAMPUR CADBURY', 80000, 'KC-CADBURY.jpg', 7, 'NON', 'Tersedia'),
(112, 'KEJU CAMPUR VAN HAUTTEN', 80000, 'KC-VAN-HAUTTEN.jpg', 7, 'NON', 'Tersedia'),
(113, 'KEJU CAMPUR KIT KAT COKLAT', 80000, 'KC-KIT-KAT-COKLAT.jpg', 7, 'NON', 'Tersedia'),
(114, 'KEJU CAMPUR KIT KAT GREEN TEA', 80000, 'NON-IMG.jpg', 7, 'NON', 'Tersedia'),
(115, 'KEJU CAMPUR MILO BUBUK', 80000, 'NON-IMG.jpg', 7, 'NON', 'Tersedia'),
(116, 'KEJU CAMPUR MARSMALLOW', 80000, 'KC-MARSMALLOW.jpg', 7, 'NON', 'Tersedia'),
(117, 'KEJU CAMPUR PILLOW TARO', 80000, 'KC-PILLOW-TARO.jpg', 7, 'NON', 'Tersedia'),
(118, 'KEJU CAMPUR PILLOW COKLAT', 80000, 'KC-PILLOW-COKLAT.jpg', 7, 'NON', 'Tersedia'),
(119, 'KEJU CAMPUR OREO', 80000, 'KC-OREO.jpg', 7, 'NON', 'Tersedia'),
(120, 'KEJU CAMPUR CHACHA', 80000, 'KC-CHACHA.jpg', 7, 'NON', 'Tersedia'),
(121, 'KEJU CAMPUR MIX ALL VARIAN TOPING', 80000, 'KC-MIX-ALL-VARIAN-TOPING.jpg', 7, 'NON', 'Tersedia'),
(122, 'Keju Campur Mix All Varian Toping', 42000, 'KC-MIX-ALL-VARIAN-TOPING.jpg', 8, 'NON', 'Tersedia'),
(123, 'Keju Campur Nutella', 42000, 'KC-NUTELLA.jpg', 8, 'NON', 'Tersedia'),
(124, 'Keju Campur Ovomaltine', 42000, 'KC-OVOMALTINE.jpg', 8, 'NON', 'Tersedia'),
(125, 'Keju Campur Skippy', 40000, 'KC-SKIPHY.jpg', 8, 'NON', 'Tersedia'),
(126, 'Keju Campur Toblerone Coklat', 42000, 'KC-TOBLERONE-HITAM.jpg', 8, 'NON', 'Tersedia'),
(127, 'Keju Campur Toblerone Putih', 42000, 'KC-TOBLERONE-PUTIH.jpg', 8, 'NON', 'Tersedia'),
(128, 'Keju Campur Toblerone Hitam', 42000, 'KC-TOBLERONE-HITAM.jpg', 8, 'NON', 'Tersedia'),
(129, 'Keju Campur Silverqueen Coklat', 42000, 'KC-SILVERQUEEN-COKLAT.jpg', 8, 'NON', 'Tersedia'),
(130, 'Keju Campur Silverqueen Putih', 42000, 'KC-SILVERQUEEN-PUTIH.jpg', 8, 'NON', 'Tersedia'),
(131, 'Keju Campur Silverqueen Hitam', 42000, 'KC-SILVERQUEEN-HITAM.jpg', 8, 'NON', 'Tersedia'),
(132, 'Keju Campur Silverqueen Green Tea', 42000, 'KC-SILVERQUEEN-GREEN-TEA.jpg', 8, 'NON', 'Tersedia'),
(133, 'KEJU CAMPUR SILVERQUEEN YOGURTH', 42000, 'KC-SILVERQUEEN-YOGURTH.jpg', 8, 'NON', 'Tersedia'),
(134, 'Keju Campur Chungkybar Coklat', 42000, 'KC-CHUNGKYBAR-COKLAT.jpg', 8, 'NON', 'Tersedia'),
(135, 'Keju Campur Chungkybar Putih', 42000, 'KC-CHUNGKYBAR-PUTIH.jpg', 8, 'NON', 'Tersedia'),
(136, 'Keju Campur Chungkybar Hitam', 42000, 'KC-CHUNGKYBAR-HITAM.jpg', 8, 'NON', 'Tersedia'),
(137, 'Keju Campur Chungkybar Coklat Rasa Orange', 42000, 'KC-CUNGHKYBAR-HITAM-RASA-ORANGE.jpg', 8, 'NON', 'Tersedia'),
(138, 'Keju Campur Delfi', 42000, 'KC-DELFI.jpg', 8, 'NON', 'Tersedia'),
(139, 'Keju Campur Cadbury', 42000, 'KC-CADBURY.jpg', 8, 'NON', 'Tersedia'),
(140, 'Keju Campur Van Hautten', 42000, 'KC-VAN-HAUTTEN.jpg', 8, 'NON', 'Tersedia'),
(141, 'Keju Campur Kit Kat Coklat', 42000, 'KC-KIT-KAT-COKLAT.jpg', 8, 'NON', 'Tersedia'),
(142, 'Keju Campur Kit Kat Green Tea', 42000, 'NON-IMG.jpg', 8, 'NON', 'Tersedia'),
(143, 'Keju Campur Pillow Taro', 38000, 'KC-PILLOW-TARO.jpg', 8, 'NON', 'Tersedia'),
(144, 'Keju Campur Pillow Coklat', 38000, 'KC-PILLOW-COKLAT.jpg', 8, 'NON', 'Tersedia'),
(145, 'Keju Campur Pillow Duren', 38000, 'KC-PILLOW-TARO.jpg', 8, 'NON', 'Tersedia'),
(146, 'Keju Campur Marsmallow', 42000, 'KC-MARSMALLOW.jpg', 8, 'NON', 'Tersedia'),
(147, 'Keju Campur Milo Bubuk', 40000, 'NON-IMG.jpg', 8, 'NON', 'Tersedia'),
(148, 'Keju Campur Chacha', 40000, 'KC-CHACHA.jpg', 8, 'NON', 'Tersedia'),
(149, 'Keju Campur Oreo', 40000, 'KC-OREO.jpg', 8, 'NON', 'Tersedia'),
(150, 'Keju Campur Marcolade Tiramisu', 40000, 'NON-IMG.jpg', 8, 'NON', 'Tersedia'),
(151, 'Keju Campur Marcolade Green Tea', 40000, 'NON-IMG.jpg', 8, 'NON', 'Tersedia'),
(152, 'Keju Campur Marcolade Strawberry', 40000, 'NON-IMG.jpg', 8, 'NON', 'Tersedia'),
(153, 'Keju Campur Marcolade Blueberry', 40000, 'NON-IMG.jpg', 8, 'NON', 'Tersedia'),
(154, 'PAKET ULTAH 1 BASIC 8 RASA PREMIUM MEDIUM UK 23CM', 80000, 'PAKET-ULTAH-1-2.jpg', 9, 'NON', 'Tersedia'),
(155, 'PAKET ULTAH 2 BASIC 12 RASA PREMIUM MEDIUM UK 23CM', 100000, 'PAKET-ULTAH-1-2.jpg', 9, 'NON', 'Tersedia'),
(156, 'PAKET ULTAH 3 BASIC 16 RASA PREMIUM MEDIUM UK 23CM', 120000, 'PAKET-ULTAH-3-4.jpg', 9, 'NON', 'Tersedia'),
(157, 'PAKET ULTAH 4 BASIC 8 RASA KLASIK MEDIUM UK 23CM', 65000, 'PAKET-ULTAH-3-4.jpg', 9, 'NON', 'Tersedia'),
(158, 'PAKET ULTAH 5 BASIC 8 RASA KLASIK MEDIUM UK 23CM', 55000, 'PAKET-ULTAH-5-6.jpg', 9, 'NON', 'Tersedia'),
(159, 'PAKET ULTAH 6 BASIC 3 RASA KLASIK MEDIUM UK 23CM', 50000, 'PAKET-ULTAH-5-6.jpg', 9, 'NON', 'Tersedia'),
(160, 'PAKET ULTAH 7 BASIC 2 RASA KLASIK MEDIUM UK 23CM', 45000, 'PAKET-ULTAH-7.jpg', 9, 'NON', 'Tersedia'),
(161, 'Martabak Mini Toping Keju', 8000, 'MM-TOPING-KEJU.jpg', 10, 'NON', 'Tersedia'),
(162, 'Martabak Mini 4 / 8 Toping Premium', 15000, 'MM-4-8-TOPING-PREMIUM.jpg', 10, 'NON', 'Tersedia'),
(163, 'Martabak Mini 2 Rasa Klasik', 7000, 'MM-2-RASA-KLASIK.jpg', 10, 'NON', 'Tersedia'),
(164, 'Martabak Mini 3 Rasa', 8000, 'MM-3-RASA.jpg', 10, 'NON', 'Tersedia'),
(165, 'Martabak Mini 4 / 6 Toping Klasik', 8500, 'MM-4-6-TOPING-KLASIK.jpg', 10, 'NON', 'Tersedia'),
(166, 'NASI PUTIH', 5000, 'NASI-PUTIH.jpg', 11, 'NON', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `id_transaction` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `qty_item` int(11) DEFAULT NULL,
  `note_varian` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `id_user`, `id_menu`, `qty_item`, `note_varian`) VALUES
(19, 5, 13, 3, 'Mix ( Sosis, Bakso, Ayam )');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `full_name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone_number` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `level` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `full_name`, `email`, `phone_number`, `password`, `address`, `level`) VALUES
(3, 'melvin', 'a@gmail.com', '08123456789', '123', 'abc', 'pelanggan'),
(4, 'epin', '123@gmail.com', '08123', '11111', 'abcc', 'pelanggan'),
(5, 'Udin Kusuma', 'b@gmail.com', '08222222112', '123', 'abbcc', 'pelanggan'),
(7, 'Adi', 'ccc@gmail.com', '081111111111', '123', 'Madiun', 'pelanggan'),
(8, 'Super Admin', 'abc@gmail.com', '123456789', '12345', 'Madiun', 'super_admin'),
(9, 'Admin Pemesanan', 'aaa@gmail.com', '123456789', '12345', 'Madiun', 'admin_pemesanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_cart`
--

CREATE TABLE `user_cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `qty_item` int(11) DEFAULT NULL,
  `note_varian` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_cart`
--

INSERT INTO `user_cart` (`id_cart`, `id_user`, `id_menu`, `qty_item`, `note_varian`) VALUES
(27, 5, 3, 2, 'Mix ( Sosis, Bakso, Ayam )'),
(44, 7, 9, 1, 'Bakso'),
(45, 7, 10, 1, 'Mix ( Sosis, Bakso, Ayam )');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_order`
--

CREATE TABLE `user_order` (
  `id_order` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `qty_item` int(11) DEFAULT NULL,
  `note_varian` varchar(500) DEFAULT NULL,
  `pembayaran` varchar(500) DEFAULT NULL,
  `delivery` varchar(500) DEFAULT NULL,
  `date_order` datetime DEFAULT NULL,
  `status_order` varchar(255) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `verifikasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_order`
--

INSERT INTO `user_order` (`id_order`, `id_user`, `id_menu`, `qty_item`, `note_varian`, `pembayaran`, `delivery`, `date_order`, `status_order`, `total_price`, `verifikasi`) VALUES
(1, 3, 18, 3, 'Toblerone Putih, Silverqueen Coklat, Silverqueen Yugurth ( Very Bery ), Chungkybar Putih', 'DANA', 'Diantar Ke Rumah (+ Rp. 10000)', '2024-05-27 02:47:32', 'Pesanan Telah Selesai', 142005, 'Pesanan Telah DIkonfirmasi'),
(2, 3, 34, 3, 'Ovomaltine, Silverqueen Putih', 'DANA', 'Diantar Ke Rumah (+ Rp. 10000)', '2024-05-27 02:53:11', 'Pesanan Telah Selesai', 76002, 'Pesanan Telah DIkonfirmasi'),
(3, 3, 13, 4, 'Sosis', 'DANA', 'Diantar Ke Rumah (+ Rp. 10000)', '2024-05-27 03:06:06', 'Pesanan Telah Selesai', 208005, 'Pesanan Telah DIkonfirmasi'),
(4, 5, 14, 2, 'Toblerone Putih, Silverqueen Coklat, Silverqueen Hitam, Silverqueen Yugurth ( Very Bery )', 'DANA', 'Diantar Ke Rumah (+ Rp. 10000)', '2024-05-27 06:57:19', 'Pesanan Telah Selesai', 98008, 'Pesanan Telah DIkonfirmasi'),
(5, 3, 22, 2, 'Nutella, Skiphy, Toblerone Putih', 'DANA', 'Diantar Ke Rumah (+ Rp. 10000)', '2024-05-27 11:31:15', 'Pesanan Telah Siap Diantar/Diambil', 92004, 'Pesanan Telah DIkonfirmasi'),
(6, 3, 3, 4, 'Mix ( Sosis, Bakso, Ayam )', 'DANA', 'Diantar Ke Rumah (+ Rp. 10000)', '2024-05-27 11:52:19', 'Pesanan Dikonfirmasi & Dalam Pembuatan Pesanan', 170003, 'Pesanan Telah DIkonfirmasi'),
(7, 3, 1, 7, 'Mix ( Sosis, Bakso, Ayam )', 'DANA', 'Ambil Langsung ke Toko (+ Rp. 0)', '2024-05-27 11:52:46', 'Menunggu Konfirmasi dari Admin', 210001, 'Pesanan Belum Dikonfirmasi'),
(8, 3, 15, 2, 'Nutella, Skiphy, Toblerone Putih', 'DANA', 'Diantar Ke Rumah (+ Rp. 10000)', '2024-05-27 15:02:55', 'Menunggu Konfirmasi dari Admin', 96005, 'Pesanan Belum Dikonfirmasi'),
(9, 3, 1, 2, 'Mix ( Sosis, Bakso, Ayam )', 'DANA', 'Diantar Ke Rumah (+ Rp. 10000)', '2024-05-30 19:06:15', 'Menunggu Konfirmasi dari Admin', 70007, 'Pesanan Belum Dikonfirmasi'),
(10, 3, 19, 3, 'Silverqueen Putih, Silverqueen Green Tea, Chungkybar Coklat', 'DANA', 'Ambil Langsung ke Toko (+ Rp. 0)', '2024-06-12 04:10:38', 'Menunggu Konfirmasi dari Admin', 129004, 'Pesanan Belum Dikonfirmasi'),
(11, 3, 131, 1, 'Tidak Ada', 'DANA', 'Ambil Langsung ke Toko (+ Rp. 0)', '2024-07-07 19:22:17', 'Pesanan Telah Selesai', 42005, 'Pesanan Telah DIkonfirmasi'),
(12, 7, 2, 2, 'Mix ( Sosis, Bakso, Ayam )', 'DANA', 'Diantar Ke Rumah (+ Rp. 10000)', '2024-07-08 07:46:51', 'Pesanan Dikonfirmasi & Dalam Pembuatan Pesanan', 80004, 'Pesanan Telah DIkonfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `varian_rasa`
--

CREATE TABLE `varian_rasa` (
  `id_varian` int(11) NOT NULL,
  `nama_varian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `varian_rasa`
--

INSERT INTO `varian_rasa` (`id_varian`, `nama_varian`) VALUES
(1, 'Nutella'),
(2, 'Ovomaltine'),
(3, 'Skiphy'),
(4, 'Toblerone Coklat'),
(5, 'Toblerone Putih'),
(6, 'Toblerone Hitam'),
(7, 'Silverqueen Coklat'),
(8, 'Silverqueen Putih'),
(9, 'Silverqueen Hitam'),
(10, 'Silverqueen Green Tea'),
(11, 'Silverqueen Yugurth ( Very Bery )'),
(12, 'Chungkybar Coklat'),
(13, 'Chungkybar Putih'),
(14, 'Chungkybar Hitam'),
(15, 'Chungkybar Hitam Rasa Orange'),
(16, 'Van Hautten'),
(17, 'Keju'),
(18, 'Coklat Meses'),
(19, 'Kacang Sangrai'),
(20, 'Coklat Marcolade Rasa Green Tea'),
(21, 'Coklat Marcolade Rasa Tiramisu'),
(22, 'Coklat Marcolade Rasa Blueberry'),
(23, 'Coklat Marcolade Rasa Strawberry'),
(24, 'Oreo Vanilla'),
(25, 'Oreo Red Valvet'),
(26, 'Chochocip Warna'),
(27, 'Chochochip Coklat'),
(28, 'Pisang'),
(29, 'Jagung'),
(30, 'Wijen'),
(31, 'Ketan'),
(32, 'Selai Strawberry'),
(33, 'Ayam'),
(34, 'Sosis'),
(35, 'Bakso'),
(36, 'Mix ( Sosis, Bakso, Ayam )'),
(38, 'Tidak Ada');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category_martabak`
--
ALTER TABLE `category_martabak`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `menu_martabak`
--
ALTER TABLE `menu_martabak`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `FK_id_category` (`id_category`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `FKT_id_menu` (`id_menu`),
  ADD KEY `FKT_id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `FK_id_user` (`id_user`),
  ADD KEY `FK_id_menu` (`id_menu`);

--
-- Indeks untuk tabel `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `FKO_id_menu` (`id_menu`),
  ADD KEY `FKO_id_user` (`id_user`);

--
-- Indeks untuk tabel `varian_rasa`
--
ALTER TABLE `varian_rasa`
  ADD PRIMARY KEY (`id_varian`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category_martabak`
--
ALTER TABLE `category_martabak`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `menu_martabak`
--
ALTER TABLE `menu_martabak`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `user_order`
--
ALTER TABLE `user_order`
  MODIFY `id_order` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `varian_rasa`
--
ALTER TABLE `varian_rasa`
  MODIFY `id_varian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `menu_martabak`
--
ALTER TABLE `menu_martabak`
  ADD CONSTRAINT `FK_id_category` FOREIGN KEY (`id_category`) REFERENCES `category_martabak` (`id_category`);

--
-- Ketidakleluasaan untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `FKT_id_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu_martabak` (`id_menu`),
  ADD CONSTRAINT `FKT_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `user_cart`
--
ALTER TABLE `user_cart`
  ADD CONSTRAINT `FK_id_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu_martabak` (`id_menu`),
  ADD CONSTRAINT `FK_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `user_order`
--
ALTER TABLE `user_order`
  ADD CONSTRAINT `FKO_id_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu_martabak` (`id_menu`),
  ADD CONSTRAINT `FKO_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
