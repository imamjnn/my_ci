-- MySQL dump 10.13  Distrib 5.7.17, for osx10.12 (x86_64)
--
-- Host: localhost    Database: my_ci
-- ------------------------------------------------------
-- Server version	5.7.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,NULL,'MotoGP Jerez: Pedrosa Juara, Pembalap Spanyol Dominasi Podium','motogp-jerez-pedrosa-juara-pembalap-spanyol-dominasi-podium','<p>Kabaroto.com - Pembalap Repsol Honda, Dani Pedrosa mempertahankan posisi pole hingga berakhirnya balapan 27 lap MotoGP Spanyol, Minggu (7/5). Sementara itu, rider andalan Ducati, Jorge Lorenzo tampil tak seperti biasanya. Pedrosa sudah tampil memukau sejak latihan bebas pada Jumat (5/5). Rider 31 tahun itu juga sukses menjadi yang tercepat dalam sesi kualifikasi. Kegemilangan itu terus berlanjut selama perlombaan. Sempat bersaing ketat dengan rekan setim, Marc Marquez, Pedrosa akhirnya tak terkejar sampai garis finis. Marquez sendiri akhirnya harus puas menempati posisi kedua. Yang menjadi kejutan tentu saja Lorenzo.</p>\r\n<p><img title=\"ktm.jpg\" src=\"../../media/1501813515/1450c2528d0581abdabefb28879ad8b6.jpg\" alt=\"motogp\" width=\"620\" height=\"413\" />Betapa tidak, selama hampir sepanjang awal musim ini, mulai dari uji coba pra musim hingga seri ketiga, mantan pembalap Yamaha itu kesulitan menempati jajaran teratas. Memang, seperti telah dikatakan Lorenzo sebelumnya, ia begitu termotivasi karena akan tampil di hadapan pendukungnya sendiri. Maka finis ketiga adalah sesuatu yang bisa diberikan Lorenzo kepada fansnya. Nasib sial justru menimpa sang pimpinan klasemen sementara, Valentino Rossi. Setelah memiliki masalah kecepatan saat latihan bebas, Rossi akhirnya benar-benar tak bisa memaksimalkan performa motornya dan hanya mampu berada di urutan ke-10. Rider Movistar Yamaha lainnya, Maverick Vinales, lebih beruntung dari Rossi. Pembalap muda asal Spanyol itu masih bisa bersaing di barisan terdepan meski akhirnya menyelesaikan balap di peringkat enam.</p>','/media/1501741092/b163f6d9b9aabd0af9b1868b0c7d997c.jpg','2017-08-03 06:18:14'),(2,NULL,'mencoba bikin slug','mencoba-bikin-slug','coba Ja','','2017-08-03 07:31:34'),(3,NULL,'maniak sekali kamu','maniak-sekali-kamu','bannget deh','','2017-08-03 08:06:44'),(4,NULL,'maniak sekali kamu','maniak-sekali-kamu','ahhhhhh','','2017-08-03 08:07:17'),(5,NULL,'hjh jhjh hjhjhj','hjh-jhjh-hjhjhj','','','2017-08-03 08:33:28'),(6,NULL,'asd asdsa','asd-asdsa','','','2017-08-03 08:33:59');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `article_category`
--

LOCK TABLES `article_category` WRITE;
/*!40000 ALTER TABLE `article_category` DISABLE KEYS */;
INSERT INTO `article_category` VALUES (1,'CatOne',NULL,NULL,'2017-08-04 07:32:29'),(2,'CatTwo',NULL,NULL,'2017-08-04 07:33:08');
/*!40000 ALTER TABLE `article_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `demo`
--

LOCK TABLES `demo` WRITE;
/*!40000 ALTER TABLE `demo` DISABLE KEYS */;
INSERT INTO `demo` VALUES (60,'asdsad','/media/1501561629/713de2cc13d0eca38f38d734c5e71b5d.jpg','asdsadsa','2017-08-01 04:27:11'),(61,'asdsa','/media/1501561662/95ae012a8483423f855f3d36ad302e4e.jpg','asdsadas','2017-08-01 04:27:43'),(62,'qweq','/media/1501561687/189963f67e41a699f35b299e7490933b.jpg','qweqwe','2017-08-01 04:28:11'),(64,'asdasd','/media/1501572215/a4b7ffa089a5fa71cb7b6887217e81a3.jpg','asdsadsa','2017-08-01 07:23:36');
/*!40000 ALTER TABLE `demo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'8507a15a7f5069bf4555a5d579c59c5d.jpg','grunt.jpg','media/8507a15a7f5069bf4555a5d579c59c5d.jpg','2017-07-25 02:35:11'),(2,'aadf83d750a02a997660357c3397d435.jpg','grunt.jpg','media/aadf83d750a02a997660357c3397d435.jpg','2017-07-25 02:38:57'),(3,'102951d802a4282a9d6706c797a28d06.jpg','grunt.jpg','media/102951d802a4282a9d6706c797a28d06.jpg','2017-07-25 02:48:12'),(4,'08893599764764db708ec751b434e889.jpg','grunt.jpg','media/08893599764764db708ec751b434e889.jpg','2017-07-25 03:07:21'),(5,'4814ee6085fac23804375d964af2adc3.jpg','grunt.jpg','media/4814ee6085fac23804375d964af2adc3.jpg','2017-07-25 03:26:09'),(6,'85ab36eec440fc4cad5d41b3b762b60e.jpg','grunt.jpg','media/1500953330/85ab36eec440fc4cad5d41b3b762b60e.jpg','2017-07-25 03:28:50'),(7,'86857dec2384e2527ef5f064c41ca7f3.jpg','ktm.jpg','media/1501495112/86857dec2384e2527ef5f064c41ca7f3.jpg','2017-07-31 09:58:32'),(8,'69537ab00ac32ef3c59d6afd960f3492.jpg','MotoGP_15_3.jpg','media/1501495209/69537ab00ac32ef3c59d6afd960f3492.jpg','2017-07-31 10:00:09'),(9,'daebe383bfb4df92843a7be6a5e88944.jpg','MotoGP_15_3.jpg','media/1501495605/daebe383bfb4df92843a7be6a5e88944.jpg','2017-07-31 10:06:45'),(10,'70e69be1a333e89784211bcbe7126f71.jpg','MotoGP_15_3.jpg','media/1501495622/70e69be1a333e89784211bcbe7126f71.jpg','2017-07-31 10:07:02'),(11,'a19fca367c531c390387dc4d07a06243.jpg','ktm.jpg','media/1501496230/a19fca367c531c390387dc4d07a06243.jpg','2017-07-31 10:17:10'),(12,'0fe49b61d7bd51845cf6abd111714c2e.jpg','ktm.jpg','media/1501496258/0fe49b61d7bd51845cf6abd111714c2e.jpg','2017-07-31 10:17:38'),(13,'10e00d1ff1387777f52a5ec8c59af414.jpg','ktm.jpg','media/1501496679/10e00d1ff1387777f52a5ec8c59af414.jpg','2017-07-31 10:24:39'),(14,'e1415c906c54ad0380bdf07b99ac7f76.jpg','ktm.jpg','media/1501496703/e1415c906c54ad0380bdf07b99ac7f76.jpg','2017-07-31 10:25:03'),(15,'0cb49f9ed0a4f0beb0dd9390045c5654.jpg','MotoGP_15_3.jpg','media/1501496785/0cb49f9ed0a4f0beb0dd9390045c5654.jpg','2017-07-31 10:26:25'),(16,'cfdb8c635daee529035573e424cfc7a1.jpg','ktm.jpg','media/1501496880/cfdb8c635daee529035573e424cfc7a1.jpg','2017-07-31 10:28:00'),(17,'31f68d00a5db10dfa61b969a65628a34.jpg','ktm.jpg','media/1501497068/31f68d00a5db10dfa61b969a65628a34.jpg','2017-07-31 10:31:08'),(18,'18d5bd78c2dd38a0eb7ec86f3ee8fa34.jpg','MotoGP_15_3.jpg','media/1501497101/18d5bd78c2dd38a0eb7ec86f3ee8fa34.jpg','2017-07-31 10:31:41'),(19,'6981a97407b6f2822786812a7e3bb130.jpg','MotoGP_15_3.jpg','media/1501497379/6981a97407b6f2822786812a7e3bb130.jpg','2017-07-31 10:36:19'),(20,'e99a13349d1bc97cd3b80cfff0df4620.jpg','MotoGP_15_3.jpg','media/1501498924/e99a13349d1bc97cd3b80cfff0df4620.jpg','2017-07-31 11:02:04'),(21,'5ef2fe3c7e0eda37be1c1c724bb87640.jpg','MotoGP_15_3.jpg','media/1501554782/5ef2fe3c7e0eda37be1c1c724bb87640.jpg','2017-08-01 02:33:02'),(22,'7e7da0c026a037aa2a4c22c52791a4ad.jpg','MotoGP_15_3.jpg','media/1501556348/7e7da0c026a037aa2a4c22c52791a4ad.jpg','2017-08-01 02:59:08'),(23,'f9245c38312b95db1c594a7df860bb58.jpg','motogp_17_rossi_marquez.jpg','media/1501556526/f9245c38312b95db1c594a7df860bb58.jpg','2017-08-01 03:02:06'),(24,'b42c4d1f0a30ea6dfe477fdac5285471.jpg','ktm.jpg','media/1501556578/b42c4d1f0a30ea6dfe477fdac5285471.jpg','2017-08-01 03:02:58'),(25,'3538b4e0faaf98cb2db60ec5581fcdb0.jpg','ktm.jpg','media/1501556788/3538b4e0faaf98cb2db60ec5581fcdb0.jpg','2017-08-01 03:06:28'),(26,'7e6899a35180149f57337b22a74b0f71.jpg','ktm.jpg','media/1501557070/7e6899a35180149f57337b22a74b0f71.jpg','2017-08-01 03:11:10'),(27,'8d1949cddd0270cfc430ab1254dc92c9.jpg','MotoGP_15_3.jpg','media/1501557126/8d1949cddd0270cfc430ab1254dc92c9.jpg','2017-08-01 03:12:06'),(28,'de3c9a7ce09d416c792f4918aec5084c.jpg','MotoGP_15_3.jpg','media/1501557158/de3c9a7ce09d416c792f4918aec5084c.jpg','2017-08-01 03:12:38'),(29,'5a9920a527d2dbc1bca4b4a74d42d233.jpg','ktm.jpg','media/1501557315/5a9920a527d2dbc1bca4b4a74d42d233.jpg','2017-08-01 03:15:15'),(30,'15dffed50c5659d71cdbad48c0068b3d.jpg','ktm.jpg','media/1501557491/15dffed50c5659d71cdbad48c0068b3d.jpg','2017-08-01 03:18:11'),(31,'b722981900b4fb70c7d8023985328c00.jpg','MotoGP_15_3.jpg','media/1501558042/b722981900b4fb70c7d8023985328c00.jpg','2017-08-01 03:27:22'),(32,'1c6d61787cbdb3f77b56a2fdf42ad6c0.jpg','ktm.jpg','media/1501559193/1c6d61787cbdb3f77b56a2fdf42ad6c0.jpg','2017-08-01 03:46:33'),(33,'74ef5da8424ced42b7727ff4f495d280.jpg','MotoGP_15_3.jpg','/media/1501559341/74ef5da8424ced42b7727ff4f495d280.jpg','2017-08-01 03:49:01'),(34,'23fb821fafd2203422fadec98d25d850.jpg','ktm.jpg','/media/1501559368/23fb821fafd2203422fadec98d25d850.jpg','2017-08-01 03:49:28'),(35,'338911b6cbd0c9aa57e338e6e4534769.jpg','motogp_17_rossi_marquez.jpg','/media/1501559377/338911b6cbd0c9aa57e338e6e4534769.jpg','2017-08-01 03:49:37'),(36,'9678cf042930aa3307259c595bf84329.jpg','motogp_17_rossi_marquez.jpg','/media/1501559450/9678cf042930aa3307259c595bf84329.jpg','2017-08-01 03:50:50'),(37,'5bc0b4af1c4bd3366b8bd6ce0570b332.jpg','MotoGP_15_3.jpg','/media/1501559504/5bc0b4af1c4bd3366b8bd6ce0570b332.jpg','2017-08-01 03:51:44'),(38,'a69602d9349a69589329226726228417.jpg','motogp_17_rossi_marquez.jpg','/media/1501560363/a69602d9349a69589329226726228417.jpg','2017-08-01 04:06:03'),(39,'4fbfc38a9d23e6a161045bea772d7418.jpg','motogp_17_rossi_marquez.jpg','/media/1501560472/4fbfc38a9d23e6a161045bea772d7418.jpg','2017-08-01 04:07:52'),(40,'88cd9d73f34f25d775765bb3cebac4b0.jpg','MotoGP_15_3.jpg','/media/1501560533/88cd9d73f34f25d775765bb3cebac4b0.jpg','2017-08-01 04:08:53'),(41,'b803d787a40818b212e8aa993ce15ec8.jpg','ktm.jpg','/media/1501560614/b803d787a40818b212e8aa993ce15ec8.jpg','2017-08-01 04:10:14'),(42,'7ce3ae855b8a0bf0e0f1b8f96a71e802.jpg','motogp_17_rossi_marquez.jpg','/media/1501560710/7ce3ae855b8a0bf0e0f1b8f96a71e802.jpg','2017-08-01 04:11:50'),(43,'00245340719cb713543b25aae30d8e39.jpg','ktm.jpg','/media/1501560835/00245340719cb713543b25aae30d8e39.jpg','2017-08-01 04:13:55'),(44,'d91a25d7c1d942af7e0f298c26e28754.jpg','motogp_17_rossi_marquez.jpg','/media/1501561198/d91a25d7c1d942af7e0f298c26e28754.jpg','2017-08-01 04:19:58'),(45,'f9843e8891bb3b20df4816aa92562a0e.jpg','MotoGP_15_3.jpg','/media/1501561372/f9843e8891bb3b20df4816aa92562a0e.jpg','2017-08-01 04:22:52'),(46,'713de2cc13d0eca38f38d734c5e71b5d.jpg','MotoGP_15_3.jpg','/media/1501561629/713de2cc13d0eca38f38d734c5e71b5d.jpg','2017-08-01 04:27:09'),(47,'9590c72de8d32512e87c84d2d85eb17c.jpg','MotoGP_15_3.jpg','/media/1501561658/9590c72de8d32512e87c84d2d85eb17c.jpg','2017-08-01 04:27:38'),(48,'95ae012a8483423f855f3d36ad302e4e.jpg','ktm.jpg','/media/1501561662/95ae012a8483423f855f3d36ad302e4e.jpg','2017-08-01 04:27:42'),(49,'189963f67e41a699f35b299e7490933b.jpg','motogp_17_rossi_marquez.jpg','/media/1501561687/189963f67e41a699f35b299e7490933b.jpg','2017-08-01 04:28:07'),(50,'c481ff9b22d850f914bc11b166ff7502.jpg','MotoGP_15_3.jpg','/media/1501562049/c481ff9b22d850f914bc11b166ff7502.jpg','2017-08-01 04:34:09'),(51,'c3eb47d7feb46d975f932f0b13d887be.jpg','motogp_17_rossi_marquez.jpg','/media/1501562176/c3eb47d7feb46d975f932f0b13d887be.jpg','2017-08-01 04:36:16'),(52,'68d9d15b00ccf6ce7803b9ed0c7f09fe.jpg','MotoGP_15_3.jpg','/media/1501562596/68d9d15b00ccf6ce7803b9ed0c7f09fe.jpg','2017-08-01 04:43:16'),(53,'4e15239baaf7b24f6ef07bb8c5ddcaaa.jpg','MotoGP_15_3.jpg','/media/1501563251/4e15239baaf7b24f6ef07bb8c5ddcaaa.jpg','2017-08-01 04:54:11'),(54,'a4b7ffa089a5fa71cb7b6887217e81a3.jpg','MotoGP_15_3.jpg','/media/1501572215/a4b7ffa089a5fa71cb7b6887217e81a3.jpg','2017-08-01 07:23:35'),(55,'300cfdde36b937ab1d09b49bc6fe85bf.jpg','motogp_17_rossi_marquez.jpg','/media/1501578768/300cfdde36b937ab1d09b49bc6fe85bf.jpg','2017-08-01 09:12:48'),(56,'f8743158e59b95c981a8961e828572ee.jpg','MotoGP_15_3.jpg','/media/1501578805/f8743158e59b95c981a8961e828572ee.jpg','2017-08-01 09:13:25'),(57,'c80dc7ab92fa994e3d37106222b499b8.jpg','MotoGP_15_3.jpg','/media/1501578840/c80dc7ab92fa994e3d37106222b499b8.jpg','2017-08-01 09:14:00'),(58,'a63163651ab58b3482cb8162d031f0b7.jpg','motogp_17_rossi_marquez.jpg','/media/1501578844/a63163651ab58b3482cb8162d031f0b7.jpg','2017-08-01 09:14:04'),(59,'ffafdcc8c3d57f47f24a174dfee7b5dc.jpg','motogp_17_rossi_marquez.jpg','/media/1501579021/ffafdcc8c3d57f47f24a174dfee7b5dc.jpg','2017-08-01 09:17:01'),(60,'a72d9a072ea74379f12026d55f9fcbff.jpg','MotoGP_15_3.jpg','/media/1501579113/a72d9a072ea74379f12026d55f9fcbff.jpg','2017-08-01 09:18:33'),(61,'ce77acbe377c0b8003d7f520fc849ecb.jpg','motogp_17_rossi_marquez.jpg','/media/1501740964/ce77acbe377c0b8003d7f520fc849ecb.jpg','2017-08-03 06:16:05'),(62,'b163f6d9b9aabd0af9b1868b0c7d997c.jpg','MotoGP_15_3.jpg','/media/1501741092/b163f6d9b9aabd0af9b1868b0c7d997c.jpg','2017-08-03 06:18:12'),(63,'80d0c388e7eb665570831c2470d979f7.jpg','MotoGP_15_3.jpg','/media/1501753937/80d0c388e7eb665570831c2470d979f7.jpg','2017-08-03 09:52:17'),(64,'d19b372c9a386968fac40195dad2c021.jpg','MotoGP_15_3.jpg','/media/1501754524/d19b372c9a386968fac40195dad2c021.jpg','2017-08-03 10:02:04'),(65,'f80a46be8f435aafacc2bcc1212e5eac.jpg','MotoGP_15_3.jpg','/media/1501756442/f80a46be8f435aafacc2bcc1212e5eac.jpg','2017-08-03 10:34:02'),(66,'aa06d6ff2a78ee48ecef414fa6154191.jpg','ktm.jpg','/media/1501756730/aa06d6ff2a78ee48ecef414fa6154191.jpg','2017-08-03 10:38:50'),(67,'131840db7d3c8f7ab9b16d49406a4cd4.jpg','MotoGP_15_3.jpg','/media/1501757107/131840db7d3c8f7ab9b16d49406a4cd4.jpg','2017-08-03 10:45:07'),(68,'61f191cc909d4996af2ba5b593631424.jpg','MotoGP_15_3.jpg','/media/1501757136/61f191cc909d4996af2ba5b593631424.jpg','2017-08-03 10:45:36'),(69,'335bd9a0ad90fc8ca1181b5cafb98483.jpg','ktm.jpg','/media/1501773652/335bd9a0ad90fc8ca1181b5cafb98483.jpg','2017-08-03 15:20:52'),(70,'9944e8090df21b586c030fdad0c696ee.jpg','ktm.jpg','/media/1501773744/9944e8090df21b586c030fdad0c696ee.jpg','2017-08-03 15:22:24'),(71,'f40c185eb32f2326f2c868bbed57ef5e.jpg','MotoGP_15_3.jpg','/media/1501773807/f40c185eb32f2326f2c868bbed57ef5e.jpg','2017-08-03 15:23:27'),(72,'53228b3e2479ac4e921e070e239a75c4.jpg','ktm.jpg','/media/1501774045/53228b3e2479ac4e921e070e239a75c4.jpg','2017-08-03 15:27:25'),(73,'8996040657eff6af4e98c9bde9f1e2b2.jpg','MotoGP_15_3.jpg','/media/1501774248/8996040657eff6af4e98c9bde9f1e2b2.jpg','2017-08-03 15:30:48'),(74,'358c0bb308e94b767a5f4a968a441dc8.jpg','MotoGP_15_3.jpg','/media/1501775425/358c0bb308e94b767a5f4a968a441dc8.jpg','2017-08-03 15:50:25'),(75,'c6d8d24e254df25add4dfa2ae8623132.jpg','ktm.jpg','/media/1501775621/c6d8d24e254df25add4dfa2ae8623132.jpg','2017-08-03 15:53:41'),(76,'88c66368f942a5589b522d5509f81969.jpg','MotoGP_15_3.jpg','/media/1501775832/88c66368f942a5589b522d5509f81969.jpg','2017-08-03 15:57:12'),(77,'0b022b7fb978b616690618a3c176af4e.jpg','MotoGP_15_3.jpg','/media/1501776083/0b022b7fb978b616690618a3c176af4e.jpg','2017-08-03 16:01:23'),(78,'decfdee88b30ef2d76e2b9852d24eb68.jpg','MotoGP_15_3.jpg','/media/1501776282/decfdee88b30ef2d76e2b9852d24eb68.jpg','2017-08-03 16:04:42'),(79,'1450c2528d0581abdabefb28879ad8b6.jpg','ktm.jpg','/media/1501813515/1450c2528d0581abdabefb28879ad8b6.jpg','2017-08-04 02:25:15'),(80,'4098a19692918981bc00d763d97b3954.jpg','ktm.jpg','/media/1501831565/4098a19692918981bc00d763d97b3954.jpg','2017-08-04 07:26:05'),(81,'5a5d11f0ba0b64fee18e9c42dfe415ff.jpg','MotoGP_15_3.jpg','/media/1501831659/5a5d11f0ba0b64fee18e9c42dfe415ff.jpg','2017-08-04 07:27:39');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `site_params`
--

LOCK TABLES `site_params` WRITE;
/*!40000 ALTER TABLE `site_params` DISABLE KEYS */;
INSERT INTO `site_params` VALUES (1,'Site Name','Example.com','2017-08-04 09:19:52'),(2,'Site Description','Description of web','2017-08-04 09:21:20'),(3,'Site Title','Web title','2017-08-04 09:23:09');
/*!40000 ALTER TABLE `site_params` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Admin JNN','admin','21232f297a57a5a743894a0e4a801fc3',NULL,'2017-08-03 02:57:15');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-04 17:28:15
