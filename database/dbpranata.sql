-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mei 2017 pada 17.40
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpranata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `album_foto`
--

CREATE TABLE `album_foto` (
  `id` int(11) NOT NULL,
  `nama_album` int(200) NOT NULL,
  `sampul_album` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `author` varchar(20) NOT NULL,
  `img_header` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `slug`, `date`, `time`, `author`, `img_header`, `content`, `category`, `status`) VALUES
(1, 'Misi Budaya PI Ke Amerika Serikat', 'misi-budaya-pi-ke-amerika-serikat', '2017-05-15', '14:58:54', 'Administrator PI', '808c9d8afd5b5ab5285f6a847a3e2214.jpg', '<p style=\"text-align: justify;\">Dr. Nazamddin, Pembantu Rektor IV bidang Kerjasama melepas tim Tari Aceh-Pusat Seni Unsyiah 2015 yang diberangkatkan ke Amerika Serikat pada hari Rabu tanggal 13 Februari 2015. Dalam kunjungannya nanti, tim yang dipimpin langsung oleh Ari Pahlawi, dosen sekaligus koordinator bidang pengembangan program Pusat Seni Unsyiah, akan melaksanakan serangkaian agenda kegiatan pertunjukan seni, workshop, dan simposium, yang merupakan bahagian dari event budaya &ldquo;Muslim Women\'s Voice&rdquo; yang diselenggarakan oleh Center for the Arts (Pusat Seni) Wesleyan University. Selain di Wesleyan University, tim juga akan melaksanakan kegiatan serupa di 3 kampus lainnya di Boston dan Worcester, termasuk Asia Society di New York.<br /><br />Dalam kegiatan pelepasan yang dilaksanakan di Rektorat Unsyiah, Dr. Nazamuddin berpesan agar selain menjaga stamina dan kesehatannya, tim juga diminta agar dapat melaksanakan misi kebudayaan ini dengan sebaik-baiknya. Kegiatan yang dibiayai langsung oleh pemerintah negara bagian dan sejumlah lembaga swasta di Amerika serikat ini, di antaranya: Asia Society dan Doris Foundation for Islamic Arts, bernilai sekitar 30.000 US Dollars yang dipergunakan untuk biaya pembuatan visa, penerbangan domestik dan luar negeri, pengadaan alat dan kelengkapan pentas seni, uang saku dan lainya.<br /><br />Melalui misi budaya ini, diharapkan akan dapat dijajaki peluang kerjasama baru antara Unsyiah dan lembaga-lembaga di Amerika tersebut, khususnya bidang kebudayaan dan seni, serta pengembangan bidang penelitian dan kegiatan akademik lainya; termasuk dukungan dalam persiapan pembentukan Fakultas Seni dan Humaniora di lingkungan Unsyiah yang sudah diinisiasi oleh tim Unsyiah sejak beberapa tahun lalu.</p>', 'news', 1),
(2, 'MOU Antara Perpustakaan PI dan Perpurtakaan Nasinal RI Sudah di Implementasikan', 'mou-antara-perpustakaan-pi-dan-perpurtakaan-nasinal-ri-sudah-di-implementasikan', '2017-05-15', '14:19:15', 'Administrator PI', '6aea7ef58e51e027ff59ddd5d6a95aa6.jpg', '<p style=\"text-align: justify;\">Memasuki April 2015 ini, Perpustakaan Unsyiah dan Perpustakaan Nasional RI telah merealisasikan Nota Kesepahaman (MOU) yang ditandatangani pada 10 November 2014 yang lalu dalam bentuk beberapa kegiatan.</p>\r\n<p style=\"text-align: justify;\">Dalam rilis berita yang dikirim oleh Perpustakaan Unsyiah disebutkan bahwa kegiatan tersebut adalah berupa Pendidikan dan Pelatihan bagi Staf dan Pustakawan Unsyiah di Pusdiklat Perpusnas RI di Jakarta. Pada 9 Maret yang lalu 2 staf Perpustakaan Unsyiah, yaitu ibu Mastial SE dan bapak Khaizal, ST telah memulai Diklat, yaitu masing-masing Diklat Calon Pustakawan Tingkat Ahli (CPTA) selama 3 bulan dan Pengelolaan Teknis Perpustakaan selama 10 hari. Selain itu, Pusdiklat Perpusnas sudah mengkonfirmasikan 1 orang Pustakawan Unsyiah lainnya, yaitu ibu Charlis Siana Rosita, S.Sos dipanggil mengikuti Diklat Training of Trainer (TOT) Perpustakaan pada 30 Maret 2015 ini. Biaya pelatihan dan akomodasi semua peserta Diklat diatas ditanggung sepenuhnya oleh Perpusnas RI.</p>\r\n<p style=\"text-align: justify;\">Dr. Taufiq Abdul Gani, M.Eng.Sc sebagai Kepala Perpustakaan Unsyiah sangat gembira karena untuk mendapatkan 3 staf Perpustakaan Perguruan Tinggi yang dipanggil Perpusnas dalam satu tahun adalah hal yang sangat istimewa. Sebelumnya agak sulit bagi Unsyiah mendapat panggilan, kalau ada pun cuma 1 orang, mengingat Perpusnas harus menilai calon peserta dari seluruh Indonesia, bukan hanya dari perpustakaan perguruan tinggi, tapi juga perpustakaan wilayah propinsi dan kabupaten-kota, perpustakaan kementerian dan lembaga negara tersebar di seluruh Indonesia.</p>\r\n<p style=\"text-align: justify;\">Dr. Taufiq menambahkan pencapain ini sangat dipengaruhi dan tidak lepas oleh keyakinan Perpusnas RI terhadap komitmen Pimpinan Unsyiah dan UPT. Perpustakaan dalam pengembangan Perpustakaan dalam beberapa tahun terakhir ini. Sebelum MOU ditanda-tangani, pada awal tahun 2013 Perpusnas RI sudah mengumumkan akreditasi terhadap mutu Perpustakaan Unsyiah dengan hasil A. Beberapa kegiatan bersama lainnya adalah Pameran Koleksi Langka, Workshop Penggunaan E-Resource Perpusnas, dan yang terakhir adalah Konferensi Perpustakaan Digital Indonesia (KPDI)-7 di Banda Aceh, pada bulan November 2014 yang tercatat dalam sejarah KPDI sebagai yang terbanyak menerima Paper dan juga terbanyak dihadiri oleh peserta (500 orang).</p>\r\n<p style=\"text-align: justify;\">Pembantu Rektor Bidang Kerjasama Dr. Nazamuddin, MA sangat gembira karena beberapa kegiatan kerja sama Perpustakaan Unsyiah dapat diwujudkan dengan berbagai pihak selama ini seperti penerbit Springer, IEEE, ScienceDirect (Elsevier) dan lembaga lainnya. Khusus dengan Perpusnas RI yang berfokus pada pengembangan kapasitas Pustakawan, Dr. Nazamuddin menyebutkan hal ini sangat penting karena berapapun investasi yang kita berikan untuk memperbaiki koleksi dan infrastruktur, tetapi tidak diimbangi dengan peningkatan kompetensi pustakawan, investasi ini akan percuma dan tidak maksimal manfaatnya. The man behind the gun tetap sangat penting.</p>\r\n<p style=\"text-align: justify;\">Dr. Nazamuddin mengharapkan Perpustakaan Unsyiah tidak boleh puas dengan akreditasi A yang sudah didapat, tapi harus berupaya meningkatkan untuk mendapatkan akreditasi atau sertifikasi dari Lembaga Internasional, misalnya dari ISO 9001:2008. Hal ini sejalan dengan upaya Unsyiah untuk meningkatkan daya saing di level internasional.</p>\r\n<p>Kontak Person:</p>\r\n<p>Dr Taufiq Abdul Gani, M.Eng.Sc<br />Ka. UPT. Perpustakaan Unsyiah</p>\r\n<p>topgan@unsyiah.ac.id<br />HP 082160543236</p>\r\n<p style=\"color: #4b4b4b; font-size: 16px; font-family: OpenSansRegular, Arial, Helvetica, sans-serif; text-align: justify;\"><strong>&nbsp;</strong></p>', 'news', 1),
(3, 'Oberlin Shansi Visiting Scholars and Oberlin Fellowship Program', 'oberlin-shansi-visiting-scholars-and-oberlin-fellowship-program', '2017-05-15', '14:21:42', 'Administrator PI', '4e7fb4f6e47d7870acb1e853c2067ce0.jpg', '<p style=\"text-align: justify;\">The Oberlin Shansi Visiting Scholars Program, begun in 2005, is a joint cooperation between the Oberlin Shansi Institution in the United States and Syiah Kuala University - Aceh. This program aims to bring faculty and staff from Syiah Kuala University to Oberlin for one semester either Fall or Spring academic semester every year. The program provides scholars with opportunities to build networking with Oberlin professors, do research, teach, and experience the academic through interaction with faculty, staff and students in the host institution. Scholars can also work as volunteers with local community organizations. Conversely, Oberlin College sends fellows to Syiah Kuala University to do almost similar activities. They are based at Syiah Kuala University Language Centre where they teach English to faculty and students of Syiah Kuala University. They also participate in cultural talks and engage with academic and social life of the community around campus.</p>\r\n<p style=\"text-align: justify;\">Currently there are 21 alumni of Oberlin Shansi scholar Program at Syiah Kuala University. They are now promoting what they learned and experienced from Oberlin to their colleagues at various faculties and departments. They recently established Oberlin Shansi Alumni Forum through which they hold academic and social events. They also assist the university in the recruitment and selection visiting scholars to Oberlin. The next Oberlin Shansi visiting scholars program will start in the Fall 2015 and Spring 2016. Two faculty members of Syiah Kuala University will be selected and join the program. For further information, please contact Faisal Mustafa at faisal.mustafa@unsyiah.ac.id.</p>', 'news', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `config`
--

CREATE TABLE `config` (
  `id_config` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `config`
--

INSERT INTO `config` (`id_config`, `title`, `content`) VALUES
(1, 'logo header', 'http://localhost/web/assets/web/images/logo/logo.png'),
(2, 'title_home', 'STMIK Pranata Indonesia | Link and Match'),
(3, 'deskripsi', 'STMIK Pranata Indonesia'),
(4, 'keyword', 'STMIK Pranata Indonesia'),
(5, 'teks_kontak', 'Jl. Cut Mutia Raya No. 28, Bekasi Timur, Jawa Barat, 17133'),
(6, 'footer', 'Hak Cipta &copy; <?php echo date(\"Y\"); ?> . <a href=\"#\">STMIK Pranata Indonesia</a>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dosen`
--

CREATE TABLE `data_dosen` (
  `id` int(11) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `profile` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `judul_file` varchar(100) NOT NULL,
  `file` varchar(150) NOT NULL,
  `status` int(2) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `title_img` varchar(50) NOT NULL,
  `image_url` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `link_external`
--

CREATE TABLE `link_external` (
  `id` int(11) NOT NULL,
  `nama_link` varchar(100) NOT NULL,
  `url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(10) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `menu_url` varchar(100) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `content_id` varchar(200) NOT NULL,
  `view_type` varchar(150) NOT NULL,
  `urutan` int(4) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `content_id`, `view_type`, `urutan`, `status`) VALUES
(1, 'Tentang', 'tentang', 0, 'javascript:void(0)', '4', 0, 1),
(2, 'Sejarah', 'sejarah', 1, 'sejarah', '4', 0, 1),
(3, 'Identitas', 'identitas', 1, 'identitas', '4', 0, 1),
(4, 'Visi dan Misi', 'visi-dan-misi', 1, 'visi-dan-misi', '4', 0, 1),
(5, 'Struktur Organisasi', 'struktur-organisasi', 1, 'struktur-organisasi', '4', 0, 1),
(6, 'Program Studi', 'program-studi', 0, 'javascript:void(0)', '4', 0, 1),
(7, 'Komputer Akuntansi', 'komputer-akuntansi', 6, 'komputer-akuntansi', '4', 0, 1),
(8, 'Manajemen Informatika', 'manajemen-informatika', 6, 'manajemen-informatika', '4', 0, 1),
(9, 'Sistem Informasi', 'sistem-informasi', 6, 'sistem-informasi', '4', 0, 1),
(10, 'Teknik Informatika', 'teknik-informatika', 6, 'teknik-informatika', '4', 0, 1),
(11, 'PMB', 'pmb', 0, 'javascript:void(0)', '4', 0, 1),
(12, 'Syarat Pendaftaran', 'syarat-pendaftaran', 11, 'syarat-pendaftaran', '4', 0, 1),
(13, 'Program Beasiswa', 'program-beasiswa', 11, 'program-beasiswa', '4', 0, 1),
(14, 'Info PI', 'info-pi', 0, 'javascript:void(0)', '4', 0, 1),
(15, 'Kalender Akademik', 'kalender-akademik', 14, 'kalender-akademik', '4', 0, 1),
(16, 'Pusat Administrasi', 'pusat-administrasi', 14, 'pusat-administrasi', '4', 0, 1),
(17, 'Dosen dan Staff', 'dosen-dan-staff', 14, 'dosen-dan-staff', '4', 0, 1),
(18, 'Kemahasiswaan', 'kemahasiswaan', 14, 'kemahasiswaan', '4', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `status`) VALUES
(1, 'Sejarah', 'sejarah', '<p style=\"text-align: justify;\">Universitas Syiah Kuala (Unsyiah) adalah perguruan tinggi negeri tertua di Aceh. Berdiri pada tanggal<em>2 September 1961</em> dengan Surat Keputusan Menteri Pendidikan Tinggi dan Ilmu Pengetahuan Nomor 11 tahun 1961, tanggal 21 Juli 1961. Pendirian Unsyiah dikukuhkan dengan Keputusan Presiden Republik Indonesia, nomor 161 tahun 1962, tanggal 24 April 1962 di Kopelma Darussalam, Banda Aceh. Unsyiah berkedudukan di Ibukota Provinsi Aceh dengan kampus utama terletak di Kota Pelajar Mahasiswa (Kopelma) Darussalam, Banda Aceh. Saat ini, Unsyiah memiliki lebih dari 30.000 orang mahasiswa yang menuntut ilmu di 12 Fakultas dan Program Paska Sarjana.</p>\r\n<p style=\"text-align: justify;\">Sebagai salah satu institusi pendidikan tinggi, Unsyiah memiliki fungsi yang sangat strategis dalam meningkatkan kualitas sumber daya manusia, baik untuk kebutuhan lokal, nasional maupun regional. Sebagai universitas <em>Jantung Hati Rakyat Aceh</em> yang mengutamakan mutu, Unsyiah mengintegrasikan nilai-nilai universal, nasional, dan lokal untuk melahirkan sumberdaya manusia yang memiliki keselarasan dalam antara IPTEK dan IMTAQ. Keseimbangan diantara keduanya menjadi komponen utama dalam menghasilkan sumber daya manusia yang berkualitas, berbudi pekerti, menjunjung tinggi etika, estetika serta berakhlak mulia.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n<p style=\"text-align: justify;\">Diawali dengan pembentukan Yayasan Dana Kesejahteraan Aceh (YDKA) pada tanggal 21 April 1958 yang dibentuk untuk mengadakan pembangunan dalam bidang rohani dan jasmani guna mewujudkan kesejahteraan dan kebahagiaan bagi masyarakat. YDKA menyusun program antara lain (a) Mendirikan perkampungan pelajar/ mahasiswa di ibukota provinsi dan setiap kota kabupaten dalam wilayah Nanggroe Aceh Darussalam, (b) Mengusahakan berdirinya satu Universitas untuk daerah Nanggroe Aceh Darussalam. Selaras dengan ide tersebut, tanggal 29 Juni 1958, Penguasa Perang Daerah Istimewa Aceh membentuk KOMISI PERENCANA DAN PENCIPTA KOTA PELAJAR/MAHASISWA. Komisi yang dipandang sebagai saudara kandung YDKA ini mempunyai tugas sebagai komisi pencipta, badan pemikir, dan inspirasi bagi YDKA, sehingga komisi ini dipandang sebagai modal utama pembangunan perkampungan pelajar/mahasiswa.</p>', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suara_rektorat`
--

CREATE TABLE `suara_rektorat` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni_alumni`
--

CREATE TABLE `testimoni_alumni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`) VALUES
(1, 'Administrator PI', 'admin', '23353ae93a992075419250ed11e0ae34ce22c239', 'admin@pranataindonesia.ac.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_foto`
--
ALTER TABLE `album_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id_config`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_external`
--
ALTER TABLE `link_external`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suara_rektorat`
--
ALTER TABLE `suara_rektorat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni_alumni`
--
ALTER TABLE `testimoni_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_foto`
--
ALTER TABLE `album_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_dosen`
--
ALTER TABLE `data_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `link_external`
--
ALTER TABLE `link_external`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suara_rektorat`
--
ALTER TABLE `suara_rektorat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testimoni_alumni`
--
ALTER TABLE `testimoni_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
