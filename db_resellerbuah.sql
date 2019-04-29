/*
SQLyog Ultimate v12.09 (32 bit)
MySQL - 10.1.37-MariaDB : Database - db_resellerbuah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_resellerbuah` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_resellerbuah`;

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL AUTO_INCREMENT,
  `judul_blog` varchar(100) NOT NULL,
  `slug_blog` varchar(100) NOT NULL DEFAULT '0',
  `isi_blog` text,
  `foto` text,
  `foto_type` char(10) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` char(20) DEFAULT NULL,
  `modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` char(20) NOT NULL,
  PRIMARY KEY (`id_blog`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `blog` */

insert  into `blog`(`id_blog`,`judul_blog`,`slug_blog`,`isi_blog`,`foto`,`foto_type`,`created`,`created_by`,`modified`,`modified_by`) values (3,'Tips dan Cara Merawat Batik di Rumah','tips-dan-cara-merawat-batik-di-rumah','<p>Tips dan Cara Merawat Batik di Rumah – Kita sebagai orang Indonesia, wajib memilki pakaian batik di lemari pakaian kita. Apalagi setelah UNESCO menegaskan bahwa batik Indonesia adalah salah satu warisan budaya yang diakui dunia, desainer-desainer batik berlomba untuk membuat batik yang “kekinian”. Hal tersebut pasti membuat kita sebagai masyarakat Indonesia bangga, terutama bagi yang menyukai batik sebagai salah satu gaya berbusana. Tapi, hal tersebut juga harus diimbangi dengan cara merawat batik kesayangan agar kain batik tidak cepat rusak dan warna tidak mudah kusam.</p>\r\n<p>Nah, mau tahu beberapa tips dan cara ampuh merawat batik di rumah agar tetap awet dan terlihat baru setiap hari? Yuk, simak caranya di daftar berikut ini!</p>\r\n<p> </p>\r\n<p><strong>Hindari Mesin Cuci</strong><br>Memang mesin cuci bisa membantu dan mempercepat kamu untuk mencuci pakaian, tapi apa yang terjadi kalau batik kamu sering dicuci dengan mesin cuci? Serat-serat kain batik akan lebih mudah rusak. Pada umumnya membuat batik menggunakan tenaga dan metode manual, tapi enggak ada salahnya kalau sesekali mencuci batik kesayangan dengan menggunakan sentuhan tangan. Beberapa serat dari kain batik sangat tipis ataupun mudah rusak kalau kita salah dicuci, begitu juga dengan pola warnanya. Mencuci dengan tangan pastinya bisa menurunkan resiko rusaknya warna dan serat kain batik.</p>\r\n<p><strong>Pisahkan Batik dengan Bahan Lain</strong><br>Batik terbuat dari berbagai bahan dan warna yang mudah luntur dari pakaian lain tentu menjadi salah satu kendala kita dalam menjaga warna asli batik. Sebaiknya, sebelum mencuci baju batik, pisahkan dulu baju-baju kita yang mudah luntur dengan batik. Hal tersebut demi menjaga warna asli khas batik agar tetap cemerlang dan tidak terkontaminasi dengan warna lain.</p>\r\n<p><strong>Cuci Menggunakan Shampoo</strong><br>Bukan cuma rambut lho yang bisa dibersihkan dengan shampoo, baju batik juga bisa dicuci dengan shampoo. Shampoo pada dasarnya terbuat dari bahan aditif yang lembut banget dan untuk mencuci rambut. Tapi, hal tersebut juga bisa kita diaplikasikan ke batik. Kamu bisa mencoba mencuci batik kesayangan dengan menggunakan shampoo. Zat aditif yang terkandung dalam shampoo tidak sekeras yang ada di dalam detergen yang bisa untuk mencuci pakaian. Sehingga hal ini diyakini mampu menjaga batik agar tetap indah dalam waktu yang relatif lama.</p>\r\n<p><strong>Hindari Menggunakan Pelembut</strong><br>Softener atau pelembut pakaian seringkali kita gunakan untuk membuat kain lebih wangi dan harum saat dipakai, sehingga saat disimpan di dalam lemari, pakaian bisa langsung dikenakan ketika kita mau mengenakannya sehari-hari. Tapi, sisi lain negatif dari pelembut pakaian ini yaitu bisa membuat serat kain mudah rusak. Seringkali baju yang kita cuci dengan pelembut akan mudah robek dikemudian hari. Nah, maka itu dianjurkan untuk tidak menggunakan bahan ini ketika sedang mencuci batik.</p>\r\n<p><strong>Rendam dengan Air Hangat</strong><br>Toppers, kamu pasti familiar atau sering mendengar kalau mencuci batik harus dengan air dingin? Tapi, kalau kamu mau mencoba cara baru dan terbukti ampuh mencuci batik dengan bersih yaitu dengan menggunakan air hangat. Yup, air hangat dapat mempermudah melepaskan kotoran dari serat kain. Kalau batik tidak terlalu dalam keadaan kotor, daripada mengucek batik dengan tangan, lebih baik direndam dengan air hangat sekitar 20-30 menit agar kotoran lepas dan tinggal dibilas. Praktis, kan?</p>\r\n<p><strong>Hindari Menjemur di Bawah Sinar Matahari Langsung</strong><br>Menjemur pakaian langsung dibawah terik matahari di siang hari bisa membuat pakaian lebih cepat kering, tapi lain halnya dengan pakaian batik. Warna dan tekstur kain batik akan rusak bila dijemur di bawah sinar matahari langsung. Karena itu, mengeringkan kain batik cukup dengan menjemur di tempat yang teduh atau diangin-anginkan saja. Lebih lama memang, tapi cara ini membuat warna pada kain batik anda lebih awet.</p>\r\n<p>Kain batik yang merupakan kebanggaan Indonesia ini memang harus kita jaga dan rawat pemakaiannya. Dengan menghindari panas terik dan pelembut serta menggunakan air hangat, dijamin baju batik kamu bisa lebih bersih dan awet warnanya. Toppers, yuk memakai batik sebagai warisan budaya dari generasi ke generasi!</p>','tips-dan-cara-merawat-batik-di-rumah20171204042150','.jpg','2017-12-04 10:21:50','azmicolejr',NULL,''),(4,'Tips Memilih Topi Sesuai dengan Bentuk Wajah','tips-memilih-topi-sesuai-dengan-bentuk-wajah','<p>Aksesoris merupakan salah satu hal yang penting dan dibutuhkan agar penampilanmu terlihat lebih keren, menarik, dan bisa terlihat maksimal setiap harinya. Apakah Toppers suka memakai topi sebagai salah satu aksesoris agar terkesan stylish dan keren? Topi yang dipakai juga harus sesuai dengan bentuk wajah kita lho, karena bisa membuat wajah lebih proporsional dan cocok dipakai sehari-hari.</p>\r\n<p>Mau tahu beberapa tips untuk memilih topi sesuai dengan bentuk wajahmu supaya lebih cocok untuk dipakai? Yuk, cari tahu infonya berikut ini.</p>\r\n<h2>Tips Memilih Topi Sesuai dengan Bentuk Wajah</h2>\r\n<h2> <img src=\"http://localhost/olshop2/assets/images/upload/a2d19e5458c9cf0998544bee4a53054b5.jpg\"></h2>\r\n<h3>Wajah Panjang</h3>\r\n<p>Kalau kamu memiliki bentuk wajah panjang, lebih baik memilih topi dengan pinggiran berbentuk bulat dan datar seperti topi jenis boater atau panama. Topi-topi dengan bentuk tersebut bisa menyamarkan dagu yang panjang sehingga wajah terlihat pas dan proporsional. Hindari menggunakan topi <a href=\"https://www.tokopedia.com/hot/topi-fedora\" target=\"_blank\" rel=\"noopener noreferrer\">fedora</a> karena bisa membuat wajah kamu terkesan lebih panjang dan lebar.</p>\r\n<h3>Wajah Oval</h3>\r\n<p>Kamu bisa dibilang beruntung jika memiliki wajah berbentuk oval karena semua jenis topi akan terlihat cocok dan tinggal memilih ukuran dan bentuk sesuai dengan seleramu. Tapi, bentuk topi yang disarankan untuk kamu yang memiliki wajah oval yaitu topi dengan model bulat bak bowler hat. Selain itu, topi model kupluk dengan bahan rajut atau topi beanie juga bisa dijadikan salah satu referensi untuk pria yang berwajah oval. Jangan menggunakan topi yang memiliki ukuran besar karena akan membuat wajahmu terlihat tertutup atau tenggelam.</p>\r\n<h3>Wajah Persegi</h3>\r\n<p>Banyak yang bilang kalau seseorang yang memiliki wajah persegi biasanya terkenal dengan sifatnya yang galak, sehingga banyak yang memiliki wajah persegi menggunakan topi untuk menutupinya. Nah, topi yang sesuai untuk Toppers yang berwajah persegi yaitu topi yang memiliki pinggiran berbentuk bulat misalnya floppy, bowler dan boaterhat. Model topi ini akan membuat wajah terlihat lebih lembut karena sudut tegas di wajah akan tertutupi dan lebih bulat. Topi berbentuk<a href=\"https://www.tokopedia.com/hot/baseball-cap\" target=\"_blank\" rel=\"noopener noreferrer\"> baseball cap</a> juga cocok karena bisa membuat kesan sporty dan dinamis.</p>\r\n<h3>Wajah Bulat</h3>\r\n<p>Toppers yang memiliki wajah bulat akan cocok menggunakan topi model fedora atau fedora hat. Karena, kalau kamu mengenakan topi ini maka wajahmu bisa terlihat lebih panjang dan ramping. Sebaiknya kamu menghindari menggunakan topi dengan model beanie dan bowler karena bisa membuat wajah kamu terlihat semakin bulat.</p>\r\n<h3>Wajah Hati</h3>\r\n<p>Wajah yang berbentuk hati sebenarnya nggak jauh berbeda dengan wajah berbentuk oval. Perbedaan dari kedua bentuk wajah ini sebenarnuya hanya bentuk wajah hati yang lebih meruncing di dagu dan lebar pada bagian dahi. Kalau kamu memiliki wajah dengan bentuk hati sebaiknya jangan menggunakan topi yang bisa membuat dagu terlihat makin tajam dan panjang. Topi dengan model cloche hat akan lebih cocok karena bisa membantu menyamarkan dahi yang lebar dan dagu yang agak panjang dan lancip tersebut.</p>\r\n<p>Sebelum membeli atau menggunakan topi, lebih baik kamu mengenali bentuk wajahmu dengan topi tersebut terlebih dahulu supaya lebih pas dan proporsional. Kamu bisa mencocokkan berbagai topi dengan bentuk wajah diatas sehingga saat menggunakannya, akan lebih menarik dan nyaman saat beraktivitas. Di Tokopedia kamu juga bisa menemukan berbagai jenis topi terlengkap dan terbaru, lho. Topi mana yang pas untukmu?</p>','tips-memilih-topi-sesuai-dengan-bentuk-wajah20171204042308','.jpg','2017-12-04 10:23:09','azmicolejr','2017-12-04 10:49:24','azmicolejr'),(5,'Ketahui Berbagai Penyebab Diare dan Cara Mengatasi Diare','ketahui-berbagai-penyebab-diare-dan-cara-mengatasi-diare','<p>Meskipun tak tergolong serius, diare bukanlah penyakit yang boleh Toppers sepelekan, lho! Diare sendiri merupakan kondisi yang ditandai dengan encernya tinja yang dikeluarkan dengan frekuensi buang air besar (BAB) yang lebih sering dibandingkan dengan biasanya. Biasanya diare hanya berlangsung beberapa hari, namun pada sebagian kasus memanjang hingga berminggu-minggu.</p>\r\n<p>Gejala diare sendiri bisa dimulai dengan munculnya rasa sakit perut dan diikuti dengan frekuensi buang air besar yang jadi lebih sering dibandingkan biasanya. Tekstur tinja juga lebih encer. Pada kasus yang parah, Toppers bahkan bisa deman dan juga mengalami kram perut parah, lho!</p>\r\n<p>Nggak cuma bisa mengganggu aktivitas sehari-hari, diare bisa berakibat pada dehidrasi hingga malnutrisi karena asupan nutrisi yang jadinya tak terserap sempurna oleh tubuh. Tapi, Toppers nggak perlu khawatir karena diare bisa diatasi dengan mudah, kok. Sebelum mengetahui cara mengatasi diare, mari kita simak kebiasaan-kebiasaan dan berbagai hal yang bisa jadi penyebab Diare yang harus Toppers hindari.</p>\r\n<ol>\r\n<li><strong>Oralit sebagai pertolongan pertama mengobati diare</strong><br>Larutan oralit bisa dengan mudah Toppers temukan di apotik, toko obat-obatan, dan juga Tokopedia. Namun, oralit juga bisa dengan mudah dibuat sendiri dirumah, lho! Cukup larutkan satu sendok teh garam dan delapan sendok gula dengan satu liter air hangat. Minum larutan ini tiga hingga empat kali dalam sehari.</li>\r\n<li><strong>Perbanyak minum air putih</strong><br>Hindari mengonsumsi minuman yang memiliki rasa. Utamakan konsumsi air putih. Pada saat diare, tubuh membutuhkan cairan lebih karena tubuh rentan terkena dehidrasi. Minum air putih dengan frekuensi lebih namun dengan volum yang sedikit-sedikit.</li>\r\n<li><strong>Mengobati diare dengan Probiotik</strong><br>Bakteri jahat bisa dilawan menggunakan bakteri baik. Bakteri baik ini berupa probiotik yang banyak bisa ditemukan dari yoghurt dan juga keju.</li>\r\n<li><strong>Manfaatkan air rebusan daun jambu<br></strong>Kandungan flavanoid yang dimiliki daun jambu bermanfaat mengurangi cairang yang ada dalam feses secara progresif sehingga baik untuk mengurangi dampak dari diare. Cara menggunakan daun jambu untuk obat diare-pun sangat mudah. Cukup rebus 15 lembar daun jambu dengan 1 liter air. Tambahkan satu sedok teh garam hingga air berkurang kurang lebih setengahnya. Minum air rebusan daun jambu ini tiga kali sehari.</li>\r\n<li><strong>Teh Chamomile</strong><br>Sama halnya seperti daun jambu, teh Chamomile mengandung zar flavanoid yang bisa membantu mengobati diare. Namun, konsumsi teh ini secukupnya saja mengingat kandungan kafein yang terdapat pada teh juga tak baik untuk penderita diare.</li>\r\n<li><strong>Hindari makanan-makanan tertentu</strong><br>Saat terkena diare, perhatikan asupan makanan  yang masuk ke dalam tubuh. Berikut makanan-makanan yang perlu Toppers hindari saat menderita diare:\r\n<ul>\r\n<li>Makanan olahan susu, kecuali yoghurt</li>\r\n<li>Minuman-minuman berkafein dan beralkohol</li>\r\n<li>Makanan dengan kandungan asam tinggi</li>\r\n<li>Makanan dengan kandungan gula tinggi</li>\r\n<li>Makanan-makanan berminyak</li>\r\n</ul>\r\n</li>\r\n</ol>','ketahui-berbagai-penyebab-diare-dan-cara-mengatasi-diare20171204054411','.jpg','2017-12-04 11:34:03','azmicolejr','2017-12-04 11:44:12','azmicolejr'),(6,'Sering Melamun Pertanda Cerdas?','sering-melamun-pertanda-cerdas','<p>Orang dengan pikiran kerap mengembara kemungkinan mempunyai otak lebih tajam. Sebuah studi menunjukkan bahwa orang yang terus menerus \"terganggu\" ternyata mempunyai \"memori kerja\" lebih banyak. Hal tersebut membuat mereka bisa melakukan dua hal bersamaan dalam satu waktu.Partisipan dalam penelitian ini harus menekan tombol sebagai respons terhadap munculnya huruf tertentu di layar atau menekan pada waktu yang tepat. Para peneliti mengecek secara rutin untuk mengetahui apakah pikiran mereka mengembara. Pada akhir penelitian, para ilmuwan mengukur kapasitas memori kerja partisipan, memberi mereka skor untuk kemampuan dalam mengingat sekumpulan huruf diselingi dengan pertanyaan matematika yang mudah.<br><br>Psikolog dari University of Wisconsin-Madison, Daniel Levinson, mengatakan mereka yang mempunyai kapasitas memori kerja lebih tinggi dilaporkan lebih sering melamun selama mengerjakan tugas-tugas sederhana meskipun prestasi mereka tidak meragukan. Hasil dari penelitian Levinson itu dipublikasikan secara online di Psychological Science. Ini pertama kalinya sebuah penelitian menunjukkan hubungan antara pikiran yang sering mengembara alias melamun dengan kecerdasan.<br><br>Levinson mengatakan dibutuhkan lebih banyak ruang kerja mental, misalnya, untuk menambahkan dua angka yang diucapkan tanpa menuliskannya. Kapasitas tersebut dihubungkan dengan pengukuran umum kecerdasan seperti membaca secara menyeluruh dan skor IQ.<br><br>Studi terbaru ini menggarisbawahi betapa pentingnya memori kerja untuk membantu otak fokus dalam masalah-masalah yang paling sulit.</p>','sering-melamun-pertanda-cerdas20180211095422','.jpg','2017-12-04 11:35:55','azmicolejr','2018-02-11 15:54:22','armageddon');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `judul_kategori` varchar(20) NOT NULL,
  `slug_kat` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`judul_kategori`,`slug_kat`) values (1,'Fashion Pria','pakaian-pria'),(2,'Fashion Wanita','fashion-wanita');

/*Table structure for table `kota` */

DROP TABLE IF EXISTS `kota`;

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi_id` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kota`),
  KEY `FK_kota_provinsi` (`provinsi_id`),
  CONSTRAINT `FK_kota_provinsi` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id_provinsi`)
) ENGINE=InnoDB AUTO_INCREMENT=502 DEFAULT CHARSET=latin1;

/*Data for the table `kota` */

insert  into `kota`(`id_kota`,`provinsi_id`,`nama_kota`) values (1,21,'Aceh Barat'),(2,21,'Aceh Barat Daya'),(3,21,'Aceh Besar'),(4,21,'Aceh Jaya'),(5,21,'Aceh Selatan'),(6,21,'Aceh Singkil'),(7,21,'Aceh Tamiang'),(8,21,'Aceh Tengah'),(9,21,'Aceh Tenggara'),(10,21,'Aceh Timur'),(11,21,'Aceh Utara'),(12,32,'Agam'),(13,23,'Alor'),(14,19,'Ambon'),(15,34,'Asahan'),(16,24,'Asmat'),(17,1,'Badung'),(18,13,'Balangan'),(19,15,'Balikpapan'),(20,21,'Banda Aceh'),(21,18,'Bandar Lampung'),(22,9,'Bandung'),(23,9,'Bandung'),(24,9,'Bandung Barat'),(25,29,'Banggai'),(26,29,'Banggai Kepulauan'),(27,2,'Bangka'),(28,2,'Bangka Barat'),(29,2,'Bangka Selatan'),(30,2,'Bangka Tengah'),(31,11,'Bangkalan'),(32,1,'Bangli'),(33,13,'Banjar'),(34,9,'Banjar'),(35,13,'Banjarbaru'),(36,13,'Banjarmasin'),(37,10,'Banjarnegara'),(38,28,'Bantaeng'),(39,5,'Bantul'),(40,33,'Banyuasin'),(41,10,'Banyumas'),(42,11,'Banyuwangi'),(43,13,'Barito Kuala'),(44,14,'Barito Selatan'),(45,14,'Barito Timur'),(46,14,'Barito Utara'),(47,28,'Barru'),(48,17,'Batam'),(49,10,'Batang'),(50,8,'Batang Hari'),(51,11,'Batu'),(52,34,'Batu Bara'),(53,30,'Bau-Bau'),(54,9,'Bekasi'),(55,9,'Bekasi'),(56,2,'Belitung'),(57,2,'Belitung Timur'),(58,23,'Belu'),(59,21,'Bener Meriah'),(60,26,'Bengkalis'),(61,12,'Bengkayang'),(62,4,'Bengkulu'),(63,4,'Bengkulu Selatan'),(64,4,'Bengkulu Tengah'),(65,4,'Bengkulu Utara'),(66,15,'Berau'),(67,24,'Biak Numfor'),(68,22,'Bima'),(69,22,'Bima'),(70,34,'Binjai'),(71,17,'Bintan'),(72,21,'Bireuen'),(73,31,'Bitung'),(74,11,'Blitar'),(75,11,'Blitar'),(76,10,'Blora'),(77,7,'Boalemo'),(78,9,'Bogor'),(79,9,'Bogor'),(80,11,'Bojonegoro'),(81,31,'Bolaang Mongondow (Bolmong)'),(82,31,'Bolaang Mongondow Selatan'),(83,31,'Bolaang Mongondow Timur'),(84,31,'Bolaang Mongondow Utara'),(85,30,'Bombana'),(86,11,'Bondowoso'),(87,28,'Bone'),(88,7,'Bone Bolango'),(89,15,'Bontang'),(90,24,'Boven Digoel'),(91,10,'Boyolali'),(92,10,'Brebes'),(93,32,'Bukittinggi'),(94,1,'Buleleng'),(95,28,'Bulukumba'),(96,16,'Bulungan (Bulongan)'),(97,8,'Bungo'),(98,29,'Buol'),(99,19,'Buru'),(100,19,'Buru Selatan'),(101,30,'Buton'),(102,30,'Buton Utara'),(103,9,'Ciamis'),(104,9,'Cianjur'),(105,10,'Cilacap'),(106,3,'Cilegon'),(107,9,'Cimahi'),(108,9,'Cirebon'),(109,9,'Cirebon'),(110,34,'Dairi'),(111,24,'Deiyai (Deliyai)'),(112,34,'Deli Serdang'),(113,10,'Demak'),(114,1,'Denpasar'),(115,9,'Depok'),(116,32,'Dharmasraya'),(117,24,'Dogiyai'),(118,22,'Dompu'),(119,29,'Donggala'),(120,26,'Dumai'),(121,33,'Empat Lawang'),(122,23,'Ende'),(123,28,'Enrekang'),(124,25,'Fakfak'),(125,23,'Flores Timur'),(126,9,'Garut'),(127,21,'Gayo Lues'),(128,1,'Gianyar'),(129,7,'Gorontalo'),(130,7,'Gorontalo'),(131,7,'Gorontalo Utara'),(132,28,'Gowa'),(133,11,'Gresik'),(134,10,'Grobogan'),(135,5,'Gunung Kidul'),(136,14,'Gunung Mas'),(137,34,'Gunungsitoli'),(138,20,'Halmahera Barat'),(139,20,'Halmahera Selatan'),(140,20,'Halmahera Tengah'),(141,20,'Halmahera Timur'),(142,20,'Halmahera Utara'),(143,13,'Hulu Sungai Selatan'),(144,13,'Hulu Sungai Tengah'),(145,13,'Hulu Sungai Utara'),(146,34,'Humbang Hasundutan'),(147,26,'Indragiri Hilir'),(148,26,'Indragiri Hulu'),(149,9,'Indramayu'),(150,24,'Intan Jaya'),(151,6,'Jakarta Barat'),(152,6,'Jakarta Pusat'),(153,6,'Jakarta Selatan'),(154,6,'Jakarta Timur'),(155,6,'Jakarta Utara'),(156,8,'Jambi'),(157,24,'Jayapura'),(158,24,'Jayapura'),(159,24,'Jayawijaya'),(160,11,'Jember'),(161,1,'Jembrana'),(162,28,'Jeneponto'),(163,10,'Jepara'),(164,11,'Jombang'),(165,25,'Kaimana'),(166,26,'Kampar'),(167,14,'Kapuas'),(168,12,'Kapuas Hulu'),(169,10,'Karanganyar'),(170,1,'Karangasem'),(171,9,'Karawang'),(172,17,'Karimun'),(173,34,'Karo'),(174,14,'Katingan'),(175,4,'Kaur'),(176,12,'Kayong Utara'),(177,10,'Kebumen'),(178,11,'Kediri'),(179,11,'Kediri'),(180,24,'Keerom'),(181,10,'Kendal'),(182,30,'Kendari'),(183,4,'Kepahiang'),(184,17,'Kepulauan Anambas'),(185,19,'Kepulauan Aru'),(186,32,'Kepulauan Mentawai'),(187,26,'Kepulauan Meranti'),(188,31,'Kepulauan Sangihe'),(189,6,'Kepulauan Seribu'),(190,31,'Kepulauan Siau Tagulandang Biaro (Sitaro)'),(191,20,'Kepulauan Sula'),(192,31,'Kepulauan Talaud'),(193,24,'Kepulauan Yapen (Yapen Waropen)'),(194,8,'Kerinci'),(195,12,'Ketapang'),(196,10,'Klaten'),(197,1,'Klungkung'),(198,30,'Kolaka'),(199,30,'Kolaka Utara'),(200,30,'Konawe'),(201,30,'Konawe Selatan'),(202,30,'Konawe Utara'),(203,13,'Kotabaru'),(204,31,'Kotamobagu'),(205,14,'Kotawaringin Barat'),(206,14,'Kotawaringin Timur'),(207,26,'Kuantan Singingi'),(208,12,'Kubu Raya'),(209,10,'Kudus'),(210,5,'Kulon Progo'),(211,9,'Kuningan'),(212,23,'Kupang'),(213,23,'Kupang'),(214,15,'Kutai Barat'),(215,15,'Kutai Kartanegara'),(216,15,'Kutai Timur'),(217,34,'Labuhan Batu'),(218,34,'Labuhan Batu Selatan'),(219,34,'Labuhan Batu Utara'),(220,33,'Lahat'),(221,14,'Lamandau'),(222,11,'Lamongan'),(223,18,'Lampung Barat'),(224,18,'Lampung Selatan'),(225,18,'Lampung Tengah'),(226,18,'Lampung Timur'),(227,18,'Lampung Utara'),(228,12,'Landak'),(229,34,'Langkat'),(230,21,'Langsa'),(231,24,'Lanny Jaya'),(232,3,'Lebak'),(233,4,'Lebong'),(234,23,'Lembata'),(235,21,'Lhokseumawe'),(236,32,'Lima Puluh Koto/Kota'),(237,17,'Lingga'),(238,22,'Lombok Barat'),(239,22,'Lombok Tengah'),(240,22,'Lombok Timur'),(241,22,'Lombok Utara'),(242,33,'Lubuk Linggau'),(243,11,'Lumajang'),(244,28,'Luwu'),(245,28,'Luwu Timur'),(246,28,'Luwu Utara'),(247,11,'Madiun'),(248,11,'Madiun'),(249,10,'Magelang'),(250,10,'Magelang'),(251,11,'Magetan'),(252,9,'Majalengka'),(253,27,'Majene'),(254,28,'Makassar'),(255,11,'Malang'),(256,11,'Malang'),(257,16,'Malinau'),(258,19,'Maluku Barat Daya'),(259,19,'Maluku Tengah'),(260,19,'Maluku Tenggara'),(261,19,'Maluku Tenggara Barat'),(262,27,'Mamasa'),(263,24,'Mamberamo Raya'),(264,24,'Mamberamo Tengah'),(265,27,'Mamuju'),(266,27,'Mamuju Utara'),(267,31,'Manado'),(268,34,'Mandailing Natal'),(269,23,'Manggarai'),(270,23,'Manggarai Barat'),(271,23,'Manggarai Timur'),(272,25,'Manokwari'),(273,25,'Manokwari Selatan'),(274,24,'Mappi'),(275,28,'Maros'),(276,22,'Mataram'),(277,25,'Maybrat'),(278,34,'Medan'),(279,12,'Melawi'),(280,8,'Merangin'),(281,24,'Merauke'),(282,18,'Mesuji'),(283,18,'Metro'),(284,24,'Mimika'),(285,31,'Minahasa'),(286,31,'Minahasa Selatan'),(287,31,'Minahasa Tenggara'),(288,31,'Minahasa Utara'),(289,11,'Mojokerto'),(290,11,'Mojokerto'),(291,29,'Morowali'),(292,33,'Muara Enim'),(293,8,'Muaro Jambi'),(294,4,'Muko Muko'),(295,30,'Muna'),(296,14,'Murung Raya'),(297,33,'Musi Banyuasin'),(298,33,'Musi Rawas'),(299,24,'Nabire'),(300,21,'Nagan Raya'),(301,23,'Nagekeo'),(302,17,'Natuna'),(303,24,'Nduga'),(304,23,'Ngada'),(305,11,'Nganjuk'),(306,11,'Ngawi'),(307,34,'Nias'),(308,34,'Nias Barat'),(309,34,'Nias Selatan'),(310,34,'Nias Utara'),(311,16,'Nunukan'),(312,33,'Ogan Ilir'),(313,33,'Ogan Komering Ilir'),(314,33,'Ogan Komering Ulu'),(315,33,'Ogan Komering Ulu Selatan'),(316,33,'Ogan Komering Ulu Timur'),(317,11,'Pacitan'),(318,32,'Padang'),(319,34,'Padang Lawas'),(320,34,'Padang Lawas Utara'),(321,32,'Padang Panjang'),(322,32,'Padang Pariaman'),(323,34,'Padang Sidempuan'),(324,33,'Pagar Alam'),(325,34,'Pakpak Bharat'),(326,14,'Palangka Raya'),(327,33,'Palembang'),(328,28,'Palopo'),(329,29,'Palu'),(330,11,'Pamekasan'),(331,3,'Pandeglang'),(332,9,'Pangandaran'),(333,28,'Pangkajene Kepulauan'),(334,2,'Pangkal Pinang'),(335,24,'Paniai'),(336,28,'Parepare'),(337,32,'Pariaman'),(338,29,'Parigi Moutong'),(339,32,'Pasaman'),(340,32,'Pasaman Barat'),(341,15,'Paser'),(342,11,'Pasuruan'),(343,11,'Pasuruan'),(344,10,'Pati'),(345,32,'Payakumbuh'),(346,25,'Pegunungan Arfak'),(347,24,'Pegunungan Bintang'),(348,10,'Pekalongan'),(349,10,'Pekalongan'),(350,26,'Pekanbaru'),(351,26,'Pelalawan'),(352,10,'Pemalang'),(353,34,'Pematang Siantar'),(354,15,'Penajam Paser Utara'),(355,18,'Pesawaran'),(356,18,'Pesisir Barat'),(357,32,'Pesisir Selatan'),(358,21,'Pidie'),(359,21,'Pidie Jaya'),(360,28,'Pinrang'),(361,7,'Pohuwato'),(362,27,'Polewali Mandar'),(363,11,'Ponorogo'),(364,12,'Pontianak'),(365,12,'Pontianak'),(366,29,'Poso'),(367,33,'Prabumulih'),(368,18,'Pringsewu'),(369,11,'Probolinggo'),(370,11,'Probolinggo'),(371,14,'Pulang Pisau'),(372,20,'Pulau Morotai'),(373,24,'Puncak'),(374,24,'Puncak Jaya'),(375,10,'Purbalingga'),(376,9,'Purwakarta'),(377,10,'Purworejo'),(378,25,'Raja Ampat'),(379,4,'Rejang Lebong'),(380,10,'Rembang'),(381,26,'Rokan Hilir'),(382,26,'Rokan Hulu'),(383,23,'Rote Ndao'),(384,21,'Sabang'),(385,23,'Sabu Raijua'),(386,10,'Salatiga'),(387,15,'Samarinda'),(388,12,'Sambas'),(389,34,'Samosir'),(390,11,'Sampang'),(391,12,'Sanggau'),(392,24,'Sarmi'),(393,8,'Sarolangun'),(394,32,'Sawah Lunto'),(395,12,'Sekadau'),(396,28,'Selayar (Kepulauan Selayar)'),(397,4,'Seluma'),(398,10,'Semarang'),(399,10,'Semarang'),(400,19,'Seram Bagian Barat'),(401,19,'Seram Bagian Timur'),(402,3,'Serang'),(403,3,'Serang'),(404,34,'Serdang Bedagai'),(405,14,'Seruyan'),(406,26,'Siak'),(407,34,'Sibolga'),(408,28,'Sidenreng Rappang/Rapang'),(409,11,'Sidoarjo'),(410,29,'Sigi'),(411,32,'Sijunjung (Sawah Lunto Sijunjung)'),(412,23,'Sikka'),(413,34,'Simalungun'),(414,21,'Simeulue'),(415,12,'Singkawang'),(416,28,'Sinjai'),(417,12,'Sintang'),(418,11,'Situbondo'),(419,5,'Sleman'),(420,32,'Solok'),(421,32,'Solok'),(422,32,'Solok Selatan'),(423,28,'Soppeng'),(424,25,'Sorong'),(425,25,'Sorong'),(426,25,'Sorong Selatan'),(427,10,'Sragen'),(428,9,'Subang'),(429,21,'Subulussalam'),(430,9,'Sukabumi'),(431,9,'Sukabumi'),(432,14,'Sukamara'),(433,10,'Sukoharjo'),(434,23,'Sumba Barat'),(435,23,'Sumba Barat Daya'),(436,23,'Sumba Tengah'),(437,23,'Sumba Timur'),(438,22,'Sumbawa'),(439,22,'Sumbawa Barat'),(440,9,'Sumedang'),(441,11,'Sumenep'),(442,8,'Sungaipenuh'),(443,24,'Supiori'),(444,11,'Surabaya'),(445,10,'Surakarta (Solo)'),(446,13,'Tabalong'),(447,1,'Tabanan'),(448,28,'Takalar'),(449,25,'Tambrauw'),(450,16,'Tana Tidung'),(451,28,'Tana Toraja'),(452,13,'Tanah Bumbu'),(453,32,'Tanah Datar'),(454,13,'Tanah Laut'),(455,3,'Tangerang'),(456,3,'Tangerang'),(457,3,'Tangerang Selatan'),(458,18,'Tanggamus'),(459,34,'Tanjung Balai'),(460,8,'Tanjung Jabung Barat'),(461,8,'Tanjung Jabung Timur'),(462,17,'Tanjung Pinang'),(463,34,'Tapanuli Selatan'),(464,34,'Tapanuli Tengah'),(465,34,'Tapanuli Utara'),(466,13,'Tapin'),(467,16,'Tarakan'),(468,9,'Tasikmalaya'),(469,9,'Tasikmalaya'),(470,34,'Tebing Tinggi'),(471,8,'Tebo'),(472,10,'Tegal'),(473,10,'Tegal'),(474,25,'Teluk Bintuni'),(475,25,'Teluk Wondama'),(476,10,'Temanggung'),(477,20,'Ternate'),(478,20,'Tidore Kepulauan'),(479,23,'Timor Tengah Selatan'),(480,23,'Timor Tengah Utara'),(481,34,'Toba Samosir'),(482,29,'Tojo Una-Una'),(483,29,'Toli-Toli'),(484,24,'Tolikara'),(485,31,'Tomohon'),(486,28,'Toraja Utara'),(487,11,'Trenggalek'),(488,19,'Tual'),(489,11,'Tuban'),(490,18,'Tulang Bawang'),(491,18,'Tulang Bawang Barat'),(492,11,'Tulungagung'),(493,28,'Wajo'),(494,30,'Wakatobi'),(495,24,'Waropen'),(496,18,'Way Kanan'),(497,10,'Wonogiri'),(498,10,'Wonosobo'),(499,24,'Yahukimo'),(500,24,'Yalimo'),(501,5,'Yogyakarta');

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `id_buah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_buah` varchar(100) NOT NULL,
  `jenis_buah` varchar(45) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_reseller` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `tgl_datang` date DEFAULT NULL,
  `kadaluarsa` date DEFAULT NULL,
  `foto` text NOT NULL,
  `foto_type` char(10) NOT NULL,
  PRIMARY KEY (`id_buah`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `produk` */

insert  into `produk`(`id_buah`,`nama_buah`,`jenis_buah`,`deskripsi`,`harga_beli`,`harga_jual`,`harga_reseller`,`stok`,`satuan`,`supplier_id`,`tgl_datang`,`kadaluarsa`,`foto`,`foto_type`) values (1,'Anting Swarovski Petite Irish Aurore Earring',NULL,'<p>Ukuran Hati : 10 mm<br>Warna Hati : Aurore Boreale*<br>Ear Post : Jewelry Grade Stainless Steel<br>Komponen Lain : Double Coated Silver Plated Wire<br>Kelengkapan : Belakangan Anting, Sertifikat, Tempat Penyimpanan<br><br>Irish Collection adalah perhiasan menggunakan Swarovski Kristal berbentuk hati dari AR Hestia. Petite Irish Collection merupaka pilihan tepat untuk Anda yang suka penampilan simpel tapi tetap elegant.<br><br>Irish Collection merupakan line product favorit konsumen AR Hestia. Bentuk hati merupakan lambang Kasih Sayang. Berbagai macam koleksi warna kami hadirkan melalui Irish Collection. Irish Collection merupakan pilihan tepat jika anda menginginkan penampilan sehari-hari sederhana, manis, dan elegant.</p>',590000,55000,41300,0,NULL,NULL,'2019-04-01','2019-05-02','perhiasan-anting-swarovski-petite-irish-aurore-earring20171206143431','.jpg'),(2,'Anting Swarovski',NULL,'<p>Ukuran Hati : 10 mm<br>Warna Hati : Vitrail Light (Ungu ke Biru Muda)<br>Ear Post : Jewelry Grade Stainless Steel<br>Komponen Lain : Double Coated Silver Plated Wire<br>Kelengkapan : Anting, Belakangan Anting, Sertifikat, Tempat Penyimpanan</p>',40001,45002,42003,75,NULL,NULL,'2019-04-01','2019-05-02','perhiasan-anting-swarovski-petite-irish-vitrail-earring20171206143332','.jpg'),(14,'Nanas Kecil',NULL,'<p>Nanas Murah</p>',15000,17000,16500,55,NULL,NULL,'2019-04-01','2019-05-02','nanas-kecil20190310125041','.jpg'),(15,'Nanas Besar',NULL,'',15000,17000,16500,100,'box',1,'2019-04-01','2019-05-02','nanas-besar20190329050033','.jpg'),(16,'Nanas',NULL,'<p>fd</p>',15000,18000,16000,100,'2019-04-02',1,'0000-00-00','2019-04-27','nanas20190404192021','.jpg');

/*Table structure for table `provinsi` */

DROP TABLE IF EXISTS `provinsi`;

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `provinsi` */

insert  into `provinsi`(`id_provinsi`,`nama_provinsi`) values (1,'Bali'),(2,'Bangka Belitung'),(3,'Banten'),(4,'Bengkulu'),(5,'DI Yogyakarta'),(6,'DKI Jakarta'),(7,'Gorontalo'),(8,'Jambi'),(9,'Jawa Barat'),(10,'Jawa Tengah'),(11,'Jawa Timur'),(12,'Kalimantan Barat'),(13,'Kalimantan Selatan'),(14,'Kalimantan Tengah'),(15,'Kalimantan Timur'),(16,'Kalimantan Utara'),(17,'Kepulauan Riau'),(18,'Lampung'),(19,'Maluku'),(20,'Maluku Utara'),(21,'Nanggroe Aceh Darussalam (NAD)'),(22,'Nusa Tenggara Barat (NTB)'),(23,'Nusa Tenggara Timur (NTT)'),(24,'Papua'),(25,'Papua Barat'),(26,'Riau'),(27,'Sulawesi Barat'),(28,'Sulawesi Selatan'),(29,'Sulawesi Tengah'),(30,'Sulawesi Tenggara'),(31,'Sulawesi Utara'),(32,'Sumatera Barat'),(33,'Sumatera Selatan'),(34,'Sumatera Utara');

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `no_urut` int(11) NOT NULL,
  `judul_slider` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `foto` text NOT NULL,
  `foto_type` char(10) NOT NULL,
  `foto_size` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` char(50) NOT NULL,
  `modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` char(50) NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `slider` */

insert  into `slider`(`id_slider`,`no_urut`,`judul_slider`,`link`,`foto`,`foto_type`,`foto_size`,`created`,`created_by`,`modified`,`modified_by`) values (2,1,'Hat for Men','asdasd','hat-for-men20190404191621','.jpg',833,'2017-11-25 08:05:03','','2019-04-04 19:17:37','superadmin'),(4,2,'faf','f','420190403132021','.jpg',0,'2019-04-03 13:20:21','superadmin','2019-04-04 19:17:42','superadmin'),(5,3,'sample','#','320190404191802','.jpg',0,'2019-04-04 19:18:03','superadmin',NULL,''),(6,5,'mm',NULL,'520190410185610','.jpg',0,'2019-04-10 18:56:10','superadmin',NULL,'');

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `supplier` */

insert  into `supplier`(`id`,`name`,`phone`,`email`,`address`,`created`) values (1,'Muhammad Abdul Hamid','081330369977','hamidbanyuwangi@gmail.com','','2019-03-28 20:03:19');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_trans` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ongkir` int(11) NOT NULL,
  `kurir` char(20) NOT NULL,
  `service` char(50) NOT NULL,
  `status` int(11) NOT NULL,
  `resi` char(50) DEFAULT NULL,
  PRIMARY KEY (`id_trans`),
  KEY `FK_transaksi_users` (`user_id`),
  CONSTRAINT `FK_transaksi_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

/*Table structure for table `transaksi_detail` */

DROP TABLE IF EXISTS `transaksi_detail`;

CREATE TABLE `transaksi_detail` (
  `id_transdet` int(11) NOT NULL AUTO_INCREMENT,
  `trans_id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_berat` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  PRIMARY KEY (`id_transdet`),
  KEY `FK_transaksi_detail_transaksi` (`trans_id`),
  KEY `FK_transaksi_detail_produk` (`produk_id`),
  KEY `FK_transaksi_detail_users` (`user`),
  CONSTRAINT `FK_transaksi_detail_produk` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id_buah`),
  CONSTRAINT `FK_transaksi_detail_transaksi` FOREIGN KEY (`trans_id`) REFERENCES `transaksi` (`id_trans`),
  CONSTRAINT `FK_transaksi_detail_users` FOREIGN KEY (`user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi_detail` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `provinsi` int(11) DEFAULT NULL,
  `kota` int(11) DEFAULT NULL,
  `address` text NOT NULL,
  `usertype` int(11) NOT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `photo` text,
  `photo_type` varchar(10) DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `last_login` int(11) DEFAULT NULL,
  `created_on` int(11) NOT NULL,
  `modified` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_users_users_group` (`usertype`),
  KEY `kota` (`kota`),
  KEY `provinsi` (`provinsi`),
  CONSTRAINT `FK_users_users_group` FOREIGN KEY (`usertype`) REFERENCES `users_group` (`id_group`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`kota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`username`,`password`,`email`,`phone`,`provinsi`,`kota`,`address`,`usertype`,`active`,`photo`,`photo_type`,`ip_address`,`salt`,`activation_code`,`forgotten_password_code`,`forgotten_password_time`,`remember_code`,`last_login`,`created_on`,`modified`) values (1,'Super Admin','superadmin','$2y$08$D8i7zeJSUQulCZKsx/FKGul8ZwWcBxcCGL34/J6Ipzs228xyS9TSG','azmicolejr@gmail.com','081228289766',6,151,'asdasdasdsa',1,1,'mazmi20180205001726','.jpg','::1',NULL,'c6ad242e6fd3de875568c7de5ba23af4a24137ef','HhFOZk3TMjY6njEY8wfBiea50e1717cfd64c6435',1519646514,NULL,1554896550,2147483647,'2019-04-10 18:42:30'),(4,'Administrator','administrator','$2y$08$xBMGyo7OYY/49AsEPDLlQ.0eEnOsx0ohIr9UR9rfqtoog7tYDRDde','admin@gmail.com','08214124',6,151,'akldjlasdj',2,1,'administrator20180210234128','.png','::1',NULL,NULL,NULL,NULL,NULL,0,2147483647,'2018-03-03 19:01:26');

/*Table structure for table `users_group` */

DROP TABLE IF EXISTS `users_group`;

CREATE TABLE `users_group` (
  `id_group` int(11) NOT NULL AUTO_INCREMENT,
  `name_group` varchar(20) NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `users_group` */

insert  into `users_group`(`id_group`,`name_group`) values (1,'superadmin'),(2,'admin'),(3,'pembeli'),(4,'reseller'),(5,'pegawai');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
