-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2023 pada 09.53
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ironman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','pengunjung') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(1, 'muthia', 'khanza', 'muthia', 'prakpemweb1234', 'admin'),
(2, 'khansa', 'khalda', 'khadal', 'prakpemweb1234', 'pengunjung'),
(4, 'hamas', 'izzudin', 'hamas', '1234', 'pengunjung'),
(5, 'prak', 'pem', 'web', '123', 'pengunjung'),
(6, 'iron', 'man', 'ironman', '1234', 'pengunjung'),
(7, 'kapten', 'amerika', 'kapten', '12345', 'pengunjung'),
(8, 'ant', 'man', 'ant', '1234', 'pengunjung'),
(9, 'spider', 'man', 'spiderman', '1234', 'pengunjung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_film`
--

CREATE TABLE `daftar_film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(100) NOT NULL,
  `foto_film` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_film`
--

INSERT INTO `daftar_film` (`id`, `nama_film`, `foto_film`) VALUES
(2, 'Iron Man (2008)', 'images/gambar1.jpg'),
(3, 'The Incredible Hulk (2010)', 'images/gambar2.jpg'),
(4, 'Iron Man 2 (2010)', 'images/ironman2.png'),
(5, 'The Avangers (2012)', 'images/theavangers.png'),
(6, 'Iron Man 3', 'images/ironman3.png'),
(7, 'Avangers : Age Of Ultron (2015)', 'images/ageofultron.png'),
(8, 'Captain Amerika : Civil War (2016)', 'images/captainamerika.png'),
(9, 'Spiderman : Home Comming (2017)', 'images/spiderman.png'),
(10, 'Avengesrs : Infinity War (2018)', 'images/avangersinfinitywar.png'),
(11, 'Avenges : End Game (2019)', 'images/endgame.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi_film`
--

CREATE TABLE `deskripsi_film` (
  `id` int(11) NOT NULL,
  `nama_film` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `sutradara` varchar(13) NOT NULL,
  `box_office` varchar(300) NOT NULL,
  `serial_film` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `produser` varchar(100) NOT NULL,
  `cerita_oleh` varchar(100) NOT NULL,
  `poster` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deskripsi_film`
--

INSERT INTO `deskripsi_film` (`id`, `nama_film`, `deskripsi`, `tanggal_rilis`, `sutradara`, `box_office`, `serial_film`, `genre`, `produser`, `cerita_oleh`, `poster`) VALUES
(2, 'Iron Man (2008)', 'Pada adegan pembuka, Tony Stark digambarkan sedang berbincang dengan beberapa tentara di dalam kendaraan militer, sebelum mereka diserang oleh kelompok teroris. Stark terkena ledakan rudal yang ternyata merupakan produk buatan perusahaannya sendiri. Setelah itu dia disandera oleh kelompok tersebut. Tony Stark yang mewarisi perusahaan kontraktor pertahanan Stark Industries dari mendiang ayahnya, digambarkan sebagai seorang jenius yang berhasil mengembangkan teknologi persenjataan militer. Namun, dia juga digambarkan sebagai seseorang yang senang berjudi dan bermain-main dengan perempuan. Demi urusan bisnis, dia pergi ke Afganistan yang luluh lantak oleh perang bersama teman sekaligus penghubung militernya, Letnan Kolonel James Rhodes untuk mendemonstrasikan peluru kendali \"Jericho\" yang baru. Kemudian adegan dipercepat, dengan menampilkan penggalan ketika rombongan Stark disergap, Stark terluka oleh rudal, dan tindakan operasi yang dilakukan kepadanya. Setelah bangun ia mendapati dirinya ditangkap dan ditawan dalam sebuah gua oleh kelompok teroris bernama Ten Rings. Ho Yinsen, yang merupakan seorang dokter dan sesama tawanan, menanamkan elektromagnet ke dalam dada Stark untuk mencegah pecahan peluru yang melukainya agar tidak mencapai jantung dan membunuhnya. Pemimpin Ten Rings, Raza, menawarkan untuk membebaskan Stark dengan syarat dia membuatkan rudal Jericho untuk kelompok itu, tetapi Stark dan Yinsen tahu bahwa dia tidak akan menepati janjinya.', '2008-04-14', 'Jon Favreau', '585,8 juta USD', 'Iron Man', 'Iron Man', 'Avi Arad\r\nKevin Feige\r\nPewdiepie', 'Mark Fergus\r\nHawk Ostby\r\nArt Marcum\r\nMatt Holloway', 'images/gambar1.jpg'),
(3, 'The Incridible Hulk (2008)', 'The Incredible Hulk adalah film pahlawan super Amerika tahun 2008 berdasarkankarakter Marvel Comics, Hulk . Diproduksi oleh Marvel Studios dan didistribusikan oleh Universal Pictures , ini adalah film kedua di Marvel Cinematic Universe (MCU). Film ini disutradarai oleh Louis Leterrier dari skenario oleh Zak Penn , dan dibintangi oleh Edward Norton sebagai Bruce Banner bersama Liv Tyler , Tim Roth , William Hurt , Tim Blake Nelson , Ty Burrell , dan Christina Cabot. Dalam film tersebut, Bruce Banner menjadi Hulk tanpa disadari sebagai pion dalam skema militer untuk menghidupkan kembali program \"Prajurit Super\" melalui radiasi gamma. Banner melarikan diri dari militer ketika mencoba menyembuhkan dirinya sendiri dari Hulk.', '2008-06-08', 'Louis Leterri', '$264,8 jutaUSD', 'Hulk', 'Hulk', 'Avi Arad\r\nGale Anne Hurd\r\nKevin Feige', 'Zak Penn', 'images/gambar2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_film`
--
ALTER TABLE `daftar_film`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `deskripsi_film`
--
ALTER TABLE `deskripsi_film`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `daftar_film`
--
ALTER TABLE `daftar_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `deskripsi_film`
--
ALTER TABLE `deskripsi_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
