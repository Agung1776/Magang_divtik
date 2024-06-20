-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2024 pada 10.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divtik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `pembuat` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tipe` enum('video','gambar') NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `pembuat`, `gambar`, `tipe`, `tgl`) VALUES
(10, 'Aplikasi PRESISI Polri', 'Aplikasi Super Apps PRESISI Polri adalah kebutuhan akan sebuah sistem dalam menyatukan seluruh layanan data, memberikan kemudahan dalam membuat/membangun sebuah layanan baru, mengintegrasikan layanan yang telah ada dan membuat sebuah standarisasi layanan dari hulu hingga hilir.\r\n\r\nKemampuan tersebut tidak hanya didukung dari spesifikasi perangkat keras (hardware) yang menjadi dasar dari pembuatan, juga bagaimana sistem operasi dan aplikasi yang diterapkan dapat menjadi satu kesatuan sistem yang cepat, aman dan terkontrol.\r\n\r\nLayanan pada PRESISI memiliki kelebihan dimana semua layanan Polri untuk masyarakat akan ada di aplikasi PRESISI Polri. Sistem yang cepat dan aman tentunya menjadi keunggulan bagi semua layanan yang ada di PRESISI Polri. Dari mulai mengurus pajak kendaraan, SIM, mengurus izin keperluan masyarakat, informasi polri serta panggilan darurat 110 yang dapat diakses dengan mudah di aplikasi presisi ini.', 'Agung Ramadhan', '5628y2mate.bz - polri super app presisi polda kalsel.mp4', 'video', '2024-01-23'),
(11, 'Forum Satu Data Divtik', 'Pada 19 Desember 2023 Divisi TIK menggelar forum satu data Polri dengan tema satu data Polri untuk Indonesia. Forum ini diharapkan dapat menghasilkan data yang akurat, terpadu dan dapat dipertanggung jawabkan.', 'Agung Ramadhan', 'forum2.JPG', 'gambar', '2024-01-23'),
(12, 'Peran Divisi TIK dalam pengamanan KTT G20', 'Pengamanan KTT G20 Divisi TIK membangunan Command Center yang dilengkapi dengan teknologi video analytic dan body worm camera guna memantau kegiatan KTT G20 baik di dalam ruang sidang maupun diluar.', 'Agung Ramadhan', '982Bodyworn.jpg', 'gambar', '2024-01-30'),
(13, 'Rakernis TIK Polri Sinergikan Pilihan Teknologi Polri Terintegrasi.', 'Divisi Teknologi Informasi dan Komunikasi (Div TIK) Polri meluncurkan logo baru berwarna dasar hitam dan putih dengan gambar bola dunia berupa bit digital. Kepala Div TIK Polri Irjen Pol Slamet Uliandi mengatakan logo ini menjadi penegasan pembangunan arsitektur TIK Polri dengan pilihan teknologi terintegrasi.\r\n\"Perubahan lingkungan strategis di tingkat global, regional, hingga domestik mendorong Polri menerapkan konsep incorporated atau ketergabungan. Implementasinya dimulai dari pilihan teknologi yang mampu menjawab tantangan yang semakin dinamis,\" jelas Irjen Slamet di Jakarta, Rabu (23/3/2022).', 'Agung Ramadhan', 'Screenshot 2024-02-02 084440.jpg', 'gambar', '2024-02-02'),
(16, 'KAPOLRI TINJAU 91 COMMAND CENTER, PASTIKAN KEAMANAN KTT AIS FORUM 2023', 'Nusa Dua, Bali (11/10/2023) - Bertempat di 91 Command Center ITDC Nusa Dua Bali, Bapak Kapolri Jenderal Pol Drs. Listyo Sigit Prabowo, M.Si. didampingi oleh para PJU Mabes Polri dan PJU Polda Bali melaksanakan peninjauan dalam rangka pengamanan KTT AIS Forum 2023.\r\n\r\nDi kegiatan ini, Div TIK Polri bersama Bid TIK Polda Bali kembali hadir dalam mendukung pelaksanaan pengawasan dan pengamanan dalam kegiatan Konferensi Tingkat Tinggi (KTT) AIS Forum 2023 yang saat ini sedang diselenggarakan di Bali, Indonesia. Kegiatan ini berlangsung pada tanggal 10-11 Oktober 2023 dan dihadiri puluhan negara peserta.\r\n\r\nAIS Forum singkatan dari Archipelagic and Island States Forum atau Forum Negara Kepulauan dan Pulau Kecil. AIS Forum adalah sebuah wadah kerja sama antar negara pulau dan kepulauan sedunia yang bertujuan memperkuat kolaborasi untuk mengatasi permasalahan global, khususnya pembangunan kelautan.\r\n\r\nDengan adanya perhelatan besar ini, merupakan kewajiban bagi Div TIK Polri dan Bid TIK Polda untuk turut serta dalam mempersiapkan jaringan komunikasi dan kembali lagi memanfaatkan 91 Command Center ITDC Nusa Dua Bali yang terintegrasi dengan perangkat Body Worn yang terpasang di masing-masing personel serta 1.357 titik CCTV yang dilengkapi dengan kemampuan analitik.\r\n\r\nMelalui 91 Command Center dapat memantau situasi, mulai dari kedatangan para delegasi di Bandara Ngurah Rai, selanjutnya dilakukan pengawalan sampai di hotel tempat menginap hingga pergerakan delegasi dari hotel sampai di lokasi kegiatan KTT. Hal tersebut adalah upaya Div TIK Polri dan Bid TIK Polda Bali dalam mendukung kegiatan KTT AIS agar aman dan lancar.', 'Agung Ramadhan', 'b1.jpg', 'gambar', '2024-02-02'),
(17, 'KAPOLRI PANTAU PERKEMBANGAN SITUASI PELAKSANAAN KTT ASEAN DI 91 COMMAND CENTER LABUAN BAJO', 'Labuan Bajo (11/05/2023) - Bertempat di 91 Command Center Labuan Bajo NTT, Bapak Kapolri Jenderal Polisi Drs. Listyo Sigit Prabowo, M.Si, memantau langsung perkembangan situasi terkini pelaksanaan KTT ASEAN Ke-42 di Labuan Bajo. Turut hadir pejabat utama Mabes Polri dan pejabat utama Polda beserta jajaran Polda NTT dalam mendampingi Bapak Kapolri saat pelaksanaan pemantauan langsung di 91 Command Center.\r\n\r\nSeperti mendulang keberhasilan dalam pengamanan KTT G20 di Bali sebelumnya, dalam pengamanan KTT ASEAN kali ini kembali sukses dengan memanfaatkan fungsi 91 Command Center yang disiapkan DIv TIK Polri di Labuan Bajo dengan memiliki berbagai fitur dan layanan terintegrasi, salah satunya seperti sistem pengamanan Polri berbasis Artificial Inteligent dan Video Analytics dengan fitur Face Recognition, License Plate Recognition, Crowd Estimation dan People Counting.\r\n\r\nDibalik suksesnya Polri dalam pengamanan KTT ASEAN 2023 di Labuan Bajo, terdapat teknologi canggih yang digunakan untuk mendukung pengamanan dan pengawasan yang digunakan seluruh personel di lapangan yaitu penggunaan teknologi perangkat Body Worn.\r\n\r\nSecara spesifik, Body Worn Polri yang digunakan dalam pengamanan KTT ASEAN di Labuan Bajo adalah teknologi Smart 4G HD Body Worn Camera, yaitu perangkat yang dirancang untuk manajemen pemetaan, pemolaan, pelayanan, bahkan untuk penanganan situasi saat emergency serta mampu merekam peristiwa secara realtime dan terintegrasi dengan 91 Command Center.\r\n\r\nHal tersebut merupakan bagian dari rangkaian pengamanan yang dilakukan Polri, sehingga dapat menentukan keputusan penting yang dapat berdampak positif bagi keamanan di kawasan KTT ASEAN.\r\n\r\n“Kita lihat dari rangkaian pengamanan sebelumnya, yaitu KTT G20 (di Bali), dan sekarang KTT ASEAN, banyak keputusan-keputusan penting yang tentunya akan berdampak positif bagi masyarakat dikawasan ASEAN khususnya masyarakat Indonesia dan khususnya wilayah labuan bajo sendiri sabagai salah satu destinasa wisata.” Ujar Kapolri.', 'Agung Ramadhan', 'Screenshot 2024-02-02 093720.jpg', 'gambar', '2024-02-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama`, `isi`, `tgl`, `gambar`) VALUES
(4, 'Apel pagi ', 'Apel pagi pada 22 Januari di gedug Presisi lantai 8.', '2024-01-22', 'Divtik2.jpeg'),
(5, 'Rapat Divtik', 'Rapat Divtik di gedung Presisi lantai 9.', '2024-01-22', 'Divtik1.jpeg'),
(6, 'Rakernis', 'Ruang rapat gedung Presisi lantai 9.', '2024-03-23', 'IMG-20220323-WA0010.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `saran` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `saran`
--

INSERT INTO `saran` (`id_saran`, `saran`) VALUES
(3, 'Divisi Teknologi Informasi dan Komunikasi Kepolisian\r\nNegara Republik Indonesia (Div TIK Polri) merupakan alat\r\nnegara yang berperan dalam menyelenggarakan fungsi\r\npembinaan dan pengembangan sistem teknologi informasi dan\r\nkomunikasi elektronika serta informasi manajerial termasuk\r\njaringan telekomunikaksi di lingkungan Kepolisian Negara\r\nRepublik Indonesia.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `role`, `username`, `password`) VALUES
(1, 'Agung Ramadhan', 'admin', 'admin', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
