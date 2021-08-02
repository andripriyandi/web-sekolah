-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2021 pada 08.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `deskripsi`) VALUES
(1, '<p><strong>&nbsp; &nbsp; &nbsp;SMKN 7 Baleendah</strong> adalah sekolah yang unggul dalam prestasi dan mampu bersaing di era globalisasi ini. Menurut Bapak Agus Priyatmono Nugroho,S.Pd M.Si, selaku kepala sekolah SMKN 7 Baleendah.</p>\r\n<p>&nbsp; &nbsp; &nbsp;\"Sekolah ini mempunyai misi diantaranya menghasilkan lulusan yang terdidik,terlatih dan memiliki sikap yang berorientasi pada perkembangan industri dengan stratgi pembelajaran yang disiplin,berlatih,berkarya,kreatif,inovatif dan berakhlakul karimah\".</p>\r\n<p>&nbsp; &nbsp; &nbsp;Beliau juga mengemukakan bahwa persaingan dunia kerja bagi lulusan SMK semakin ketat untuk menyiasati SMKN 7 Baleendah benar-benar memiliki program unggulan. Sekolah ini memiliki 5 jurusan yaitu:</p>\r\n<p>1. Rekayasa Perangkat Lunak (RPL);</p>\r\n<p>2. Teknik Gambar Bangunan (TGB);</p>\r\n<p>3. Teknik Kendaraan Ringan (TKR);</p>\r\n<p>4. Teknik Sepeda Motor (TSM);</p>\r\n<p>5. Teknik Audio Vidio (TAV).</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tanggal`, `isi`, `penulis`, `foto`) VALUES
(1, 'We Are Excellent In Education', '2019-10-06', '<p>Selamat Datang di SMKN 7 Baleendah</p>', 'Andri Priyandi', '23102019124726IMG_20171024_110633.jpg'),
(2, 'Siswa Tidur di Kelas', '2019-10-10', '<p>lndlaldaldlaldaada</p>', 'Finuary', '01112019151054img_5.jpg'),
(3, 'adsadsa', '2019-11-09', '<p>adadadadad</p>', 'yogas', '24112019112315hero_1.jpg'),
(4, 'AAAA', '2019-11-12', '<p>adadadaddddasasasa</p>', 'radja', '24112019114137img_6.jpg'),
(5, 'adadad', '2019-11-02', '<p>adadadaddada</p>', 'adadadad', '24112019114211slider_1.jpg'),
(6, 'finuary', '2019-11-02', '<p>hvasha</p>', 'haha', '28112019041455img_1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `mataPelajaran` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `mataPelajaran`, `alamat`, `foto`) VALUES
(1, '121313', 'Andri hee', 'Bahasa Inggris', 'Ciparay', '10102019055213Untitled.png'),
(4, '12345667', 'Finuary', 'Bahasa Jawa', 'Ciparay', '30102019154014person_1.jpg'),
(5, '1313', 'Andri Priyandi', 'Bahasa Sunda', 'adad', '23112019105128person_3.jpg'),
(6, 'asas', 'deeee', 'Matematika', 'dd', '26112019160500user.png'),
(7, '323', 'aada', 'adad', 'adad', '28112019081021user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `judul`, `alamat`) VALUES
(1, 'SELAMAT DATANG DI WEB SMKN 7 BALEENDAH', '<p>Jalan Siliwangi KM 15, Kel. Manggahang, Kec. Baleendah, Kab. Bandung.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `namaLengkap` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `namaLengkap`, `subjek`, `email`, `pesan`) VALUES
(1, 'Andri Priyandi', 'SMKN 7 Baleendah', 'andripriyandi@gmail.com', 'SMKN 7 Baleendah mantap'),
(2, 'Andri Priyandi', 'Smk', 'admin@gmail.com', 'SMKN 7 Baleendah'),
(3, 'FFF', 'aaa', 'aaaaaa@hihi.com', 'aaa'),
(5, 'aaa', 'aa', 'aaaaaa@hihi.com', 'aaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `npsn` int(20) NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`id`, `judul`, `nama_sekolah`, `npsn`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `telp`, `foto`) VALUES
(1, 'We Are Excellent In Education', 'SMKN 7 BALEENDAH', 20229784, 'Jalan Siliwangi KM 15', 'Manggahang', 'Baleendah', 'Bandung', '022-87799654', '261120191629323.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `jurusan`, `alamat`, `foto`) VALUES
(1, '1718.10.396', 'Andri Priyandi', 'Rekayasa Perangkat Lunak', 'Ciparay', '31102019114853user.png'),
(2, '1718.10.392', 'Adenda Jaya Swara', 'Rekayasa Perangkat Lunak', 'Dayeuhkolot', '31102019112657user.png'),
(3, '1718.10.394', 'Akmal Abdusyukur', 'Rekayasa Perangkat Lunak', 'Munjul', '31102019113326user.png'),
(4, '1718.10.395', 'Alfi Algani', 'Rekayasa Perangkat Lunak', 'Ciparay', '31102019114001user.png'),
(5, '1718.10.397', 'Anissa Rachma', 'Rekayasa Perangkat Lunak', 'Ciparay', '31102019114200user.png'),
(7, '432423455', 'asas', 'Rekayasa Perangkat Lunak', 'sasa', '24112019023855person_1.jpg'),
(8, '313', 'yyoa', 'Teknik Audio Vidio', 'adad', '26112019155917person_1.jpg'),
(9, '1212', 'asasa', 'Rekayasa Perangkat Lunak', 'asasa', '28112019040108logo.png'),
(10, '121', 'asas', 'Rekayasa Perangkat Lunak', 'asasa', '28112019040135img_2_big.jpg'),
(11, '132134', 'adad', 'Rekayasa Perangkat Lunak', 'adad', '28112019040206img_2.jpg'),
(12, '1212', 'asas', 'Teknik Audio Vidio', 'asas', '28112019040239person_1.jpg'),
(13, '1212', 'aaaa', 'Rekayasa Perangkat Lunak', 'aaaa', '28112019080951user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp`
--

CREATE TABLE `sp` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sp`
--

INSERT INTO `sp` (`id`, `judul`, `deskripsi`) VALUES
(1, 'Assalamualaikum Wr. Wb.', '<p>&nbsp; &nbsp; &nbsp;Puji dan Syukur kami panjatkan kehadirat Allah SWT yang masih melimpahkan berbagai rahmat dan Nikmat-Nya, terutama nikmat umur, kesehatan serta nikmat kesempatan sehingga dapat menjalankan aktifitas kita sehari-hari, khususnya bagi SMKN 7 BALEENDAH yang masih dapat beraktifitas memajukan peserta didik untuk mencapai tujuan yang diinginkan.</p>\r\n<p>&nbsp; &nbsp; &nbsp;SMKN 7 BALEENDAH terus berupaya untuk meningkatkan pelayanan informasi terhadap seluruh komponen sekolah baik itu pendidik, siswa, maupun masyarakat. Salah satu upaya yang dilakukan sekolah yaitu memilikinya jaringan internet dan Website dengan tujuan:</p>\r\n<p>1. Adanya interaktif internal sekolah (Kepala sekolah, Pendidik, Peserta didik dan Orang tua siswa serta Komite sekolah).</p>\r\n<p>2. Terjadinya interaktif eksternal sekolah dengan dunia luar.</p>\r\n<p>3. Pemanfaatan teknologi dan informasi yang semakin cepat untuk peningkatan pembelajaran.</p>\r\n<p>4. Penyampaian informasi dari sekolah ke orang tua siswa dan komite ataupun dengan pihak lain yang terkait.</p>\r\n<p>5. Mempercepat penyampain informasi, saran, masukan tanpa harus bertatap muka diantara warga dan dunia sekolah.</p>\r\n<p>&nbsp; &nbsp; &nbsp;Akhirnya kami berharap dengan adanya website ini diharapkan agar warga sekolah dapat mengambil manfaat sebesar-besarnya demi memajukan sekolah dan peningkatan mutu pendidikan. Selamat bergabung di Website SMKN 7 Baleendah, kritik dan saran yang membangun sangat kami harapkan.</p>\r\n<p style=\"text-align: right;\">Kepala Sekolah,</p>\r\n<p style=\"text-align: right;\">Agus Priyatmono Nugroho, S.Pd M.Si</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Andri Priyandi', 'andri', '123', 'Admin', '22112019162917user.png'),
(2, 'Mas Finuu', 'finuary', '123', 'Guru', '27112019151134person_1.jpg'),
(3, 'RadjaAdiP', 'siswa', '123', 'Siswa', '24112019050752user.png'),
(4, 'Mas finu', 'admin', '1234', 'Admin', '23102019144810user.png'),
(5, 'Yogas Destarinsyah', 'yogas', '222', 'Guru', '02112019083524person_4.jpg'),
(6, 'aabbb', 'aa', '22', 'Guru', '26112019160231person_4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sp`
--
ALTER TABLE `sp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `sp`
--
ALTER TABLE `sp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
