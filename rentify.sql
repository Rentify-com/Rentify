-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2023 pada 14.03
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentify`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuans`
--

CREATE TABLE `bantuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bantuans`
--

INSERT INTO `bantuans` (`id`, `name`, `email`, `subject`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'sadasd@gmail.com', 'asdasd', 'awfafafasd', '2022-12-30 07:06:34', '2022-12-30 07:06:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `jadwal` date NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `user`, `name`, `img`, `kategori`, `harga`, `jadwal`, `telp`, `created_at`, `updated_at`) VALUES
(9, 1, 'Bisoc', 'Olahraga-Futsal-Bisoc.jpg', '4', 120000, '2023-01-25', '081233445566', '2023-01-03 07:10:54', '2023-01-03 07:10:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Konser', '2022-12-27 23:53:25', '2022-12-27 23:53:25'),
(2, 'Ballroom', '2022-12-27 23:53:25', '2022-12-27 23:53:25'),
(3, 'Musik', '2022-12-27 23:53:25', '2022-12-27 23:53:25'),
(4, 'Futsal', '2022-12-27 23:53:25', '2022-12-27 23:53:25'),
(5, 'Badminton', '2022-12-27 23:53:25', '2022-12-27 23:53:25'),
(6, 'Basket', '2022-12-27 23:53:25', '2022-12-27 23:53:25'),
(7, 'Golf', '2022-12-27 23:53:25', '2022-12-27 23:53:25'),
(8, 'Tennis', '2022-12-27 23:53:25', '2022-12-27 23:53:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_20_145402_create_tempats_table', 1),
(6, '2022_12_20_145416_create_books_table', 1),
(7, '2022_12_20_145430_create_bantuans_table', 1),
(8, '2022_12_20_150613_create_kategoris_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempats`
--

CREATE TABLE `tempats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmaps` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tempats`
--

INSERT INTO `tempats` (`id`, `kategori_id`, `name`, `desc`, `alamat`, `harga`, `rating`, `img`, `telp`, `gmaps`, `created_at`, `updated_at`) VALUES
(1, 1, 'GBK testing', 'asdfasfaf', 'Gelora, Tanah Abang, Central Jakarta, Indonesia', 150000000, 5.00, 'InformasiTempat-SUGBK1.jpg', '081296698098', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3419031479207!2d106.79960821535168!3d-6.218564762639981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14d30079f01%3A0x2e74f2341fff266d!2sStadion%20Utama%20Gelora%20Bung%20Karno!5e0!3m2!1sid!2sid!4v1671943863578!5m2!1sid!2sid', '2022-12-27 23:54:22', '2023-01-03 07:09:51'),
(3, 1, 'Garuda Wisnu Kencana', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bali, Indonesia', 200000000, 5.00, 'ArenaKonser-GWK.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.3702995751737!2d115.16540991744385!3d-8.810422800000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244cf54e1dec7%3A0x1988663e064f5a51!2sGaruda%20Wisnu%20Kencana%20Cultural%20Park!5e0!3m2!1sid!2sid!4v1671983768603!5m2!1sid!2sid', '2022-12-27 23:54:22', '2022-12-27 23:54:22'),
(4, 1, 'ICE BSD', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Tangerang, Indonesia', 100000000, 5.00, 'ArenaKonser-ICEBSD.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.720459539617!2d106.63426301535236!3d-6.3004148634172354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb535f152305%3A0x34406ed8b098f478!2sIndonesia%20Convention%20Exhibition!5e0!3m2!1sid!2sid!4v1671944027960!5m2!1sid!2sid', '2022-12-27 23:54:22', '2022-12-27 23:54:22'),
(5, 1, 'Jakarta Convention Center', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Jakarta, Indonesia', 330000000, 5.00, 'ArenaKonser-JCC.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3739942466545!2d106.80501681744383!3d-6.2143089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6adbd77af01%3A0x23abed373d7987d2!2sBalai%20Sidang%20Jakarta%20Convention%20Center!5e0!3m2!1sid!2sid!4v1671944070397!5m2!1sid!2sid', '2022-12-27 23:54:22', '2022-12-27 23:54:22'),
(6, 1, 'Istora Senayan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Jakarta, Indonesia', 130000000, 5.00, 'ArenaKonser-IstoraSenayan.png', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3293936573627!2d106.80347521535164!3d-6.220222962655579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14d81ff223b%3A0x7f2d1c6db9fe661f!2sIstora%20Senayan!5e0!3m2!1sid!2sid!4v1671944129943!5m2!1sid!2sid', '2022-12-27 23:54:22', '2022-12-27 23:54:22'),
(7, 1, 'SICC', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bogor, Jawa Barat, Indonesia', 230000000, 5.00, 'ArenaKonser-SICC.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7038564087134!2d106.84591391535436!3d-6.559017565944668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c136703f9dd1%3A0xd5150fbc50c1ffa9!2sSentul%20International%20Convention%20Centre!5e0!3m2!1sid!2sid!4v1671944156672!5m2!1sid!2sid', '2022-12-27 23:54:22', '2022-12-27 23:54:22'),
(10, 2, 'Sudirman Gede', 'Lorem ipsum', 'Bandung, Jawa Barat, Indonesia', 100000000, 5.00, 'Ballroom-SudirmanGrandBallroom.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7748658546157!2d107.57510892841401!3d-6.917497453625294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e608cfa0c18d%3A0xbe7da28b948823b!2sSudirman%20Grand%20Ballroom!5e0!3m2!1sid!2sid!4v1671946106714!5m2!1sid!2sid', '2022-12-27 23:54:22', '2023-01-03 07:02:40'),
(11, 2, 'Balai Sartika', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 120000000, 5.00, 'Ballroom-BalaiSartika.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5639972954705!2d107.62308201535735!3d-6.942594769894201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63a678eb8eb%3A0xbc6627a16907037f!2sBalai%20Sartika!5e0!3m2!1sid!2sid!4v1671944276295!5m2!1sid!2sid', '2022-12-27 23:54:22', '2022-12-27 23:54:22'),
(12, 2, 'Balai Asri Pusdai', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 180000000, 5.00, 'Ballroom-BalaiAsriPusdai.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.919979003449!2d107.62399911744384!3d-6.900173500000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c8ba9a1b1%3A0x1094b3160196a72!2sBale%20ASRI%20Pusdai!5e0!3m2!1sid!2sid!4v1671944301026!5m2!1sid!2sid', '2022-12-27 23:54:22', '2022-12-27 23:54:22'),
(13, 2, 'Batununggal Indah', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 90000000, 5.00, 'Ballroom-GrahaBatununggalIndah.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.39075187687!2d107.6238029737318!3d-6.963146868173833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e85b9375a699%3A0x8c65c64f69b6e4dd!2sBatununggal%20Indah%20Estate!5e0!3m2!1sen!2sid!4v1672073983203!5m2!1sen!2sid', '2022-12-27 23:54:22', '2022-12-27 23:54:22'),
(15, 2, 'Graha Mekar Wangi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 110000000, 4.50, 'Ballroom-GrahaMekarWangi.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4712426350156!2d107.60031131535735!3d-6.953605770011072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8ebdd786acb%3A0xa5f1d5fcd0e3a728!2sGraha%20Mekar%20Wangi!5e0!3m2!1sid!2sid!4v1671944395733!5m2!1sid!2sid', '2022-12-27 23:54:22', '2022-12-27 23:54:22'),
(16, 2, 'Grand Eastern', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 80000000, 4.30, 'Ballroom-GrandEastern.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7936541169297!2d107.59612501744384!3d-6.915256900000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63d906fcddd%3A0x77eeb8a9aca07e7!2sGrand%20Eastern!5e0!3m2!1sid!2sid!4v1671944459066!5m2!1sid!2sid', '2022-12-27 23:54:22', '2022-12-27 23:54:22'),
(19, 3, 'Musik AR', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 200000, 4.00, 'StudioMusik-Ar.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31682.66069897454!2d107.60151317910154!3d-6.970033399999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9b41d97957f%3A0xb32f1bc9b13a8e29!2sAr%20Music%20Studio!5e0!3m2!1sid!2sid!4v1671983868233!5m2!1sid!2sid', '2022-12-27 23:54:23', '2023-01-03 07:08:44'),
(20, 3, 'Musik Awand', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 200000, 4.60, 'StudioMusik-Awand.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15840.356220228843!2d107.60571523955078!3d-6.998793799999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x511022d270b428f%3A0x6f17016e7625eca4!2sAwand%20Music%20Studio!5e0!3m2!1sid!2sid!4v1671944564278!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(21, 3, 'Rekaman DB', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 230000, 4.60, 'StudioMusik-StudioRekamanDB.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4749668416976!2d107.62278881744385!3d-6.9531640000000055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e85ed3b3ebc9%3A0x7e29a6e7d9ee3762!2sDB%20Digital%20Recording%20Studio!5e0!3m2!1sid!2sid!4v1671944590568!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(22, 3, 'Musik Licko', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 120000, 4.60, 'StudioMusik-Licko.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.331457259359!2d107.63349738636659!3d-6.940352919247533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e846b4037a9b%3A0x39d09964cdfda1a!2sLicko%20Music%20Studio!5e0!3m2!1sid!2sid!4v1671944610314!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(23, 3, 'Musik RAN', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 240000, 4.60, 'StudioMusik-Ran.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3815358866004!2d107.60367021535752!3d-6.96423847012415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8e47708af73%3A0xdeb5afae5652b44a!2sRan%20Studio%20Musik!5e0!3m2!1sid!2sid!4v1671944628619!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(24, 3, 'Musik Xiphos', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 210000, 4.60, 'StudioMusik-Xiphos.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.075327583441!2d107.59791758636757!3d-6.947958569505711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8665f6b9f95%3A0xaab0ab1d2eeb3a55!2sXiphos%20Music%20Studio!5e0!3m2!1sid!2sid!4v1671944645516!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(28, 4, 'Batununggal Indah Club', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 150000, 4.40, 'Olahraga-Futsal-BIC1.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3900500762747!2d107.62422731744384!3d-6.963229999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e856a4e65fa9%3A0xd8cfdfde18d660dc!2sBatununggal%20Indah%20Club!5e0!3m2!1sid!2sid!4v1671944814049!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(29, 4, 'Bisoc', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 120000, 4.40, 'Olahraga-Futsal-Bisoc.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506941.6292608458!2d107.06745716562497!3d-6.95239149999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e85c1c67b43f%3A0x1512113f9320962b!2sBisoc%20Futsal!5e0!3m2!1sid!2sid!4v1671944860030!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(30, 4, 'Batununggal Futsal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 75000, 4.40, 'Olahraga-Futsal-Batununggal.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4781126378707!2d107.6258308153573!3d-6.952790820002391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e85c0836c879%3A0x9bcd6a8519eaef8b!2sBatu%20nunggal%20Futsal!5e0!3m2!1sid!2sid!4v1671944886245!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(31, 4, 'Rajawali', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 120000, 4.40, 'Olahraga-Futsal-Rajawali.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.250925935021!2d107.62896761744385!3d-6.979690499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9a56fd64807%3A0x54da306a9b41acc4!2sFutsal%20Rajawali!5e0!3m2!1sid!2sid!4v1671944932796!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(32, 4, 'Maestro', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 110000, 4.50, 'Olahraga-Futsal-Maestro.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2919161267564!2d107.54937692841669!3d-6.97484475410405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68eedefa63b3c9%3A0x585b26ebfaebce9!2sMaestro%20Futsal%20%26%20Basket!5e0!3m2!1sid!2sid!4v1671944952802!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(33, 4, 'IFI', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 120000, 4.30, 'Olahraga-Futsal-IFI.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2621304145237!2d107.62783241535759!3d-6.978366270274673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9af7a1c1c81%3A0x54142a9ffc9b3ac2!2sIFI%20Futsal!5e0!3m2!1sid!2sid!4v1671944969318!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(34, 4, 'Hayu Futsal Baleendah', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 120000, 4.30, 'Olahraga-Futsal-HayuFutsal.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0831350479225!2d107.62099181535783!3d-6.999491470500375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e980319c5c9b%3A0x42003ad36c30db00!2sHayu%20Futsal%20Baleendah!5e0!3m2!1sid!2sid!4v1671944997943!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(35, 4, 'Sky Futsal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 130000, 4.30, 'Olahraga-Futsal-SkyFutsal.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507595.81472159317!2d106.12453677343751!3d-6.317162999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5476ad6928f%3A0x394f40c7ced36018!2sSKY%20Futsal!5e0!3m2!1sen!2sid!4v1672074024249!5m2!1sen!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(36, 4, 'D\'Gallery', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 90000, 4.20, 'Olahraga-Futsal-D\'Gallery.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15841.060713368004!2d107.61349653955078!3d-6.978005999999989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9a55fd57ce1%3A0x77aa3e12523c471b!2sD&#39;%20Gallery%20Futsal!5e0!3m2!1sid!2sid!4v1671945170361!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(37, 5, 'Gor Sentosa', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 45000, 4.60, 'GorBadminton-Sentosa.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.240478170071!2d107.62679391535772!3d-6.980925070302031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e93dad86163d%3A0x53079de0aed4fa8f!2sGor%20Sentosa!5e0!3m2!1sid!2sid!4v1671945185192!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(38, 5, 'Gor Spontan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 50000, 4.60, 'GorBadminton-Spontan.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2934166743476!2d107.63192611744383!3d-6.974667299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9b1e8a76b91%3A0x5c0791d5cc63de61!2sGOR%20SPONTAN!5e0!3m2!1sid!2sid!4v1671945210399!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(39, 5, 'Gor MSB', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 45000, 4.60, 'GorBadminton-MSB.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.338976534465!2d107.62806471535748!3d-6.969277270177792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9acd7874161%3A0x777f4c14a2bcee51!2sGor%20MSB!5e0!3m2!1sid!2sid!4v1671945231722!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(40, 5, 'Gor Victory', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 40000, 4.60, 'GorBadminton-Victory.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1359299399587!2d107.63433941535773!3d-6.993267170433815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e996d921a90f%3A0x8a18b2860439f7b5!2sGOR%20Victory!5e0!3m2!1sid!2sid!4v1671945250774!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(41, 5, 'Gor Cifut', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 50000, 4.60, 'GorBadminton-Cifut.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1870177970013!2d107.64568991535774!3d-6.9872388703694295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9c1cb5c54e7%3A0xe39db735c8c2d931!2sGor%20Cifut!5e0!3m2!1sid!2sid!4v1671945268801!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(42, 5, 'Gor Mengger', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 40000, 4.60, 'GorBadminton-Mengger.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3645413273857!2d107.62557731535755!3d-6.96625097014556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9f88d01519b%3A0xa002adfd63e5ae25!2sGOR%20Bulutangkis%20Mengger!5e0!3m2!1sid!2sid!4v1671945292503!5m2!1sid!2sid', '2022-12-27 23:54:23', '2022-12-27 23:54:23'),
(43, 5, 'Gor Sigma', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 45000, 4.60, 'GorBadmintonSigma.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1423434338067!2d107.64071631535776!3d-6.992510670425749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9ebf4e5c41b%3A0xee8f79ba360fd9c4!2sGOR%20SIGMA%20Badminton%20Arena!5e0!3m2!1sid!2sid!4v1671945314739!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(45, 5, 'Gor Embun Permata', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 45000, 4.60, 'GorBadminton-GorEmbunPermata.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.313194438868!2d107.6506120153576!3d-6.9723279702103325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e97442e96129%3A0xc6d76da5452084b7!2sGor%20bulutangkis%20Embun%20Permata!5e0!3m2!1sid!2sid!4v1671945409558!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(46, 6, 'Batununggal Indah Club', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 100000, 4.40, 'Olahraga-Basket-BIC.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.390095071538!2d107.62422731535757!3d-6.963224670113355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e856a4e65fa9%3A0xd8cfdfde18d660dc!2sBatununggal%20Indah%20Club!5e0!3m2!1sid!2sid!4v1671945449159!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(47, 6, 'Elite Arena', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 110000, 4.80, 'Olahraga-Basket-EliteArena.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.952542275869!2d107.63603851535697!3d-6.896280069404552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7a220f6a32b%3A0x6ede245d35df489d!2sElite%20Arena!5e0!3m2!1sid!2sid!4v1671945504430!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(48, 6, 'Beebucks', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 100000, 4.70, 'Olahraga-Basket-Beebucks.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6925322123648!2d107.62079721535714!3d-6.927307469732144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7822aa436ff%3A0x3702c42f89766474!2sBeebucks%20basketball%20futsal%20stadium!5e0!3m2!1sid!2sid!4v1671945521060!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(49, 6, 'Maestro', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 120000, 4.50, 'Olahraga-Basket-Maestro.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2919161267564!2d107.54937692841663!3d-6.97484475410405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68eedefa63b3c9%3A0x585b26ebfaebce9!2sMaestro%20Futsal%20%26%20Basket!5e0!3m2!1sid!2sid!4v1671945557360!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(50, 6, 'Gor Tunas Arena', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 100000, 4.40, 'Olahraga-Basket-BIC.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.74073003589!2d107.58841123488772!3d-6.921566400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e619769c0cbd%3A0x28296cc1892c3998!2sGor%20Tunas%20Arena!5e0!3m2!1sid!2sid!4v1671945575738!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(51, 6, 'Siliwangi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 115000, 4.70, 'Olahraga-Basket-Siliwangi.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.33944695138!2d107.60049108320175!3d-6.910340242635062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63a678eb8eb%3A0xac64120b1085cd2e!2sSiliwangi%20Stadium!5e0!3m2!1sen!2sid!4v1672074049962!5m2!1sen!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(52, 6, 'Gor Alhayu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 130000, 4.50, 'Olahraga-Basket-Alhayu.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.098607774708!2d107.62054681535784!3d-6.997667870480917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e94d53c9b4d7%3A0x5f6b72c6e08a932a!2sGOR%20ALHAYU%20Basketball!5e0!3m2!1sid!2sid!4v1671945609955!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(53, 6, 'Home Ground', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 100000, 5.00, 'Olahraga-Basket-HomeGround.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6996612071353!2d107.59535691744384!3d-6.926458599999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7773fcceefb%3A0x4241b1db7ccf05d6!2sHome%20Ground%20Basketball!5e0!3m2!1sid!2sid!4v1671945635680!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(54, 6, 'Gor YPPI Trinitas', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 110000, 4.70, 'Olahraga-Basket-YPIITrinitas.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.773560704725!2d107.5895602153571!3d-6.917653069630049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e610b3821f51%3A0x856b10764757874!2sGOR%20YPII%20-%20Trinitas%20Bandung!5e0!3m2!1sid!2sid!4v1671945652796!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(55, 7, 'Dago Heritage 1917', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 1100000, 4.60, 'Olahraga-Golf-GolfHeritage.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1901685022094!2d107.62309161535666!3d-6.867801769105212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e71e870fc239%3A0x6e29d13b54a47c5a!2sDago%20Heritage%201917%20Golf%20Course!5e0!3m2!1sid!2sid!4v1671945667700!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(56, 7, 'Parahyangan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 1200000, 4.60, 'Olahraga-Golf-Parahyangan.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1003523878417!2d107.43928031535692!3d-6.878579569218381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68fb0e7a9aea43%3A0xe9d37c463356b1d0!2sParahyangan%20Golf!5e0!3m2!1sid!2sid!4v1671945687949!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(57, 7, 'Giri Gahana', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 1000000, 4.50, 'Olahraga-Golf-GiriGahana.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8213215052383!2d107.76064031535705!3d-6.911956169569891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dca7e220f475%3A0xb46c9cf59f07a456!2sBandung%20Giri%20Gahana%20Golf%20%26%20Resort!5e0!3m2!1sid!2sid!4v1671945703791!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(58, 7, 'Mountain View', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 1100000, 4.50, 'Olahraga-Golf-MountainView.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2306955457293!2d107.64603041535678!3d-6.862933069054155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e73fc3af56cd%3A0x7ee32cb54b018a80!2sMountain%20View%20Golf%20Club!5e0!3m2!1sid!2sid!4v1671945754683!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(59, 7, 'Siliwangi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 1150000, 4.50, 'Olahraga-Golf-SiliwangiGolf.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8204080551163!2d107.61681731535707!3d-6.9120651695710436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6348804e093%3A0x94fae0a3b3974c7c!2sSiliwangi%20Golf!5e0!3m2!1sid!2sid!4v1671945770361!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(60, 7, 'Padang Golf Sulaiman', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 1400000, 4.20, 'Olahraga-Golf-PadangGolfSulaiman.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.242563519623!2d107.58400831535779!3d-6.980678670299425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9314035783d%3A0x4780c09eb404d49c!2sPadang%20Golf%20Sulaiman!5e0!3m2!1sid!2sid!4v1671945836120!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(61, 7, 'Private Golf Range Champion', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 1130000, 4.40, 'Olahraga-Golf-PrivateGolfRangeChampion.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5597978063784!2d107.62524771535647!3d-6.823268468639856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e0e0cacbb1d3%3A0xf87518bf9cc357a8!2sPrivate%20Golf%20Range%20Champion!5e0!3m2!1sid!2sid!4v1671945856447!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(62, 7, 'Top Golf', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 1000000, 4.80, 'Olahraga-Golf-TopGolf.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.821753667485!2d107.61651281744383!3d-6.9119046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e634587f8fc3%3A0x1aaa730d5336a5f9!2sTopgolf%20Siliwangi%20Bandung!5e0!3m2!1sid!2sid!4v1671945889483!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(63, 7, 'KPGA Golf Driving', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 1100000, 4.50, 'Olahraga-Golf-KPGAGolfDriving.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9981959295365!2d107.5737765348877!3d-6.890817799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e71c79b8b6b3%3A0x712e5b5c9f74acff!2sLOFT%20Cafe%20at%20KPGA%20Golf%20Driving!5e0!3m2!1sid!2sid!4v1671945936230!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(64, 8, 'Sabuga ITB', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 200000, 4.50, 'Olahraga-Tenis-SabugaITB.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0366092221584!2d107.60615441535691!3d-6.886218469298692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64557f442e3%3A0xc0e5915be0bedccb!2sSasana%20Budaya%20Ganesha%20(Sabuga)%20ITB!5e0!3m2!1sid!2sid!4v1671945968882!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(65, 8, 'Bikasoga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 190000, 4.40, 'Olahraga-Tenis-Bikasoga.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.55530145567!2d107.62249091744384!3d-6.943627799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e861eecddf31%3A0xf82fde475caf7494!2sSport%20Center%20di%20Bandung%20-%20Bikasoga!5e0!3m2!1sid!2sid!4v1671946243556!5m2!1sid!2sid', '2022-12-27 23:54:24', '2022-12-27 23:54:24'),
(66, 8, 'Taman Maluku', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 120000, 4.50, 'Olahraga-Tenis-TamanMaluku.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.843100964564!2d107.61267687373086!3d-6.909356767618362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63679ff3b3b%3A0xfe66cba7e5cbf1e4!2sTaman%20Maluku!5e0!3m2!1sen!2sid!4v1672074067611!5m2!1sen!2sid', '2022-12-27 23:54:25', '2022-12-27 23:54:25'),
(67, 8, 'Singgasana sport', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 250000, 4.40, 'Olahraga-Tenis-SinggasanaSport.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4068451289795!2d107.59462871535754!3d-6.961240270092248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8dd5e5258bd%3A0x5309b909297374ae!2sSinggasana%20Sport%20%26%20Recreation%20Centre!5e0!3m2!1sid!2sid!4v1671946034203!5m2!1sid!2sid', '2022-12-27 23:54:25', '2022-12-27 23:54:25'),
(68, 8, 'Siliwangi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 200000, 4.50, 'Olahraga-Tenis-Siliwangi.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.834724962635!2d107.61637027373092!3d-6.910356567628656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63a678eb8eb%3A0xac64120b1085cd2e!2sSiliwangi%20Stadium!5e0!3m2!1sen!2sid!4v1672074092235!5m2!1sen!2sid', '2022-12-27 23:54:25', '2022-12-27 23:54:25'),
(69, 8, 'Caringin', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla qui iusto repudiandae eaque nemo? Quis optio eveniet nisi quo vero!', 'Bandung, Jawa Barat, Indonesia', 150000, 4.40, 'Olahraga-Tenis-Caringin.jpg', '081233445566', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2691459356233!2d107.6622322737301!3d-6.8583106670956315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7593f7166d1%3A0xa8c9913e4dd768cf!2sCaringin%20TILU!5e0!3m2!1sen!2sid!4v1672074120592!5m2!1sen!2sid', '2022-12-27 23:54:25', '2022-12-27 23:54:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `tipe`, `telp`, `created_at`, `updated_at`) VALUES
(1, 'Mughidaf', 'ghiyats02@gmail.com', '$2y$10$joy5lgg0N2rnPHKquNAtyutvB9BpKtBukAgnVbPcjVLd5Pr/2iddq', 'pembeli', '081296698098', '2022-12-28 00:04:00', '2022-12-28 00:04:00'),
(6, 'admin rentify', 'adminer@gmail.com', '$2y$10$7bLT/0ZFDj25Q0yvV7i93uZIEKviD0eVPId9A8yoOm06c/051phHO', 'admin', '0891237244', '2022-12-28 05:25:59', '2022-12-28 05:25:59'),
(7, 'customer service', 'servicerent@gmail.com', '$2y$10$A6J40SoCbYwmyjTgmIY8ZOb5.Dqu/5vcWBVa50UOmfIdwL0s577pO', 'cs', '08129243021', '2022-12-28 05:42:30', '2022-12-28 05:42:30'),
(9, 'Muhammad Ghiyaats Daffa', 'ghiyats@gmail.com', '$2y$10$UfZGMfl91t6TR/ZfQHJfseiyOdRm.x6ZnpwD7uh9c1eeiyEdIey8q', 'pembeli', '081296698098', '2022-12-30 07:02:12', '2022-12-30 07:02:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bantuans`
--
ALTER TABLE `bantuans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tempats`
--
ALTER TABLE `tempats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bantuans`
--
ALTER TABLE `bantuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tempats`
--
ALTER TABLE `tempats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
