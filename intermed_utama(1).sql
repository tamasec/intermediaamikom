-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Sep 2019 pada 22.24
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intermed_utama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `achievement`
--

CREATE TABLE `achievement` (
  `idAchievement` int(11) NOT NULL,
  `idUser` varchar(12) NOT NULL,
  `juara` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `achievement`
--

INSERT INTO `achievement` (`idAchievement`, `idUser`, `juara`, `keterangan`, `tanggal`, `foto`) VALUES
(8, 'Admin001', 'Juara Favorit Mobile Application Prima 2016', 'Juara Favorit Mobile Application Prima 2016', '2024-09-18', 'Juara_Favorit_Mobile_Application_Prima_2015_24-09-18.jpg'),
(9, 'Admin001', 'Juara 2 kompetisi Produk Prima 2015', 'Juara 2 kompetisi Produk Prima 2015', '2024-09-18', 'Juara_2_kompetisi_Produk_Prima_2015_24-09-18.jpg'),
(10, 'Admin001', 'Juara Favorit Prima 2015', 'Juara Favorit Prima 2015', '2024-09-18', 'Juara_Favorit_Prima_2015_24-09-18.jpg'),
(11, 'Admin001', 'Juara Favorit Prima 2016', 'Juara Favorit Prima 2016', '2024-09-18', 'Juara_Favorit_Prima_2016_24-09-18.jpg'),
(12, 'Admin001', 'Juara 2 Kompetisi kelas Hacking Prima 2016', 'Juara 2 Kompetisi kelas Hacking Prima 2016', '2024-09-18', 'Juara_2_Kompetisi_kelas_Hacking_Prima_2016_24-09-18.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `idAnggota` varchar(12) NOT NULL,
  `noAnggota` varchar(12) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `jk` varchar(12) NOT NULL,
  `ttl` text NOT NULL,
  `alamat` text NOT NULL,
  `angkatan` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noHp` varchar(13) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`idAnggota`, `noAnggota`, `nama_lengkap`, `nim`, `jk`, `ttl`, `alamat`, `angkatan`, `email`, `noHp`, `foto`) VALUES
('MM002', '', 'xaxaxa', '', 'Perempuan', '', '', '', 'ada@dad.com', '', ''),
('PR001', '', 'ZaenurRochman', '16.11.0068', 'Laki - Laki', '1998-05-25', 'kalisari RT07 RW02', '2016', 'zaenur.rochman98@gmail.com', '081578988248', 'PR001_16.11.0068.png'),
('PR002', '', 'rochman', '', 'Laki - Laki', '', '', '', 'rochman@zaenur.com', '', ''),
('PR003', '', 'Trian Damai', '', 'Laki - Laki', '', '', '', 'triannurizkillah@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `idBerita` int(11) NOT NULL,
  `idUser` varchar(12) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` text NOT NULL,
  `gambar` text NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idBerita`, `idUser`, `judul`, `isi`, `tanggal`, `gambar`, `kategori`) VALUES
(1, 'Admin001', 'kotlin jadi bahasa pemrograman android resmi', 'Setelah sebelumnya Android mendukung bahasa pemrograman C++ , untuk pengembangan Aplikasinya. Sekarang tepatnya pada tanggal 17 Mei 2017 kemarin ,Google secara resmi mengumumkan bahwa Android dapat dikembangkan Aplikasinya dengan menggunakan bahasa pemrograman Kotlin. Bahasa pemrograman Kotlin diyakini akan membantu para developer ,untuk mempercepat dan peningkatan performa dalam pengembangan Aplikasi ,yang berkelanjutan.<br>\r\n<br>\r\nKotlin memang sudah banyak diadopsi ,oleh para developer-developer terkenal contohnya seperti ,Expedia, Flipboard, Pinterest, Square, dan lain-lain. Kotlin adalah versi pengembangan lebih lanjut dari bahasa pemrograman Java, yang dapat berjalan di JVM( Java Virtual Machine) juga dapat dikompilasi ke source code Java Script, dikembangkan oleh team programmer dari JetBrains ,yang berlokasi di Saint Petersburg, Russia.<br>\r\nKotlin sangat familiar atau akrab ,bagi siapapun yang sudah mempelajari bahasa pemrograman Java. Jadi kalian tidak usah khawatir ,untuk menyesuaikan dan beradapatasi kembali. Plugin Kotlin sekarang di bundle di Android versi 3.0. Sama halnya seperti bahasa pemrograman C++ sebelumnya.<br>\r\n<br>\r\nContoh code hello world kotlin:<br>\r\n<br>\r\npackage helloDunia fun main(args: Array) {<br>\r\n<br>\r\nprintln(\"Halo Dunia!\")<br>\r\n\r\n}', '24-09-18', 'kotlin_jadi_bahasa_pemrograman_android_resmi_Admin001.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_divisi`
--

CREATE TABLE `detail_divisi` (
  `idDetail` int(2) NOT NULL,
  `idDivisi` int(2) NOT NULL,
  `idAnggota` varchar(12) NOT NULL,
  `keterangan` text NOT NULL,
  `periode_mulai` varchar(12) NOT NULL,
  `periode_selesai` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_divisi`
--

INSERT INTO `detail_divisi` (`idDetail`, `idDivisi`, `idAnggota`, `keterangan`, `periode_mulai`, `periode_selesai`) VALUES
(1, 1, 'PR001', 'testing', '2016/2017', '2017/2018'),
(2, 2, 'PR002', '', '', ''),
(3, 2, 'MM002', '', '', ''),
(4, 1, 'PR003', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_jabatan`
--

CREATE TABLE `detail_jabatan` (
  `idDetail` int(2) NOT NULL,
  `idJabatan` int(2) NOT NULL,
  `idAnggota` varchar(12) NOT NULL,
  `keterangan` text NOT NULL,
  `periode_mulai` varchar(12) NOT NULL,
  `periode_selesai` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_jabatan`
--

INSERT INTO `detail_jabatan` (`idDetail`, `idJabatan`, `idAnggota`, `keterangan`, `periode_mulai`, `periode_selesai`) VALUES
(1, 1, 'PR001', 'testing', '2016/2017', '2017/2018'),
(2, 5, 'PR002', '', '', ''),
(3, 5, 'MM002', '', '', ''),
(4, 1, 'PR003', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_jurusan`
--

CREATE TABLE `detail_jurusan` (
  `idDetail` int(11) NOT NULL,
  `idJurusan` int(11) NOT NULL,
  `idAnggota` varchar(12) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_jurusan`
--

INSERT INTO `detail_jurusan` (`idDetail`, `idJurusan`, `idAnggota`, `keterangan`) VALUES
(1, 2, 'PR002', ''),
(2, 2, 'MM002', ''),
(3, 1, 'PR003', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `idDivisi` int(2) NOT NULL,
  `nama_divisi` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`idDivisi`, `nama_divisi`, `keterangan`) VALUES
(1, 'Pemrograman', 'Divisi yang berfokus pada bidang pemrograman baik itu Pemrograman website, desktop maupun mobile.'),
(2, 'Multimedia', 'Divisi yang berfokus pada bidang multimedia seperti 2D Design , 3D Modeling, Videografi dan Game development.'),
(7, 'Networking Support', 'Divisi yang berfokus pada bidang jaringan, ethical hacking dan system administration.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `idEvent` int(4) NOT NULL,
  `idUser` varchar(12) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`idEvent`, `idUser`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(1, 'Admin001', 'Intermedia Bakti Masyarakat (ibm)', 'Pengetahuan akan teknologi informasi sudah menjadi kebutuhan yang wajib dipenuhi setiap orang dizaman globalisasi ini. Hal tersebut dikarenakan hampir sebagian besar kegiatan sehari-hari seseorang melibatkan bantuan teknologi informasi baik kegiatan belajar-mengajar, bekerja di instansi maupun dalam berwirausaha. Selain itu, pengetahuan akan teknologi informasi merupakan modal utama seseorang untuk dapat bersaing diera globalisasi dan kemajuan zaman yang akan datang. Maka dari itu, kami mahasiswa STMIK AMIKOM Purwokerto dari UKM Intermedia menyelenggarakan “Intermedia Bakti Masyarakat”, yang bertujuan untuk memberikan pelatihan basic komputer dan sosialisasi seputar teknologi kepada masyarakat dan anak-anak.<br>\r\nSebagai wadah menyalurkan potensi mahasiswa dibidang IT kepada masyarakat sekitar.<br>\r\nSebagai media pengabdian masyarakat sekitar\r\nKegiatan IBM ini dilaksanakan di dua tempat yaitu di SD Negeri 1 Kutasari dan Desa Karanglewas Kidul Rt 02/IV. Untuk SD Negeri 1 Kutasari akan dilaksanakan satu minggu sekali selama empat kali pertemuan setiap hari Sabtu dan untuk Desa Karanglewas Kidul akan dilaksanakan satu minggu sekali selama delapan kali pertemuan setiap hari Minggu.<br>\r\nKemudian pada hari terakhir di sambut dengan kunjungan dari SDN 1 Kutasari ke STMIK AMIKOM Purwokerto', '24-09-18', 'Intermedia_Bakti_Masyarakat_(ibm)_Admin001.jpg'),
(2, 'Admin001', 'Seminar IoT Pengenalan IoT menggunakan Raspberry P', 'Pada tanggal 26 Agustus 2017 kemarin kami dari Intermedia bekerja sama dan berkolaborasi dengan MUGI (Microsoft User Group Indonesia) Purwokerto mengadakan Seminar Tentang IoT (Internet of Think) dengan judul \"Pengenalan IoT menggunakan Raspberry Pi dengan Windows 10\" Seminar ini berlangsung di Aula STMIK AMIKOM Purwokerto , dengan Pembicara 1 yaitu Bapak Agus Suparno S.si.M.Eng selaku Microsoft MVP Indonesia dan Pembicara 2 yaitu Ibu Hana Cahyani S.Kom selaku Bidang Keprofesian dari MUGI Purwokerto.<br>\r\n\r\nSeminar ini bertujuan untuk mengenalkan IoT pada masyarakat umum dan terkhusus pada pelajar dan mahasiswa supaya dapat ikut andil dalam perkembangan teknologi IoT ini, dalam seminar ini dibahas betapa pentingnya teknologi IoT ini dan membahas salah satu hardware yang diperlukan untuk IoT yaitu Raspberry Pi.<br>\r\n\r\nDalam seminar ini dibagi menjadi dua bagian yaitu seminar dan demo, untuk demo dalam seminar ini adalah dengan membuat suatu program yang diterapkan pada Raspberry Pi dan kemudian digunakan untuk beberapa kepentingan<br>\r\n', '24-09-18', 'Seminar_IoT_Pengenalan_IoT_menggunakan_Raspberry_Pi_Admin001.jpg'),
(3, 'Admin001', 'EXPO UKM INTERMEDIA 2017', 'Expo UKM Intermedia 2017, kegiatan Expo ini dilaksanakan pada hari Selasa, 26 Oktober 2017 yang merupakan salah satu acara atau agenda pada kegiatan PPM 2017. Expo ini di ikuti oleh semua UKM yang ada di STIMIK AMIKOM PURWOKERTO. Tak luput UKM INTERMEDIA  yang juga ikut membuka stand Expo bagi para mahasiswa baru tahun 2017, dengan mengenalkan berbagai macam projek di divisi keimuan yaitu ada projek pemprograman, multimedia, dan juga networking support.<br>\r\n\r\nExpo UKM Intermedia 2017, Mahasiwa baru sangat antusis ketika masuk ke Stand UKM INTERMEDIA ini dan sangat fokus ketika mendengarkan penjelasan dari CREW INTERMEDIA, mulai dari pengenalan INTERMEDIA secara umum, kemudian pengenalan dvisi keilmuan, lalu dijelaskan juga mengenai kegiatan yang ada di UKM INTERMEDIA Prestasi dan juga Media Pathner UKM INTERMEDIA.', '24-09-18', 'EXPO_UKM_INTERMEDIA_2017_Admin001.jpg'),
(4, 'Admin001', 'Pelatihan Install Ulang Windows 10', 'Hai kawan-kawan!!!\r\nAda kabar gembira loh dari kami UKM INTERMEDIA akan mengadakan Pelatihan Install Ulang Windows 10.\r\nAyok bagi teman-teman yang belum bisa nginstall ulang sendiri bisa ikutan yuuk.<br>\r\n<br>\r\n Hari & Tanggal : Minggu, 29 Oktober 2017<br>\r\n Tempat : Ruang 3.9, Lantai 3 STMIK Amikom Purwokerto.<br>\r\n Waktu : pukul 09.00 WIB.<br>\r\n Harga Pendaftaran : 25k, On the spot 30k khusus tgl 29 Oktober 2017.<br>\r\n Cara pendaftaran : Kamu bisa daftar langsung ke kontak person yang telah disediakan.<br>\r\n Fasilitas : ilmu, snack, dan sertifikat.<br>\r\nAyo... Jangan kelamaan mikir karna kuota terbatas loh... <br>\r\nYuk pastiin kamu kosongin jadwal kamu untuk ikut kegiatan ini. Diharapkan peserta membawa laptop dan flashdisk (kapasitas minimal 8GB) masing-masing. <br>\r\n\r\n#DIBUKA UNTUK UMUM# <br>\r\n<br>\r\n ? For more information :<br>\r\nMaida : 085878590903<br>\r\nListya : 085647372320<br>', '24-09-18', 'Pelatihan_Install_Ulang_Windows_10_Admin001.jpg'),
(5, 'Admin001', 'Seminar Game Intermedia 2017', 'Hai kawan-kawan!!!<br>\r\nUKM INTERMEDIA akan mengadakan Seminar & Workshop Mobile Game For Android.<br>\r\nAyok bagi teman-teman yang penasaran gimana sih caranya buat game di android bisa daftar untuk mengikuti acara ini ayok...!!!<br>\r\n<br>\r\n Pembicara : Iki Mazadi (CO-FOUNDER Gobaksodor Interactive & LABSG Academy)<br>\r\n<br>\r\n Hari & Tanggal : Minggu, 12 November 2017<br>\r\n<br>\r\n Tempat : Aula di lantai 1 STMIK Amikom Purwokerto <br>\r\n<br>\r\n Waktu : pukul 09.00 WIB - selesai.<br>\r\n<br>\r\n Harga Pendaftaran :<br>\r\n> Seminar 30k (ots 35k)<br>\r\n> Seminar + Workshop 55k (ots 60k)<br>\r\n<br>\r\n Fasilitas :<br>\r\n> Seminar: sticker, sertifikat, snack, knowledge.<br>\r\n> + Workshop: makan siang, modul, master file.<br>\r\n<br>\r\n Cara pendaftaran :<br>\r\n> Offline: Lobby Amikom Purwokerto (6 - 12 Nov 2017)<br>\r\n> Online: s.id/SeminarGameIntermedia , transfer : BRI 007401046082500 a.n Rizky Maida Kartika<br>\r\n<br>\r\nAyok jangan sampai kehabisan karena Kuota Terbatas!<br>\r\n<br>\r\n#DIBUKA UNTUK UMUM# <br>\r\n<br>\r\n ? For more information :<br>\r\nAndru : 082137696355<br>\r\nSherlina : 082144249706<br>', '24-09-18', 'Seminar_Game_Intermedia_2017_Admin001.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `idJabatan` int(2) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`idJabatan`, `nama_jabatan`, `keterangan`) VALUES
(1, 'Koordinator', 'kie wong sok penting'),
(3, 'Ketua', 'ndase organisasi hehe'),
(4, 'Wakil Ketua', 'patute lah'),
(5, 'Anggota', 'melas nemen langka anggotane :('),
(7, 'Bendahara', 'sing ngurusi duid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `idJurusan` int(2) NOT NULL,
  `nama_jurusan` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`idJurusan`, `nama_jurusan`, `keterangan`) VALUES
(1, 'Teknik Informatika', 'isine lanang cuk bangke'),
(2, 'Sistem Informasi', 'jurusan management nang komputer isine akeh wadone hehe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mediapartner`
--

CREATE TABLE `mediapartner` (
  `idPartner` int(2) NOT NULL,
  `idUser` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `keterangan` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mediapartner`
--

INSERT INTO `mediapartner` (`idPartner`, `idUser`, `nama`, `alamat`, `email`, `nohp`, `keterangan`, `logo`) VALUES
(3, 'Admin001', 'Mugi (Microsoft Group Indonesia) Purwokerto', 'Jl. SMP 5 Karangklesem Purwokerto\r\n53144', 'mugi.purwokerto@live.com', '081290156363', 'Sering kerja sama dalam hal event teknologi', 'Mugi_(Microsoft_Group_Indonesia)_Purwokerto_Admin001.png'),
(4, 'Admin001', 'Biznet', 'Jl. Overste Isdiman No.26, Jatiwinangun, Purwokerto Lor, Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53114', 'home_care@biznetnetworks.com', '02817772499', 'Sering menjadi sponsor acara', 'Biznet_Admin001.png'),
(5, 'Admin001', 'Kaskus', 'Jl. BAI Raya No.2 a, Arcawinangun, Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53113', 'ada@dad.com', '00000000', 'Sering buat acara bareng', 'Kaskus_Admin001.png'),
(6, 'Admin001', 'Puskomedia', 'Jl. Prapatan Warureja No. 8, Margasari,\r\nSidareja, Cilacap – Jawa Tengah 53261', 'info@puskomedia.id', '08112885440', 'Sponsor kegiatan iitf 2018', 'Puskomedia_Admin001.png'),
(7, 'Admin001', 'AMPU Studio', 'Gedung STMIK AMIKOM Purwokerto Lt.3', 'info@ampustudio.com', '081914969166', 'Sering minta bantuan permasalahan perlengkapan dokumentasi', 'AMPU_Studio_Admin001.png'),
(8, 'Admin001', 'DPM ', 'Iain Purwokerto', 'kosong@belum.ada', '0000000000', 'Sering ikut nimbrung acara Komunitas ini. ', 'DPM__Admin001.jpeg'),
(9, 'Admin001', 'Amikom FM', 'Gedung STMIK AMIKOM Purwokerto Lt.2', 'kosong@belum.ada', '085600870878', 'Sering broadcast event / acara intermedia \r\nMedia Partner utama', 'Amikom_FM_Admin001.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `idDaftar` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(12) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` text NOT NULL,
  `idJurusan` int(2) NOT NULL,
  `idDivisi` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `cv` text NOT NULL,
  `foto` text NOT NULL,
  `nilai` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pendaftaran`
--

CREATE TABLE `status_pendaftaran` (
  `id` int(1) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_buka` date NOT NULL,
  `tgl_tutup` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id` int(2) NOT NULL,
  `informasi` text NOT NULL,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `motto` text NOT NULL,
  `tujuan` text NOT NULL,
  `asas` text NOT NULL,
  `idAnggota` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id`, `informasi`, `sejarah`, `visi`, `misi`, `motto`, `tujuan`, `asas`, `idAnggota`) VALUES
(1, 'Unit kegiatan mahasiswa yang berdiri sejak 17 Desember 2011 dan didirikan di Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) AMIKOM Purwokerto. Intermedia merupakan suatu wadah untuk para mahasiswa sebagai tempat menggali potensi diri baik dalam hardskill maupun softskill dari mahasiswa itu sendiri.', 'Unit kegiatan mahasiswa yang berdiri sejak 17 Desember 2011 dan didirikan di Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) AMIKOM Purwokerto. Intermedia merupakan suatu wadah untuk para mahasiswa sebagai tempat menggali potensi diri baik dalam hardskill maupun softskill dari mahasiswa itu sendiri.', 'Mencerdaskan Kehidupan Bangsa Dalam Dunia Teknologi.', 'Meningkatkan pengetahuan dan kemampuan anggota UKM INTERMEDIA dalam bidang IT \r\n<br>Menyalurkan kemampuan anggota UKM INTERMEDIA kepada mahasiswa dan masyarakat umum.', 'we are family', '1. Mencerdaskan Kehidupan Bangsa Dalam Dunia Teknologi.<br>\r\n2. Meningkatkan pengetahuan dan kemampuan anggota UKM INTERMEDIA dalam bidang IT, Menyalurkan kemampuan anggota UKM INTERMEDIA kepada mahasiswa dan masyarakat umum.', 'Cinta, Setia, Tanggung Jawab', 'PR001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `idUser` varchar(12) NOT NULL,
  `idAnggota` varchar(12) NOT NULL,
  `password` text NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`idUser`, `idAnggota`, `password`, `last_login`) VALUES
('Admin001', 'PR001', 'rochman25', '2018-08-20'),
('user002', 'MM002', 'test', '0000-00-00'),
('user003', 'PR003', 'astaghfirullah', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`idAchievement`),
  ADD KEY `fk_achievementUser` (`idUser`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`idAnggota`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idBerita`),
  ADD KEY `fk_beritaUser` (`idUser`);

--
-- Indeks untuk tabel `detail_divisi`
--
ALTER TABLE `detail_divisi`
  ADD PRIMARY KEY (`idDetail`),
  ADD KEY `fk_detailDivisi` (`idDivisi`),
  ADD KEY `fk_divisiAnggota` (`idAnggota`);

--
-- Indeks untuk tabel `detail_jabatan`
--
ALTER TABLE `detail_jabatan`
  ADD PRIMARY KEY (`idDetail`),
  ADD KEY `fk_detailJabatan` (`idJabatan`),
  ADD KEY `fk_jabatanAnggota` (`idAnggota`);

--
-- Indeks untuk tabel `detail_jurusan`
--
ALTER TABLE `detail_jurusan`
  ADD PRIMARY KEY (`idDetail`),
  ADD KEY `fk_jurusanAnggota` (`idJurusan`),
  ADD KEY `fk_AnggotaJurusan` (`idAnggota`);

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`idDivisi`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idEvent`),
  ADD KEY `fk_eventUser` (`idUser`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`idJabatan`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`idJurusan`);

--
-- Indeks untuk tabel `mediapartner`
--
ALTER TABLE `mediapartner`
  ADD PRIMARY KEY (`idPartner`),
  ADD KEY `fk_mp_user` (`idUser`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`idDaftar`),
  ADD KEY `FK_JurusanDaftarMaba` (`idJurusan`),
  ADD KEY `fk_divisiPendaftar` (`idDivisi`);

--
-- Indeks untuk tabel `status_pendaftaran`
--
ALTER TABLE `status_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ttgAnggota` (`idAnggota`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `fk_UserAnggota` (`idAnggota`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `achievement`
--
ALTER TABLE `achievement`
  MODIFY `idAchievement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `idBerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_divisi`
--
ALTER TABLE `detail_divisi`
  MODIFY `idDetail` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `detail_jabatan`
--
ALTER TABLE `detail_jabatan`
  MODIFY `idDetail` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `detail_jurusan`
--
ALTER TABLE `detail_jurusan`
  MODIFY `idDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `idDivisi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `idEvent` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `idJabatan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `idJurusan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mediapartner`
--
ALTER TABLE `mediapartner`
  MODIFY `idPartner` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `status_pendaftaran`
--
ALTER TABLE `status_pendaftaran`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `achievement`
--
ALTER TABLE `achievement`
  ADD CONSTRAINT `fk_achievementUser` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `fk_beritaUser` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Ketidakleluasaan untuk tabel `detail_divisi`
--
ALTER TABLE `detail_divisi`
  ADD CONSTRAINT `fk_detailDivisi` FOREIGN KEY (`idDivisi`) REFERENCES `divisi` (`idDivisi`),
  ADD CONSTRAINT `fk_divisiAnggota` FOREIGN KEY (`idAnggota`) REFERENCES `anggota` (`idAnggota`);

--
-- Ketidakleluasaan untuk tabel `detail_jabatan`
--
ALTER TABLE `detail_jabatan`
  ADD CONSTRAINT `fk_detailJabatan` FOREIGN KEY (`idJabatan`) REFERENCES `jabatan` (`idJabatan`),
  ADD CONSTRAINT `fk_jabatanAnggota` FOREIGN KEY (`idAnggota`) REFERENCES `anggota` (`idAnggota`);

--
-- Ketidakleluasaan untuk tabel `detail_jurusan`
--
ALTER TABLE `detail_jurusan`
  ADD CONSTRAINT `fk_AnggotaJurusan` FOREIGN KEY (`idAnggota`) REFERENCES `anggota` (`idAnggota`),
  ADD CONSTRAINT `fk_jurusanAnggota` FOREIGN KEY (`idJurusan`) REFERENCES `jurusan` (`idJurusan`);

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_eventUser` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Ketidakleluasaan untuk tabel `mediapartner`
--
ALTER TABLE `mediapartner`
  ADD CONSTRAINT `fk_mp_user` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Ketidakleluasaan untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `FK_JurusanDaftarMaba` FOREIGN KEY (`idJurusan`) REFERENCES `jurusan` (`idJurusan`),
  ADD CONSTRAINT `fk_divisiPendaftar` FOREIGN KEY (`idDivisi`) REFERENCES `divisi` (`idDivisi`);

--
-- Ketidakleluasaan untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD CONSTRAINT `fk_ttgAnggota` FOREIGN KEY (`idAnggota`) REFERENCES `anggota` (`idAnggota`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_UserAnggota` FOREIGN KEY (`idAnggota`) REFERENCES `anggota` (`idAnggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
