-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2016 at 01:16 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konsultasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'baru', 'baru', '');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(4) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `gambar`, `text`, `tanggal`) VALUES
(3, 'Beragam Manfaat Daun Sirsak', './artikel/images.jpg', 'Sirsak Sebagai salah satu jenis tanaman herbal, daun sirsak bisa Anda jadikan sebagai pengobatan herbal dengan mengkonsumsinya secara rutin. Tanaman herbal yang diolah dengan benar dan dikonsumsi secara cukup sesuai dengan anjuran medis, tidak akan menimbulkan dampak negative terhadap tubuh. Dampak yang mungkin sepele bagi Anda, namun bisa berakibat buruk jika Anda biarkan dan diterima oleh tubuh terus menerus seiring dengan konsumsi obat kimia yang berlebihan. Anda mungkin bertanya-tanya apa saja yang bisa diperoleh dari daun sirsak. Berikut adalah beberapa manfaat daun sirsak untuk kesehatan.\r\n\r\n.Kanker\r\n.Wasir\r\n.Kolesterol\r\n.Menghilangkan jerawat\r\n\r\nDari beberapa manfaat daun sirsak untuk kesehatan yang sudah disebut di atas, barangkali ada manfaat yang sedang Anda cari dan memang Anda butuhkan. Ada manfaat daun sirsak untuk kesehatan dan kecantikan yang keduanya memang memberikan pilihan menarik bagi orang yang ingin sehat sekaligus cantik. Karena di balik tubuh yang sehat dan penampilan yang prima ada jiwa yang bersinar. Dengan tubuh yang sehat pula Anda bisa lebih percaya diri untuk berinteraksi dengan orang lain.\r\n', '2016-07-20'),
(4, 'Tips Mengobati Bronkitis denga', './artikel/Capture.JPG', ' Bronkitis adalah infeksi pada saluran udara utama dari paru-paru atau bronkus,  salah satu masalah yang berhubungan dengan paru-paru dan menyebabkan terjadinya peradangan inflamasi pada saluran pernapasan.\r\n\r\nSaat masih dalam tahap tidak terlalu parah ternyata bronkitis bisa diobati dengan makanan alami yang sangat sederhana. Salah satunya adalah dengan makan buah pisang. Sangat sederhana sekali, cukup mencampur pisang, madu dua sendok makan, dan air secukupnya. Setelah itu minumlah ramuan tersebut. 1. Bawang putih adalah obat alami yang baik untuk mengobati bronkitis. Sebabnya bawang putih memiliki sifat antibiotik alami serta mengandung sifat anti virus.\r\n\r\n2. Minum air kunyit juga dipercaya bermanfaat untuk mengobati bronkitis karena kunyit mengandung sifat anti inflamasi yang membantu dalam menyingkirkan kelebihan lendir.\r\n\r\n3. Vitamin C sangat penting untuk memperkuat sistem kekebalan tubuh. Sehingga minum air jeruk bermanfaat untuk menyehatkan tubuh dari serangan penyakit bronkitis.\r\n\r\n4. Jahe juga mengandung sifat anti inflamasi. Minum air jahe sebanyak 2-3 kali dalam sehari bermanfaat untuk menenangkan tenggorokan Anda.\r\n\r\n5. Lendir yang ada di membran bronkus dapat dibersihkan dengan berkumur menggunakan air garam hangat. Sehingga berkumur air garam hangat berkhasiat untuk sembuhkan bronkitis.\r\n\r\n6. Madu dapat memberikan efek menenangkan di tenggorokan Anda karena sifat anti bakteri yang terkandung di dalamnya. Makan madu juga berkhasiat untuk memperkuat sistem kekebalan tubuh.', '2016-07-14'),
(5, '6 manfaat singkong', './artikel/singkong.png', 'Walaupun demikian, beberapa orang masih beranggapan bahwa singkong merupakan makanan kampung yang tidak mempunyai kandungan gizi. Padahal jika diteliti lebih detail lagi, singkong termasuk dalam kelompok makanan bernutrisi tinggi. Sebaiknya, jangan menyepelekan singkong sebelum mengetahui kandungan nutrisi beserta manfaat yang dimilikinya. Carakhasiatmanfaat.com mengungkapkan bahwa di dalam singkong terdapat kandungan nutrisi berupa karbohidrat, protein, serat, asam folat, vitamin A, vitamin B9, vitamin C, vitamin E, vitamin K, niacin, pyridoxine, thiamin, riboflavin, mangan, kalsium, zat besi, kalium, magnesium, fosfor, sodium dan zinc. [1]\r\n\r\nSetelah mengetahui kandungan nutrisi yang terdapat di dalam singkong, berikutnya juga akan diberikan informasi mengenai manfaat singkong bagi kesehatan tubuh. Inilah sejumlah manfaat singkong bagi kesehatan tubuh.\r\n6 Manfaat Singkong\r\n\r\n    Sumber Energi\r\n    Seperti yang sudah disebutkan sebelumnya, singkong mempunyai zat pati 2 kali lebih banyak dari kentang sehingga menyadikannya sebagai makanan penambah energi berkat adanya sumber karbohidrat kompleks.’\r\n    Memperlancar Sistem Pencernaan\r\n    Di dalam singkong juga terdapat kandungan serat yang berperan untuk memperlancar sistem pencernaan, sehingga organ-organ pencernaan menjadi lebih sehat dan terhindar dari masalah gangguan pencernaan seperti susah buang air besar, wasir, perut kembung, sembelit dan lain sebagainya.\r\n    Baik untuk Diet Rendah Lemak\r\n    Walaupun singkong mempunyai kandungan karbohidrat cukup tinggi, namun singkong merupakan makanan rendah lemak dan rendah kolesterol sehingga cocok dikonsumsi oleh mereka yang sedang menjalankan diet rendah lemak. Namun, untuk menjalankan diet rendah lemak hanya disarankan untuk mengkonsumsi singkong yang sudah direbus.\r\n    Mencegah dan Mengatasi Anemia\r\n    Kandungan komponen mineral, termasuk zat besi yang ada di dalam singkong berperan untuk membantu proses pembentukan sel-sel darah merah sehingga tubuh terhindar dari masalah anemia atau kurang darah.\r\n    Baik Dikonsumsi Oleh Penderita Diabetes\r\n    Para penderita diabetes dianjurkan untuk mengkonsumsi singkong daripada mengkonsumsi nasi. Hal ini disebabkan karena singkong tidak memiliki kandungan kadar gula sehingga aman dikonsumsi para penderita diabetes (penyakit gula darah).\r\n    Meningkatkan Nafsu Makan\r\n    Singkong mempunyai kandungan nutrisi dan karbohidrat kompleks yang berperan untuk meningkatkan nafsu makan.\r\n\r\nTerlepas dari itu semua, singkong juga mempunyai efek samping jika dikonsumsi secara berlebihan. Berdasarkan informasi yang diambil dari manfaat.co.id, di dalam singkong terdapat akar alami yang beracun cyanogenic, metil linamarin dan mengandung senyawa glikosida linamarin. Kandungan racun tersebut dapat membuat orang yang mengkonsumsinya secara berlebihan mengalami keracunan sianida yang ditandai dengan gejala pusing, mual, muntah, sakit perut, sakit kepala hingga kematian. Kandungan racun tersebut lebih banyak ditemukan pada bagian kulit luarnya. Untuk menghilangkan racun tersebut, pastikan telah mengupas kulitnya hingga bersih dan rebuslah di dalam air yang berisi garam dan cuka. [2]\r\n\r\nHal lainnya yang juga harus diperhatikan adalah pastikan untuk memilih atau membeli singkong dengan kondisi yang baik. Singkong berkualitas baik mempunyai warna putih bersih ketika dikupas. Sebaiknya, buanglah singkong yang mempunyai warna kekuningan atau kebiruan setelah dikupas karena warna tersebut menandakan bahwa singkong sudah disimpan dalam waktu yang cukup lama sehingga tidak baik untuk dikonsumsi. Singkong yang masih segar dan baru ditandai dengan adanya tanah yang masih basah pada permukaan kulitnya', '2016-07-15'),
(7, 'Bersihkan Racun Dalam Tubuh Dengan Detox Beras', './artikel/ScreenShot_20160724222049.png', 'Gaya hidup yang tidak sehat menjadikan tubuh juga sama tak sehatnya Ladies. Ada yang bilang bahwa apa yang kita makan itulah yang akan direfleksikan oleh tubuh. Memang ada benarnya, mengonsumsi makanan cepat saji dan makanan yang tak sehat tentu akan membuat tubuh juga tak mendapatkan nutrisi yang baik. Karenanya ada metode yang dinamakan detoks.\r\nDetoks merupakan salah satu metode alami untuk pembersihan zat-zat di dalam tubuh. Hal ini terjadi secara alami dimana tubuh menetralisir dan membuang racun dari dalam. Banyak pula metode detoks yang dipilih seperti mengonsumsi jus dan beberapa cara lain. Namun pernahkah kamu mendengar bahwa beras juga bisa digunakan untuk membersihkan racun dalam tubuh?\r\nDilansir oleh boldsky.com, cara ini dipercaya bisa membersihkan usus dan pembuluh darah dan dapat menghilangkan logam berat, racun dan zat beracun lainnya terakumulasi dalam tubuh. Detoks beras juga bisa membantu menurunkan berat badan. Selain itu nyeri pada sendi-sendi tubuh juga bisa hilang dengan konsumsi rutin beras ini.\r\nKamu hanya perlu beras sesuai dengan usiamu. Jika kamu berumur 25 tahun, maka siapkan 25 sendok makan beras. Jika kamu berusia 30 tahun, maka siapkan 30 sendok makan beras. Setelah itu cuci bersih beras dan masukkan dalam mangkuk kaca. Tuangkan air panas dan diamkan selama beberapa saat sebelum menutupnya dan menyimpannya dalam lemari es semalaman.\r\nKeesokan harinya ambil satu sendok makan beras. Rebus beras tersebut dalam air selama 5 menit dan konsumsi dalam keadaan perut kosong. Setelah itu isi beras dengan air panas dan masukkan lagi dalam lemari es. Kosongkan perut selama 3 jam setelah itu kamu bisa makan dengan normal. Lakukan proses ini sampai beras habis.', '2016-07-24'),
(8, '4 Manfaat Mengagumkan Kunyit Buat Kesehatan', './artikel/kun.png', 'Kunyit merupakan salah satu rempah yang siapapun pasti mengenalnya. Kunyit juga merupakan salah satu rempah yang bisa didapatkan dengan mudah baik di pasar tradisional atau supermarket dan minimarket. Biasanya, kunyit digunakan untuk bumbu masak, untuk masker atau sebagai jamu (minuman kesehatan). Para ahli mengungkapkan bahwa kunyit mengandung berbagai nutrisi yang sangat baik dan mengagumkan buat kesehatan tubuh.\r\nMellisa Kanchanapoomi Levin, MD, seorang dermatolog asal New York bahkan mengungkapkan bahwa nutrisi pada kunyit juga bisa menyembuhkan beberapa macam penyakit dalam tubuh. Sementara itu, Susan Tucker yakni pendiri Green Beat Life sekaligus ahli kesehatan kulit mengungkapkan bahwa nutrisi pada kunyit memiliki banyak manfaat buat kesehatan serta kecantikan. Mengenai manfaat sehat kunyit, dikutip dari laman prevention.com, berikut adalah beberapa manfaat kunyit buat kesehatan tubuh.\r\n    Detoks Alami\r\n    Penelitian menemukan bahwa kunyit mengandung nutrisi dan antioksidan yang sangat baik buat kesehatan tubuh. Antioksidan ini juga dikatakan mampu menjadi detoks alami buat tubuh. Dengan minum satu cangkir minuman kunyit setiap pagi, Susan Tucker mengatakan bahwa hal ini bisa bantu seseorang mencegah risiko kanker, risiko ginjal, risiko liver dan sekaligus membantu mengeluarkan racun dalam tubuh. Jika tak suka dengan minum minuman dari kunyit, kita bisa memanfaatkan kunyit untuk bumbu masakan.\r\n    Mengobati Batuk dan Pilek (Flu)\r\n    Manfaat mengagumkan selanjutnya adalah kunyit bisa menjadi obat batuk dan pilek (flu). Nutrisi yang terkandung di dalam kunyit dipercaya bisa melawan radikal bebas dan meningkatkan sistem kekebalan tubuh. Selain itu, nutrisi pada kunyit juga dipercaya bisa menjadi penghangat tubuh yang baik dan menurunkan risiko batuk juga pilek.\r\n    Menurunkan Berat Badan\r\nSelanjutnya, nutrisi pada kunyit dikatakan bisa menurunkan berat badan dengan baik dan membakar lemak dalam tubuh dengan tepat serta cepat. Caroline Apovian, MD, seorang profesor kedokteran di pediatri di Boston University School of Medicine menyebutkan jika senyawa dalam kunyit hampir sama dengan senyawa yang ada di jahe dan bawang putih dimana senyawa ini bisa bantu menurunkan berat badan dengan baik.\r\n    Meningkatkan Kesehatan Otak\r\n Sebuah studi yang diterbitkan di Journal of Psychopharmacology menemukan bahwa kandungan nutrisi pada kunyit bisa melancarkan sistem peredaran darah dengan baik dan meningkatkan aliran darah ke otak sehingga membuat otak menjadi semakin sehat, tidak mudah lupa dan cerdas. Lebih dari itu, rutin konsumsi kunyit setiap hari ternyata juga menunda penuaan dini.\r\nWell, itulah beberapa manfaat mengejutkan dan mengagumkan kunyit buat kesehatan tubuh. Untuk kamu yang nggak suka sama kunyit, rasanya sangat sayang sekali jika kamu masih tak menyukainya. Mengingat ada banyak manfaat sehat kunyit buat kesehatan, jangan lupa buat konsumsi kunyit secara teratur dengan porsi yang tepat', '2016-07-24'),
(9, 'Jalan Kaki, Solusi Termudah & Murah Buat Mencegah ', './artikel/ScreenShot_20160724223306.png', 'Semua orang pasti tahu bahwa diabetes merupakan salah satu penyakit yang ditakuti. Kenapa ia begitu ditakuti? Diabetes merupakan salah satu penyakit mematikan juga merupakan salah satu penyakit yang akan bisa menjangkit seseorang karena adanya faktor genetik. Bahkan, diabetes memiliki risiko dua kali lipat lebih berbahaya dari sebelumnya buat mereka yang memiliki riwayat keluarga pengidap diabetes.\r\nDikutip dari laman dailymail.co.uk, penderita diabetes perlu melakukan berbagai pengobatan yang tepat agar diabetes yang diderita bisa sembuh. Penderita diabetes juga harus menjaga pola hidup paling sehat serta tepat agar diabetes yang diderita tidak kambuh atau semakin parah. Jika dibandingkan dengan mengobati atau menyembuhkan, para dokter menyarankan agar semua orang mau mencegah datangnya risiko diabetes.\r\nDalam mencegah risiko diabetes ini, sebenarnya sangat mudah dan murah. Para ahli kesehatan mengungkapkan bahwa mencegah risiko diabetes bisa dilakukan dengan melakukan jalan kaki. Yap, jalan kaki secara rutin setiap hari dipercaya bisa mencegah risiko diabetes tipe A maupun tipe B. Dibandingkan dengan olahraga seperti gym atau fitnes, jalan kaki justru lebih baik dan tepat dalam mencegah risiko diabetes.\r\nPenelitian yang dipublikasikan di jurnal Diabetologia menyebutkan bahwa jalan kaki secara rutin akan membuat kondisi fisik dan psikis seseorang selalu dalam kondisi baik. Penelitian yang dilakukan pada 150 orang penderita diabetes, ditemukan bahwa mereka yang rutin melakukan olahraga jalan kaki baik di pagi atau sore hari, mereka lebih sehat dan mengalami penurunan gula darah yang signifikan. Sementara mereka yang sama sekali tidak mau melakukan olahraga jalan kaki atau olahraga lainnya, mereka cenderung mengalami peningkatan glukosa dalam darah dan kesehatannya pun semakin menurun.\r\nDr William Kraus, MD, dari Divisi Kardiologi di Duke University School of Medicine mengatakan,\r\n"Jalan kaki yang dilakukan secara rutin bisa mencegah risiko diabetes sekaligus meningkatkan kesehatan tubuh. Sebenarnya, jalan kaki bukan langkah utama dalam mencegah risiko diabetes. Ketika kita ingin terhindar dari risiko diabetes, sangat disarankan bagi kita semua untuk menerapkan pola hidup sehat. Sangat disarankan agar kita mau memperhatikan lagi nutrisi dan asupan gizi yang masuk ke dalam tubuh setiap hari." \r\nDr William juga mengungkapkan bahwa makanan sehat seperti sayur dan buah, kacang-kacangan, biji-bijian, sereal, minyak zaitun dan umbi-umbian adalah beberapa jenis makanan rendah lemak dan rendah zat kimia penyebab berbagai penyakit dalam tubuh termasuk diabetes. Well Ladies, jika kamu juga keluarga dan orang-orang tercinta terbebas dari risiko diabetes, pastikan untuk memiliki pola hidup sehat dan jangan lupa buat olahraga. Salah satu olahraga paling sederhana, mudah dan murah yang bisa dilakukan adalah jalan kaki. Semoga, informasi ini bermanfaat dan kita semua bisa hidup semakin sehat serta ', '2016-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tmp_praktek` varchar(100) NOT NULL,
  `pndk_sd` varchar(40) NOT NULL,
  `pndk_smp` varchar(40) NOT NULL,
  `pndk_sma` varchar(40) NOT NULL,
  `pndk_kuliah` varchar(40) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `spesialis` varchar(35) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(8) NOT NULL,
  `status` varchar(5) NOT NULL,
  `nid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `foto`, `alamat`, `tmp_praktek`, `pndk_sd`, `pndk_smp`, `pndk_sma`, `pndk_kuliah`, `jeniskelamin`, `spesialis`, `username`, `password`, `level`, `status`, `nid`) VALUES
(11, 'dr.GS Heru Tribawono, sp.OG', './post/dr_GS_Heru_Tribawono,_sp_OG1.JPG', 'Jln. Teuku Umar, Kediri', 'Rs. gambiran', '', '', '', '', 'laki', 'Kandungan ', 'heru', 'heru', 'dokter', '1', '1977092320060410242'),
(12, 'dr.Machmud,sp.BS', './post/dr_Machmud,sp_BS.JPG', 'Jl. Anggraini V-11. Kediri.', 'Rs. gambiran', '', '', '', '', 'laki', 'Bedah Saraf', 'Machmud', 'Machmud', 'dokter', '1', '1977092670060410154'),
(13, 'dr. ANDRE GUNAWAN L, Sp. Rad', './post/dr__ANDRE_GUNAWAN_L,_Sp__Rad.jpg', 'jl trunojoyo no 58', 'Rs. gambiran', '', '', '', '', 'laki', 'Radiologi', 'andre', 'andre', 'dokter', '1', '1977385632006041015'),
(14, 'dr. HERRY PURWADI S, Sp. PK', './post/dr__HERRY_PURWADI_S,_Sp__PK.jpg', 'kediri', 'Rs. gambiran', '', '', '', '', 'laki', 'patologi klinik', 'herry', 'herry', 'dokter', '1', '1977092320060410763'),
(15, 'dr. TRI LISTIARI, Sp. Rad', './post/dr__TRI_LISTIARI,_Sp__Rad.jpg', 'PDSRI Malang', 'Rs. gambiran', '', '', '', '', 'perempuan', 'radiologi', 'tri', 'tri', 'dokter', '1', '1737470923200605643'),
(16, 'dr. Rachmad Juni Triyono', './post/dr__Rachmad_Juni_Triyono.jpg', 'Bakung, blitar', 'Rs. gambiran', '', '', '', '', 'laki', 'Umum', 'rachmad', 'rachmad', 'dokter', '1', '1977092320060410176'),
(17, 'dr. ARIS HANDONO, Sp. An', './post/dr__ARIS_HANDONO,_Sp__An.jpg', 'kediri', 'Rs. gambiran', '', '', '', '', 'laki', 'anastesi', 'aris', 'aris', 'dokter', '0', '1977092320060419808'),
(18, 'dr. IRNIATI, Sp.Kj', './post/dr__IRNIATI,_Sp_Kj.jpg', 'tulungagung', 'Rs. gambiran', '', '', '', '', 'perempuan', 'kesehatan jiwa', 'irniati', 'irniati', 'dokter', '1', '1935092320060410155'),
(19, 'dr. MOCHAMMAD SYAHRIAL PRAMUDI', './post/dr__MOCHAMMAD_SYAHRIAL_PRAMUDI.jpg', 'Kediri', 'Rs. gambiran', '', '', '', '', 'laki', 'saraf', 'pramudi', 'pramudi', 'dokter', '1', '9819770923200604101'),
(20, 'dr. ELIDA MUSTIKA ,SpTHT', './post/240915-Pemenang-Judi-Online1.png', 'kediri', 'Rs. gambiran', '', '', '', '', 'perempuan', 'THT', 'elida', 'elida', 'dokter', '1', '3547682382'),
(21, ' dr. Tegar Fadeli Arrahma', './post/dr_Tegar_Fadeli_Arrahma.png', 'Jl.Gunung Agung Rt4 Rw2 Kel.De', 'RSUD Pare, Pare, Kediri, Jawa Timur', 'Kedokteran - Universitas Sebelas Maret S', '', '', '', 'laki', 'Dokter Umum', 'tegar', 'tegar', 'dokter', '1', '1977092320060482737'),
(22, 'dr. Kusuma Yudasmara  Sp.OG', './post/dr__Kusuma_Yudasmara_Sp_OG.png', 'Jl Pahlawan 25-A Tulungrejo, P', '    RS Amelia, Pare, Kediri, Jawa Timur ', 'Spesialisasi Kebidanan & Kandungan - Uda', '', '', '', 'laki-laki', 'Kebidanan & Kandungan', 'kusuma', 'kusuma', 'dokter', '1', '197709232006041763'),
(23, 'drg. Raya Mulyasari', './post/raya.png', 'Jl Joyoboyo RT 06/02 Gampeng (', 'RSB Aura Syfa, Gampengrejo, Kediri, Jawa', 'Kedokteran Gigi - Fakultas Kedokteran Gi', '', '', '', '', 'Dokter Gigi', 'raya', 'raya', 'dokter', '1', '197709232006048634'),
(24, 'dr.Renova Astriani Hutapea', './post/IMG-20160729-WA0003.jpg', 'medan', 'RSUP Dr.Sardjito', 'SD YPPK Kristus Raja', 'SMP Negeri 1 jayapura', 'SMA 1 Jayapura', 'UGM jurusan Medical School', 'perempuan', 'Umum', 'renova', 'renova', 'dokter', '1', '19770923200605575'),
(25, 'dr.Vicky Chandra', './post/IMG-20160729-WA0001.jpg', 'bontang kalimantan timur', 'Rumah sakit Pupuk Kalimantan Timur', 'SD Xaverius 1 Jambi', 'SMP Xaverius 1 Jambi', 'SMA Xaverius 1 Jambi', 'UGM jurusan Medical School', 'laki', 'umum', 'chandra', 'chandra', 'dokter', '1', '197709232006046563');

-- --------------------------------------------------------

--
-- Table structure for table `last_login`
--

CREATE TABLE `last_login` (
  `id_last` int(3) NOT NULL,
  `id_dokter` varchar(8) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `last_login`
--

INSERT INTO `last_login` (`id_last`, `id_dokter`, `waktu`) VALUES
(1, '11', '2016-07-21 16:16:26'),
(2, '11', '2016-07-21 16:20:12'),
(3, '13', '2016-07-21 16:21:01'),
(4, '11', '2016-07-21 17:02:31'),
(5, '13', '2016-07-21 17:58:41'),
(6, '11', '2016-07-22 05:20:06'),
(7, '11', '2016-07-22 14:06:04'),
(8, '13', '2016-07-22 15:22:48'),
(9, '11', '2016-07-22 17:40:53'),
(10, '11', '2016-07-23 04:16:34'),
(11, '11', '2016-07-23 10:32:55'),
(12, '11', '2016-07-23 13:19:27'),
(13, '22', '2016-07-24 04:34:16'),
(14, '11', '2016-07-24 15:02:01'),
(15, '11', '2016-07-24 15:34:08'),
(16, '12', '2016-07-24 17:38:26'),
(17, '15', '2016-07-24 17:38:59'),
(18, '23', '2016-07-24 17:42:09'),
(19, '21', '2016-07-24 17:42:44'),
(20, '18', '2016-07-24 17:43:17'),
(21, '16', '2016-07-24 17:43:40'),
(22, '19', '2016-07-24 17:45:53'),
(23, '11', '2016-07-25 02:25:54'),
(24, '11', '2016-07-25 02:36:47'),
(25, '11', '2016-07-25 03:42:51'),
(26, '24', '2016-07-30 14:23:31'),
(27, '25', '2016-07-30 14:25:25'),
(28, '11', '2016-07-30 16:51:09'),
(29, '11', '2016-07-30 16:53:00'),
(30, '11', '2016-07-30 16:58:36'),
(31, '11', '2016-07-31 04:43:33');

-- --------------------------------------------------------

--
-- Stand-in structure for view `login_terakhir`
--
CREATE TABLE `login_terakhir` (
`id` int(3)
,`nama` varchar(30)
,`nid` varchar(30)
,`id_last` int(3)
,`akhir` datetime
,`foto` varchar(100)
,`alamat` varchar(30)
,`jeniskelamin` varchar(15)
,`spesialis` varchar(35)
,`username` varchar(15)
,`password` varchar(15)
,`level` varchar(8)
,`status` varchar(5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `log_akhir`
--
CREATE TABLE `log_akhir` (
`id_last` int(3)
,`id_dokter` varchar(8)
,`waktu` datetime
,`akhir` datetime
);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(25) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` int(3) NOT NULL,
  `level` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nik`, `nama`, `foto`, `jeniskelamin`, `alamat`, `username`, `password`, `status`, `level`) VALUES
(4, '', 'coba', './user/Brute_Force_Attack_by_Hackw0rm.png', 'laki', 'malang', 'coba', 'coba', 1, 'membar'),
(5, '', 'dika', './user/dika.jpg', 'laki', 'kediri', 'dika', 'dika', 1, 'membar'),
(6, '', 'yuda', './user/yjpg.jpg', 'laki', 'kediri', 'yuda', 'yuda', 1, 'membar'),
(8, '3506191109940003', 'dino', './user/Untitled-1.jpg', 'laki', 'kediri', 'dino', 'dino', 1, 'membar'),
(9, '3506221711940001', 'almi kurniawan', './user/IMG201607181418271.jpg', 'laki', 'banyakan', 'almi', 'almi', 0, 'membar'),
(10, '3506131407950001', 'muhammad khoirul anam', './user/IMG201607181417441.jpg', 'laki', ' ds sonorejo', 'anam', 'anam', 1, 'membar'),
(112, '242424242484', 'dina', './user/XSC04435.JPG', 'perempuan', 'magelang', 'dina', 'dina', 1, 'membar'),
(5794, '2349234683264', 'yuli', './user/XSC04439.JPG', 'perempuan', 'magelang', 'yuni', 'yuni', 1, 'membar'),
(5792398, '242424242424', 'asfsf', './user/XSC044351.JPG', 'laki', 'sfsf', 'sfsf', 'sfsf', 1, 'membar');

-- --------------------------------------------------------

--
-- Table structure for table `obrolan`
--

CREATE TABLE `obrolan` (
  `id_obrolan` int(11) NOT NULL,
  `id_rom` varchar(20) NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obrolan`
--

INSERT INTO `obrolan` (`id_obrolan`, `id_rom`, `id_pengirim`, `gambar`, `pesan`, `tanggal`, `waktu`) VALUES
(7, '578da486319f6', 20, '', 'Sakit tenggorokan atau disebut faringitis, terjadi karena infeksi bakteri atau virus seperti dalam kasus pilek. Kekebalan terhadap ... Artikel Terkait. Apakah Rokok ', '2016-07-19', '05:56:49'),
(8, '578da486319f6', 5, '', 'terjadi', '2016-07-19', '05:58:44'),
(9, '578da486319f6', 8, '', 'rokok', '2016-07-19', '05:59:57'),
(28, '5767e2de92ec9', 112, '', 'dok tanya , apa tanda tanda kehamilan setelah satu minggu berhubungan?', '2016-07-24', '16:00:53'),
(29, '5767e2de92ec9', 11, './pesan/ScreenShot_20160724200141.png', 'Berikut ini adalah pertanda kehamilan secara fisik.\r\n\r\nPerdarahan\r\n(Tanda pertama biasanya terjadi dengan adanya perdarahan atau bercak darah yang diakibatkan karena implantasi (implantation bleeding)).\r\nKram Perut\r\n(Rasa kram atau sakit tersebut juga diakibatkan karena terjadinya implantasi janin ke dinding rahim yang akan terus terasa selama proses tersebut masih berlangsung).\r\nPerubahan Payudara\r\n(Wanita akan lebih sensitif ketika dadanya tersentuh, bahkan hanya karena tersentuh branya sendiri, selain itu juga akan timbul rasa nyeri).\r\nTelat Haid\r\n(Meskipun demikian tidak dapat disimpulkan jika terlambat haid berarti pasti hamil karena ada banyak penyebab terlambat haid selain karena kehamilan)', '2016-07-24', '16:07:27'),
(30, '5767e2de92ec9', 112, '', 'jadi seperti itu dok. ', '2016-07-24', '16:11:28'),
(31, '5767e2de92ec9', 5794, '', 'kalau menu makanan yang bagus buat ibu hamil apa dok?', '2016-07-24', '16:19:15'),
(32, '5767e2de92ec9', 11, './pesan/ScreenShot_20160724212736.png', '1. Makanan laut.\r\nMakanan laut yang sangat di anjurkan bagi ibu hamil adalah ikan salmon. Ikan ini merupakan nutrisi paling bagus baik juga untuk wanita menyusui karena 2 nutrisi terbaiknya yaitu DHA dan EPA yang memiliki fungsi bagus untuk tumbuh kembang sel sel syaraf otak janin di dalam kandungan.\r\n2. Konsumsi susu minim kandungan lemak.\r\nKebaikan susu sudah di ragukan lagi untuk mendukung daya sehat wanita hamil maupun menyusui karena susu begitu kaya akan sumber proteein, tinggi kalsium , vitamin D dan B.\r\n3. Daging merah non lemaks.\r\nBagi ibu hamil daging sapi akan menjadu energi agar kuat serta untuk masa menyusui maka kebutuhan protein anda akan terpenuhi.\r\n4. Konsumsi sayur jenis kacang2an.\r\nMakanan ini kaya akan kandungan zat besi dan protein di samping harganya yang tidak mahal.\r\n5. Konsumsi buah bluberri.\r\nIbu hamil dan wanita menyusui perlu makanan yang mengandung anti oksidan tinggi, salah satunya adalah dengan makan buah bluberry.\r\n6. Konsumsi beras merah dan berass coklat.\r\nSelain kaya akan kandungan karbohidrat, dua jenis makanan ini sangat baik untuk menurunkan obesitas pasca melahirkan namun anda harus mengimbangi dengan makanan lain untuk menggantikan energi akibat penurunan berat badan anda sewaktu menyusui.', '2016-07-24', '16:28:06'),
(33, '5767e2de92ec9', 112, './pesan/1.jpg', 'hdfhjd', '2016-07-26', '05:36:30');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pengguna`
--
CREATE TABLE `pengguna` (
`id` int(25)
,`nama` varchar(35)
,`username` varchar(20)
,`password` varchar(15)
,`foto` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_pengirim`, `id_penerima`, `pesan`, `tanggal`, `waktu`) VALUES
(29, 6, 16, 'tanya dok', '2016-06-22', '16:12:00'),
(30, 5, 11, 'masa usia janin', '2016-06-23', '06:59:52'),
(31, 11, 5, '9 bulan', '2016-06-23', '07:04:17'),
(32, 5, 12, 'dok', '2016-06-29', '05:54:17'),
(33, 12, 5, 'iya ', '2016-06-29', '12:05:11'),
(35, 5, 15, 'radiologi itu apa dok?', '2016-07-18', '13:42:21'),
(36, 10, 18, 'selamat sore dok. saya kok sering gelisah kenapa ya?', '2016-07-19', '04:12:13'),
(39, 6, 14, 'klinik', '2016-07-19', '06:05:13'),
(40, 2, 11, 'tanya', '2016-07-22', '17:21:39'),
(41, 112, 11, 'saya mau bertanya dok? apa akibat dari penggunaan pil KB secara terus menerus setelah menikah dan cara KB yang aman seperti apa?', '2016-07-22', '17:50:00'),
(42, 11, 112, 'pil KB aman untuk dikonsumsi terus menerus  namus harus dipertimbangkan tujuan pemakaian kontrasepsi, apakan untuk menunda atau membatasi. untuk menunda kehamilan dapat digunakan pil KB,IUD, implan, suntik dan kondom sedangkan  untuk membatas i dapat menggunakan IUD, implan, vasektomi,tubektomi', '2016-07-22', '18:08:33'),
(43, 112, 11, 'oh iya dok, kenapa ya sejak ikut KB susuk , saya tidak pernah menstruasi?', '2016-07-22', '18:14:00'),
(44, 11, 112, 'begini bu, salah satu efek samping dari KB implan(KB susuk) 3 tahunan adalah tidak mendapatkan haid, sehingga ibu tidak perlu kuatir dengan kondisi tersebut', '2016-07-22', '18:16:36'),
(46, 112, 11, 'oh jadi gitu dok terimakasi', '2016-07-22', '18:18:09'),
(47, 11, 112, 'sama-sama', '2016-07-22', '18:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(4) NOT NULL,
  `id_member` varchar(10) NOT NULL,
  `rwt_now` text NOT NULL,
  `penyebab` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `kapan` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `rwt_dulu` text NOT NULL,
  `rwt_keluarga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `id_member`, `rwt_now`, `penyebab`, `area`, `kapan`, `gambar`, `rwt_dulu`, `rwt_keluarga`) VALUES
(2, '57923', 'sakit hati', '', '', '', './riwayat/andika.jpg', 'dfdfdfd', ''),
(3, '112', 'sering pusing dan mual mual', '', '', '', './riwayat/kesehatan-asam-lambung.jpg', 'asam lambung', ''),
(4, '5', 'mual mual', 'makan pecel', 'perut', 'hari ini', './riwayat/pat8.jpg', 'maag', 'diabetes');

-- --------------------------------------------------------

--
-- Table structure for table `rom`
--

CREATE TABLE `rom` (
  `kode` int(11) NOT NULL,
  `id_rom` varchar(20) NOT NULL,
  `id_member` varchar(11) NOT NULL,
  `nama_room` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rom`
--

INSERT INTO `rom` (`kode`, `id_rom`, `id_member`, `nama_room`) VALUES
(5, '5767e2de92ec9', '5', 'kandungan'),
(6, '5767e8d07d9b9', '11', 'diabetes'),
(7, '57734adce8fc6', '5', 'kanker '),
(8, '578da486319f6', '20', 'Radang tengorokan');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil_pesan`
--
CREATE TABLE `tampil_pesan` (
`id_pesan` int(11)
,`id_pengirim` int(11)
,`id_penerima` int(11)
,`pesan` text
,`tanggal` date
,`waktu` time
,`id` int(25)
,`nama` varchar(35)
,`username` varchar(20)
,`password` varchar(15)
,`foto` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil_pesand`
--
CREATE TABLE `tampil_pesand` (
`id_pesan` int(11)
,`id_pengirim` int(11)
,`id_penerima` int(11)
,`pesan` text
,`tanggal` date
,`waktu` time
,`id` int(25)
,`nama` varchar(35)
,`username` varchar(20)
,`password` varchar(15)
,`foto` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil_riwayat`
--
CREATE TABLE `tampil_riwayat` (
`id` int(25)
,`nik` varchar(40)
,`nama` varchar(35)
,`foto` varchar(100)
,`jeniskelamin` varchar(15)
,`alamat` varchar(50)
,`username` varchar(20)
,`password` varchar(15)
,`status` int(3)
,`level` varchar(35)
,`id_riwayat` int(4)
,`id_member` varchar(10)
,`rwt_now` text
,`penyebab` varchar(50)
,`area` varchar(50)
,`kapan` varchar(50)
,`gambar` varchar(50)
,`rwt_dulu` text
,`rwt_keluarga` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil_user`
--
CREATE TABLE `tampil_user` (
`id` int(25)
,`nama` varchar(35)
,`username` varchar(20)
,`password` varchar(15)
,`foto` varchar(100)
,`level` varchar(35)
,`status` varchar(11)
);

-- --------------------------------------------------------

--
-- Structure for view `login_terakhir`
--
DROP TABLE IF EXISTS `login_terakhir`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `login_terakhir`  AS  select `d`.`id` AS `id`,`d`.`nama` AS `nama`,`d`.`nid` AS `nid`,`l`.`id_last` AS `id_last`,`l`.`akhir` AS `akhir`,`d`.`foto` AS `foto`,`d`.`alamat` AS `alamat`,`d`.`jeniskelamin` AS `jeniskelamin`,`d`.`spesialis` AS `spesialis`,`d`.`username` AS `username`,`d`.`password` AS `password`,`d`.`level` AS `level`,`d`.`status` AS `status` from (`dokter` `d` left join `log_akhir` `l` on((`d`.`id` = `l`.`id_dokter`))) group by `d`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `log_akhir`
--
DROP TABLE IF EXISTS `log_akhir`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `log_akhir`  AS  select `last_login`.`id_last` AS `id_last`,`last_login`.`id_dokter` AS `id_dokter`,`last_login`.`waktu` AS `waktu`,max(`last_login`.`waktu`) AS `akhir` from `last_login` group by `last_login`.`id_dokter` ;

-- --------------------------------------------------------

--
-- Structure for view `pengguna`
--
DROP TABLE IF EXISTS `pengguna`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pengguna`  AS  select `member`.`id` AS `id`,`member`.`nama` AS `nama`,`member`.`username` AS `username`,`member`.`password` AS `password`,`member`.`foto` AS `foto` from `member` union select `dokter`.`id` AS `id`,`dokter`.`nama` AS `nama`,`dokter`.`username` AS `username`,`dokter`.`password` AS `password`,`dokter`.`foto` AS `foto` from `dokter` ;

-- --------------------------------------------------------

--
-- Structure for view `tampil_pesan`
--
DROP TABLE IF EXISTS `tampil_pesan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_pesan`  AS  select `p`.`id_pesan` AS `id_pesan`,`p`.`id_pengirim` AS `id_pengirim`,`p`.`id_penerima` AS `id_penerima`,`p`.`pesan` AS `pesan`,`p`.`tanggal` AS `tanggal`,`p`.`waktu` AS `waktu`,`d`.`id` AS `id`,`d`.`nama` AS `nama`,`d`.`username` AS `username`,`d`.`password` AS `password`,`d`.`foto` AS `foto` from (`pesan` `p` join `pengguna` `d` on((`p`.`id_penerima` = `d`.`id`))) order by `p`.`waktu` desc ;

-- --------------------------------------------------------

--
-- Structure for view `tampil_pesand`
--
DROP TABLE IF EXISTS `tampil_pesand`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_pesand`  AS  select `p`.`id_pesan` AS `id_pesan`,`p`.`id_pengirim` AS `id_pengirim`,`p`.`id_penerima` AS `id_penerima`,`p`.`pesan` AS `pesan`,`p`.`tanggal` AS `tanggal`,`p`.`waktu` AS `waktu`,`d`.`id` AS `id`,`d`.`nama` AS `nama`,`d`.`username` AS `username`,`d`.`password` AS `password`,`d`.`foto` AS `foto` from (`pesan` `p` join `pengguna` `d` on((`p`.`id_pengirim` = `d`.`id`))) order by `p`.`waktu` desc ;

-- --------------------------------------------------------

--
-- Structure for view `tampil_riwayat`
--
DROP TABLE IF EXISTS `tampil_riwayat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_riwayat`  AS  select `member`.`id` AS `id`,`member`.`nik` AS `nik`,`member`.`nama` AS `nama`,`member`.`foto` AS `foto`,`member`.`jeniskelamin` AS `jeniskelamin`,`member`.`alamat` AS `alamat`,`member`.`username` AS `username`,`member`.`password` AS `password`,`member`.`status` AS `status`,`member`.`level` AS `level`,`riwayat`.`id_riwayat` AS `id_riwayat`,`riwayat`.`id_member` AS `id_member`,`riwayat`.`rwt_now` AS `rwt_now`,`riwayat`.`penyebab` AS `penyebab`,`riwayat`.`area` AS `area`,`riwayat`.`kapan` AS `kapan`,`riwayat`.`gambar` AS `gambar`,`riwayat`.`rwt_dulu` AS `rwt_dulu`,`riwayat`.`rwt_keluarga` AS `rwt_keluarga` from (`member` join `riwayat` on((`member`.`id` = `riwayat`.`id_member`))) ;

-- --------------------------------------------------------

--
-- Structure for view `tampil_user`
--
DROP TABLE IF EXISTS `tampil_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_user`  AS  select `member`.`id` AS `id`,`member`.`nama` AS `nama`,`member`.`username` AS `username`,`member`.`password` AS `password`,`member`.`foto` AS `foto`,`member`.`level` AS `level`,`member`.`status` AS `status` from `member` union select `dokter`.`id` AS `id`,`dokter`.`nama` AS `nama`,`dokter`.`username` AS `username`,`dokter`.`password` AS `password`,`dokter`.`foto` AS `foto`,`dokter`.`level` AS `level`,`dokter`.`status` AS `status` from `dokter` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `last_login`
--
ALTER TABLE `last_login`
  ADD PRIMARY KEY (`id_last`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obrolan`
--
ALTER TABLE `obrolan`
  ADD PRIMARY KEY (`id_obrolan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `rom`
--
ALTER TABLE `rom`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `last_login`
--
ALTER TABLE `last_login`
  MODIFY `id_last` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `obrolan`
--
ALTER TABLE `obrolan`
  MODIFY `id_obrolan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rom`
--
ALTER TABLE `rom`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
