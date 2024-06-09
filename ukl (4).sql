-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 05:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukl`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ID_PIC` int(11) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `rating` varchar(250) NOT NULL,
  `Image_path` varchar(250) DEFAULT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Penjelasan` varchar(550) DEFAULT NULL,
  `Penjelasan0` varchar(550) NOT NULL,
  `display` varchar(150) DEFAULT NULL,
  `display2` varchar(150) DEFAULT NULL,
  `display3` varchar(150) DEFAULT NULL,
  `Penjelasan2` varchar(550) DEFAULT NULL,
  `Penjelasan3` varchar(550) DEFAULT NULL,
  `Penjelasan4` varchar(550) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ID_PIC`, `Nama`, `rating`, `Image_path`, `Price`, `Penjelasan`, `Penjelasan0`, `display`, `display2`, `display3`, `Penjelasan2`, `Penjelasan3`, `Penjelasan4`) VALUES
(2, 'Modern Warfare 2', '8', 'uploads/Call Of Duty.jpg', 10000.00, 'Call Of Duty: Modern Warfare 2 Adalah Permainan Komputer Penembak Orang Pertama (FPS) Yang Dikembangkan Oleh Infinity Ward Dan Diterbitkan Oleh Activision Untuk Xbox 360 Dan PlayStation 3 Video Game Konsol Dan Sistem Operasi Microsoft Windows Resmi Diumumkan Pada Tanggal 11 Februari, 2009 Game Ini Dirilis Di Seluruh Dunia Pada Tanggal 10 November 2009.', '          game penembak orang pertama tahun 2009 yang dikembangkan oleh Infinity\\\\r\\\\n          Ward dan diterbitkan oleh Activision . Ini adalah seri keenam dalam\\\\r\\\\n          seri Call of Duty dan sekuel langsung dari Call of Duty 4: Modern\\\\r\\\\n          Warfare . Ini dirilis di seluruh dunia pada 10 November 2009, untuk\\\\r\\\\n          Windows , PlayStation 3 , dan Xbox 360 . Versi terpisah untuk Nintendo\\\\r\\\\n          DS , berjudul Modern Warfare: Mobilized , juga dirilis pada hari yang\\\\r\\\\n          sama. Versi untuk OS X dikembangkan ', 'Karakter dan pengaturan', 'Cerita', 'Perkembangan', '        Call of Duty: Modern Warfare 2 terjadi lima tahun setelah peristiwa Call\\\\r\\\\n        of Duty 4: Modern Warfare . Selama kampanye pemain tunggal, pemain\\\\r\\\\n        mengontrol lima karakter berbeda dari sudut pandang orang pertama .\\\\r\\\\n        Pemain terutama mengendalikan Sersan Gary \\\\\\\"Roach\\\\\\\" Sanderson, seorang\\\\r\\\\n        anggota Inggris dari unit pasukan khusus internasional bernama Task\\\\r\\\\n        Force 141. Selain Roach, pemain juga akan mengambil alih kendali\\\\r\\\\n        Prajurit Kelas Satu Joseph Allen dan James Ramir', 'Meskipun peristiwa di pertandingan sebelumnya mencegah perang nuklir,\\\\r\\\\n        kaum Ultranasionalis akhirnya menguasai Rusia dan Imran Zakhaev menjadi\\\\r\\\\n        martir . Akibatnya, hubungan diplomatik dengan Amerika Serikat merosot,\\\\r\\\\n        sementara Vladimir Makarov, seorang ekstremis Ultranasionalis dan anak\\\\r\\\\n        didik Zakhaev, berkomitmen melakukan kampanye balas dendam terhadap\\\\r\\\\n        Barat melalui tindakan terorisme. Pada tahun 2016, Prajurit Kelas Satu\\\\r\\\\n        Joseph Allen mengesankan Letnan Jenderal Angkata', '        Modern Warfare 2 awalnya diumumkan sebagai Call of Duty 6.Game ini\\\\r\\\\n        pertama kali diumumkan dengan judul Call of Duty: Modern Warfare 2 oleh\\\\r\\\\n        Activision pada tanggal 3 Desember 2008.Activision kemudian mencabut\\\\r\\\\n        pengumumannya, dengan menyatakan bahwa informasi apa pun tentang game\\\\r\\\\n        Call of Duty yang akan datang bersifat \\\\\\\"spekulatif\\\\\\\". nfinity Ward\\\\r\\\\n        kemudian menegaskan bahwa pihaknya belum mengonfirmasi secara resmi\\\\r\\\\n        proyek terbarunya saat itu. Pada tanggal 11 Fe'),
(3, 'Flapy Bird', '15', 'uploads/Flapy Bird.png', 15000.00, 'Flappy Bird Adalah Sebuah Permainan Di Android Dan IOS, Yang Dibuat Oleh Seorang Pengembang Dari Hanoi, Vietnam Bernama Nguyen Ha Dong Dan Diluncurkan Pada Bulan Mei 2013.', 'Flappy Bird adalah sebuah permainan di Android dan iOS, yang dibuat oleh seorang pengembang dari Hanoi, Vietnam bernama Nguyen Ha Dong dan diluncurkan pada bulan Mei 2013. Cara bermainnya yakni dengan mengetukkan jari ke layar ponsel pintar untuk membuat si burung terbang, melewati setiap pipa berwarna hijau. Jika waktu ketika mengetuk layar tidak tepat, maka dapat membuat si burung terbang menabrak pipa dan pada akhirnya harus mengulang permainan ini dari awal. Nguyen beralasan bahwa dia menciptakan permainan ini untuk kegiatan bersantai para ', 'Perilisan', 'Penghapusan', 'Permainan', 'Asal usul Flappy Bird mulai terlihat pada tanggal 6 November 2012 ketika Nguyen membagikan gambar di Twitter tentang permainan yang sedang ia kerjakan.Pada gambar itu tampak karakter burung di sebelah kiri gambar yang menjadi cikal-bakal karakter utama Flappy Bird. Namun, pada saat itu Nguyen tidak menyebut judul permainan yang sedang dikerjakan.Kemudian pada 29 April 2013, Nguyen kembali membagikan gambar dari sebuah permainan yang dibuatnya dengan judul Flap Flap untuk Apple iOS.', 'Pada tanggal 8 Februari 2014, Nguyen mengumumkan di Twitter bahwa game tersebut akan dihapus dari Apple App Store dan Google Play, menulis: \"Saya minta maaf pengguna \'Flappy Bird\', 22 jam dari sekarang, saya akan menghapus \'Flappy Bird\'. Saya tidak tahan lagi.\" Dia melanjutkan ke katakan bahwa menghapus game itu \"tidak ada hubungannya dengan masalah hukum\".Game telah dihapus dari kedua Aplikasi Apple Store dan Google Play tepat waktu, membuat banyak penggemar kecewa.', 'membuat banyak penggemar kecewa. Cara memainkan Flappy Bird cukup dengan mengetuk jari ke layar untuk membuat si burung terbang.Bukan hanya sembarang terbang saja, tetapi tantangannya di sini adalah menjaga agar burung tersebut tidak menabrak pipa-pipa hijau dengan cara terbang melalui celah-celahnya.emain akan mendapat skor 1 (satu) jika berhasil melewati satu pipa.Jika waktu ketika mengetuk layar tidak tepat, maka dapat membuat si burung terbang menabrak pipa dan pada akhirnya harus mengulang permainan ini dari awal.'),
(5, 'Growtopia', '8', 'uploads/Growtopia.jpg', 12000.00, 'Growtopia, Commonly Referred To As GT, Is A Massively Multiplayer Online Sandbox Video Game Where Players Can Chat, Farm, Add Friends, Trade, Build Worlds, And Engage In Player Versus Player Combat.The Game Was Initially Released On Android In November 2012, And Has Been Released For IOS, Microsoft Windows, And OS X Since Then. In 2019, It Was Released On Nintendo Switch, PlayStation 4 And Xbox One.The Servers For The Console Versions Were Shut Down On July 30, 2020.', 'Growtopia, commonly referred to as GT, is a massively multiplayer online sandbox video game where players can chat, farm, add friends, trade, build worlds, and engage in player versus player combat. The game was initially released on Android in November 2012, and has been released for iOS, Microsoft Windows, and OS X since then. In 2019, it was released on Nintendo Switch, PlayStation 4 and Xbox One. The servers for the console versions were shut down on July 30, 2020.', 'Development', 'Gameplay', 'Release', 'Growtopia, commonly referred to as GT, is a massively multiplayer online sandbox video game where players can chat, farm, add friends, trade, build worlds, and engage in player versus player combat. The game was initially released on Android in November 2012, and has been released for iOS, Microsoft Windows, and OS X since then. In 2019, it was released on Nintendo Switch, PlayStation 4 and Xbox One. The servers for the console versions were shut down on July 30, 2020.', 'Growtopia, commonly referred to as GT, is a massively multiplayer online sandbox video game where players can chat, farm, add friends, trade, build worlds, and engage in player versus player combat. The game was initially released on Android in November 2012, and has been released for iOS, Microsoft Windows, and OS X since then. In 2019, it was released on Nintendo Switch, PlayStation 4 and Xbox One. The servers for the console versions were shut down on July 30, 2020.', 'Growtopia is a 2D massively multiplayer online sandbox video game based around the idea that most of the in-game items can be grown from seeds of trees. The game has no end goals or 100% completion, however, there is an achievement system and quests to complete from non-player characters.When a new player joins, they are sent to a private world called Tutorial, which teaches them the basics of the game by giving them quests through an item called the Growpedia. The player starts out with two basic tools: a fist for punching and breaking blocks '),
(6, 'Genshin Impact', '', 'uploads/Genshin Impact.jpeg', 35000.00, 'Genshin Impact (Hanzi: 原神, Pinyin: Yuánshén; Jepang: 原神 (Hiragana: げんしん), Romaji: Genshin; Bahasa Korea: 원신, Wonsi). Permainan Ini Dirilis Pada Tanggal 28 September 2020 Di Android, IOS, Windows, Dan PlayStation 4, Serta 28 April 2021 Di Platform PlayStation 5.', 'Genshin Impact (Hanzi: 原神, Pinyin: Yuánshén; Jepang: 原神 (Hiragana: げんしん), Romaji: Genshin; Korea: 원신, Wonsin) adalah permainan video yang dikembangkan dan diterbitkan oleh miHoYo. Permainan ini dirilis pada tanggal 28 September 2020 di Android, iOS, Windows, dan PlayStation 4, serta 28 April 2021 di platform PlayStation 5', 'Alur Game', 'Pertarungan Elemen', 'Genius Invokation TCG', 'Genshin Impact adalah permainan  yang bergenre dunia terbuka (open world) sekaligus bermain peran aksi. Pada permainan ini, pemain memungkinkan untuk mengendalikan salah satu karakter yang dapat digantikan di dalam sebuah party (kelompok). Karakter-karakter yang ditukarkan dapat dilakukan dengan cepat selama melakukan kombat sehingga memungkinkan pemain untuk menggunakan kombinasi kemampuan dan serangan yang berbeda. Karakter yang dapat memiliki kemampuan diperkuat dengan berbagai cara, seperti menaikkan level-nya secara langsung dan memperkuat', 'Karakter yang dapat dimainkan (playable characters) memiliki kemampuan untuk mengendalikan salah satu dari tujuh elemen (atau disebut unsur) alam, di antaranya adalah: Anemo (angin), Geo (tanah), Pyro (api), Hydro (air), Cryo (es), Electro (listrik), dan Dendro (tanaman yang hidup).Ketika unsur-unsur tersebut bereaksi dengan yang lain, hasilnya memberikan macam-acam efek. Sebagai contoh, jika serangan Hydro mengenai suatu target, musuh akan menimbulkan efek status \"Wet\", dan bila selanjutnya dikenai dengan serangan Cryo, kedua efek status ini b', 'Terdapat sebuah permainan kartu dagangan (collectible-card game) yang dimainkan di meja yang bernama Genius Invokation TCG. Ini adalah mode permainan opsional lain yang dirilis dalam pembaruan versi 3.3 pada Desember 2022.ermainan ini menggunakan pertempuran berbasis giliran (turn-based). Dilengkapi dengan kartu yang terdiri atas tiga karakter beserta tiga puluh karakter pendukung, pemain menang dengan mengalahkan semua kartu berupa karakter milik lawan. Masing-masing ronde memerlukan pelemparan dadu yang memaksa pemain untuk menggunakan kartun'),
(7, 'Geometry Dash', '', 'uploads/Geometry Dash.png', 50000.00, 'Geometry Dash Is A Series Of Side Scrolling Music Platforming Video Games Developed By Swedish Developer Robert \"RobTop\" Topala. The Game Was Released On 13 August 2013 On IOS And Android.', 'eometry Dash is a side-scrolling music platforming game series developed by Robert Topala. The game was released on 13 August 2013 on iOS and Android, and the Windows and macOS versions on 22 December 2014. In Geometry Dash, players control the movement of an icon and navigate music-based levels while avoiding obstacles such as spikes.', 'Gameplay', 'Reception', 'Pre-Geometry Dash', 'As a single-button game, Geometry Dash can be played with a touchscreen, keyboard, mouse, or controller. The player manipulates the movement of their icon through input in the form of pressing or holding to reach the end of a level. The level restarts if the player crashes into an obstacle, such as a spike, a sawblade, a wall, or a ceiling. There is a \'practice mode\' in which a player may place checkpoints to survey or practice a level but is unable to collect coins or gain progress for normal mode. The timing and rhythm of the in-game music ar', 'The game received generally positive reviews from critics. Softpedia complimented the game\'s style and challenge that it brings up, saying, \'While it can get a bit frustrating sometimes, you can always complete the stages using the practice mode and then jump into the many different user-generated levels\'.148Apps gave the game a positive review, stating, \'Geometry Dash provides all of the challenge expected from an \'impossible\' game while also making it more accessible to newcomers\'.Geometry Dash has also been listed by the reviewer Chris Morri', 'Geometry Dash was created by Swedish video game developer Robert Nicholas Christian Topala (born 23 February 1987), known professionally as RobTop. On 6 June 2010, Topala created his first video game, Bounce Ball Thingy, on Newgrounds, developing it while he was at university studying civil engineering. He later abandoned his course because he became more interested in the video game industry.'),
(9, 'Mobile Legends', '2', 'uploads/Mobile Legend.png', 25000.00, 'Dirilis Pada Tahun 2016, Game Ini Semakin Populer Di Seluruh Dunia, Terutama Di Wilayah Asia Tenggara, Dan Sejak Itu Telah Melampaui 1 Miliar Kali Unduhan, Dengan Puncak Pemain Bulanan Sebanyak 100 Juta.', 'Mobile Legends: Bang Bang adalah permainan video seluler ber-genre multiplayer online battle arena (MOBA) yang dikembangkan dan diterbitkan oleh Moonton, anak perusahaan dari ByteDance.\r\n            Dirilis pada tahun 2016, game ini semakin populer di seluruh dunia, terutama di wilayah Asia Tenggara, dan sejak itu telah melampaui 1 miliar kali unduhan, dengan puncak pemain bulanan sebanyak 100 juta. Pada tahun 2021, \"Mobile Legends: Bang Bang\" mencapai pendapatan kotor sepanjang masa sebesar US$1 miliar dengan 44 persen pendapatannya berasal da', 'Alur Game', 'Kontroversi hak cipta', 'Karakter', 'Mobile Legends adalah permainan MOBA yang dirancang untuk ponsel. Kedua tim masing-masing berisi lima orang berjuang untuk mencapai dan menghancurkan markas musuh sambil mempertahankan markas mereka sendiri untuk mengendalikan tiga jalur, yang dikenal sebagai jalur \"atas\", \"tengah\" dan \"bawah\", yang menghubung ke setiap markas.', 'Riot Games (anak usaha dari Tencent dan perusahaan saudara dari TiMi Studio yang mengembangkan permainan serupa, Arena of Valor), perusahaan yang mengembangkan dan menerbitkan permainan PC League of Legends, mengajukan gugatan pada tanggal 11 Juli 2017 terhadap pengembang Mobile Legends: Bang Bang yaitu Shanghai Moonton Technology ke Pengadilan Negeri California karena telah melanggar beberapa merek dagang dalam permainan tersebut. Gugatan tersebut didasarkan atas dugaan pelanggaran atas kekayaan intelektual oleh Moonton, para pengacara Riot Ga', 'Pada dasarnya, karakter dalam Mobile Legends dibedakan menjadi 6 peran (role) di antaranya: marksman, fighter, tank, mage, assassin dan support. Setiap peran mempunyai spesialisasi dan kemampuan yang unik. Total jumlah hero per November 2021, baik pada server orisinal (original server) maupun lanjutan (advance server) adalah 107 hero.'),
(10, 'Resident Evil The Final Chapter', '', 'uploads/Resident Evil The Final Chapter.jpg', 50000.00, 'Resident Evil: The Final Chapter Merupakan Film Horor Aksi Dan Fiksi Sains Yang Ditulis Dan Disutradarai Oleh Paul W. S. Anderson. Film Ini Merupakan Film Keenam Dan Seri Terakhir Dari Resident Evil, Dan Merupakan Kelanjutan Dari Resident Evil: Retribution (2012) Berdasarkan Serial Permainan Video Horor Capcom. Film Ini Dibintangi Oleh Milla Jovovich, Ali Larter, Ruby Rose, William Levy, Eoin Macken, Rola, Lee Joon-Gi, Dan Iain Glen.', 'Resident Evil: The Final Chapter merupakan film horor aksi dan fiksi sains yang ditulis dan disutradarai oleh Paul W. S. Anderson. Film ini merupakan film keenam dan seri terakhir dari Resident Evil, dan merupakan kelanjutan dari Resident Evil: Retribution (2012) berdasarkan serial permainan video horor Capcom. Film ini dibintangi oleh Milla Jovovich, Ali Larter, Ruby Rose, William Levy, Eoin Macken, Rola, Lee Joon-gi, dan Iain Glen. Film tersebut dijadwalkan tayang di bioskop pada 23 Desember 2016 di Jepang dan 27 Januari 2017 di Amerika Utara', 'Sinopsis', 'Produksi', 'Perilisan', 'Setelah kejadian akan punahnya manusia dalam Resident Evil: Retribution, Alice, Jill, Leon, Ada, dan Becky dikhianati oleh Wesker di Washington D.C. Sebagai penyintas tunggal dan menjadi satu-satunya manusia yang bertahan menghadapi mayat hidup, Alice harus kembali ke tempat asal mula mimpi buruk itu mulai-Kota Raccoon (Raccoon City), tempat Umbrella Corporation menyiapkan bala tentara untuk penyerangan terakhir terhadap penyintas terakhir dalam kehancuran tersebut. Dalam perlombaan melawan waktu, Alice akan bergabung dengan teman-temannya, dan', 'Pada September 2012, mengikuti kesuksesan film laris Resident Evil: Retribution, film keenam dalam serial Resident Evil dikonfirmasikan oleh pimpinan distribusi Sony Pictures, Rory Bruer, dengan Milla Jovovich sebagai pemeran utama untuk membangkitkan peran Alice.Pada Oktober 2012, dalam wawancara dengan Forbes, produser Samuel Hadida menyatakan bahwa seri keenam dan ketujuh sedang direncakan dan pengulangan serial film tersebut mungkin dilakukan.Pada Desember 2012, sutradara Paul W. S. Anderson mengonfirmasikan bahwa ia akan menyutradarai Resi', 'Sony pada awalnya menjadwalkan film tersebut dirilis pada 12 September 2014.Pada 20 September 2015, film tersebut akhirnya dijadwalkan akan dirilis pada 27 Januari 2017 oleh Screen Gems.'),
(11, 'PUBG', '', 'uploads/PUBG.png', 45000.00, 'Pada Bulan Maret 2017. Walaupun Belum Genap Satu Tahun, Tapi Permainan Ini Telah Membuat Rekor Baru, Ada Sekitar 877.844 Pemain Yang Daring Secara Bersamaan Pada Tanggal 26 Agustus 2017 Di Platform Steam.', 'PUBG: Battlegrounds (sebelumnya dikenal sebagai PlayerUnknown\'s Battlegrounds) adalah sebuah permainan battle royale, di mana 100 orang sekaligus dapat bermain secara daring. Pemenang dari permainan ini adalah individu atau tim yang dapat bertahan hingga akhir. Pemain bisa bermain sendirian (solo), tim dengan dua orang (duo), dan tim dengan empat orang (squad). Pemain bisa mengundang teman di daftar teman (friend list) untuk bergabung ke dalam permainan sebagai sebuah tim.', 'Penerimaan', 'India', 'Indonesia', 'layerUnknown\'s Battlegrounds diluncurkan di Steam pada bulan Maret 2017. Walaupun belum genap satu tahun, tapi permainan ini telah membuat rekor baru, ada sekitar 877.844 pemain yang daring secara bersamaan pada tanggal 26 Agustus 2017 di platform Steam. Angka ini mengalahkan rekor jumlah pemain Dota 2 dalam waktu bersamaan yang hanya mencapai 842.919.', 'Pada bulan Maret 2019, PlayerUnknown\'s Battlegrounds Mobile dilarang di negara bagian Gujarat di India setelah pemerintah setempat memutuskan bahwa permainan itu \"terlalu membuat ketagihan dan kejam\". Beberapa orang yang ketahuan memainkan permainan ini pun ditangkap.', 'Menyusul kejadian Penembakan masjid Christchurch, pada bulan Maret 2019 Majelis Ulama Indonesia melakukan kajian fatwa haram bagi PlayerUnknown\'s Battlegrounds dan diperkirakan akan rampung pada bulan April 2019.'),
(12, 'Subway Surfers', '', 'uploads/Subway Surfers.png', 5000.00, 'Subway Surfers Dirilis Pada 24 Mei 2012 Dengan Pembaharuan Berdasarkan Libur Musiman. Sejak 2 Januari 2013, Pembaharuan Telah Didasarkan Pada \"World Tour\" Yang Menempatkan Permainan Di Kota Baru Setiap Bulannya.', 'Subway Surfers adalah permainan melarikan diri yang diusung oleh Kiloo Gamesdan Sybo Games, sebuah perusahaan swasta asal Denmark. Permainan ini tersedia untuk Android, iOS, Kindle, dan Windows Phone.Pemain berperan sebagai seorang remaja hooligan yang setelah tertangkap memasang grafiti ke sisi kereta api, berlari ke bawah trek untuk melarikan diri dari Inspektur dan anjingnya. Sebagai hooligan, pemain diminta untuk ambil koin emas sebanyak mungkin dari udara sekaligus menghindari tabrakan dengan kereta api dan benda-benda lainnya. Pada permai', 'Latar belakang', 'Cara dan aturan main', 'Releases and downloads', 'Permainan ini diusung oleh Kiloo Games dan Sybo Games. Sudah terdapat 26,5 juta pemain aktif Subway Surfers di dunia serta 130 juta pengguna yang sudah mengunduh permainan ini, dan diprediksikan sebanyak 250 juta yang akan mengunduh pada tahun 2013.\r\nSubway Surfers berkaitan dengan perkembangan teknologi masa kini dimana efek visual dari permainan ini adalah 3D modern. Permainan ini hanya tersedia untuk peranti yang memiliki Sistem Operasi Android (minimal versi Android 2.3.3 (Gingerbread) dengan mengunggah di Google Play dan iOS seperti iPhone', 'Cara bermain dasar pada permainan ini yaitu dengan menyentuh jari di monitor ke arah atas untuk melompat, ke arah kanan untuk bergeser ke jalur kanan, ke kiri untuk bergeser ke jalur kiri, sedangkan mengarahkan jari ke bawah untuk berguling.\r\n\r\nSetiap hari pemain harus menyelesaikan sebuah daily challenge atau tantangan harian dengan cara mengumpulkan huruf-huruf suatu kata. Kemudian jika tantangan tersebut diselesaikan, maka pemain akan mendapatkan penghargaan seperti koin. Selain tantangan harian, terdapat misi dimana pemain diberikan tugas y', 'Subway Surfers was released on 24 May 2012 with updates based on seasonal holidays. Since January 2013, updates have been based on a \"World Tour\" theme, which updates the setting of the game every three (or four, usually for seasonal holidays) weeks. [citation needed]\r\n\r\nIn March 2018, Subway Surfers became the first game on the Google Play Store to cross the one billion downloads threshold. In May 2018, Subway Surfers crossed the two billion download mark. App Annie reported Subway Surfers as the #2 downloaded game of all time in iOS App Store'),
(32, 'jumat', '1', 'uploads/download.png', 5000.00, 'hari ini hari jumat', 'hari ini hari jumat', 'hari ini hari jumat', 'hari ini hari jumat', 'hari ini hari jumat', 'hari ini hari jumat', 'hari ini hari jumat', 'hari ini hari jumat');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Level` varchar(50) DEFAULT NULL,
  `Tanggal_Register` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`ID`, `Username`, `Password`, `Email`, `Level`, `Tanggal_Register`) VALUES
(1, 'Admin', 'Admin', NULL, 'admin', NULL),
(2, 'User', 'User', NULL, 'user', NULL),
(21, 'BaraAdmin', '$2y$10$SlO2QUwgxYx89CmgIjFmH.bShfQsBmd82ktf2hahRmTFqCFK1xNYC', 'nikendewiagrr@gmail.com', 'admin', '2024-05-20 09:57:19'),
(29, 'asss', '$2y$10$tbCUiuGdDPfKOuLcA64NeOtCEGtWpZaChpgfIUklz2ew7h5dG3rKm', 'asss@gmail.com', 'user', '2024-05-22 08:58:34'),
(30, 'ass', '$2y$10$z2.iC7rYId2XZO3LR31MHORPN868JVybJIBxzP/31B44j5Ej6wSfG', 'as@gmail.com', 'user', '2024-05-22 09:03:24'),
(31, 'ffffffffff', '$2y$10$Wp9jbj3gPhIJDNxpJ9wjOuqBoLTg6Dcb.IIqg6JUonfSfBUw2yjbC', 'barass@gmail.com', 'user', '2024-05-22 09:04:04'),
(32, 'igladla', '123', 'adsadad@gmail.com', 'user', '2024-05-22 09:06:51'),
(35, 'sadsadasdas', '123', 'asdad@gmail.com', 'user', '2024-05-26 21:50:59'),
(36, 'BaraUser', '123', 'bintass@gmail.com', 'user', '2024-05-26 21:51:32'),
(37, 'adada', '123', 'asdad21@gmail.com', 'admin', '2024-05-28 15:37:11'),
(38, 'Juan', '123', 'juanstore@gmail.com', 'admin', '2024-05-28 15:37:28'),
(39, 'baras', '123', 'sssa@gmail.com', 'user', '2024-05-28 20:05:05'),
(40, 'Junat', '123', 'jumat@g.c', 'user', '2024-05-31 15:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `ID_TOPUP` int(11) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `User_ID` int(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Image_path` varchar(250) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Quantity` varchar(10) NOT NULL,
  `Tanggal_Pembelian` date NOT NULL DEFAULT current_timestamp(),
  `ID` int(11) DEFAULT NULL,
  `ID_PIC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topup`
--

INSERT INTO `topup` (`ID_TOPUP`, `Nama`, `User_ID`, `Email`, `Image_path`, `Price`, `Quantity`, `Tanggal_Pembelian`, `ID`, `ID_PIC`) VALUES
(57, 'Mobile Legends', 1231, 'newpro1239@gmail.com', '', 50000.00, '2', '2024-05-28', 38, 9),
(58, 'Growtopia', 1231313, 'newpro1239@gmail.com', '', 48000.00, '4', '2024-05-29', 1, 5),
(61, 'Genshin Impact', 0, 'baminyanmin@jatim.polri.go.id', 'uploads/Genshin Impact.jpeg', 175000.00, '5', '2024-05-30', 1, 6),
(62, 'Resident Evil The Final Chapter', 2147483647, 'nikendewiagrr@gmail.com', 'uploads/Resident Evil The Final Chapter.jpg', 99999999.99, '22223', '2024-05-30', 1, 10),
(63, 'PUBG', 24242, 'bintangbaraadyasta@gmail.com', 'uploads/PUBG.png', 23580000.00, '524', '2024-05-30', 1, 11),
(64, 'Geometry Dash', 0, 'nikendewiagrr@gmail.com', 'uploads/Geometry Dash.png', 650000.00, '13', '2024-05-30', 1, 7),
(65, 'Subway Surfers', 234322, 'bintangbaraadyasta@gmail.com', 'uploads/Subway Surfers.png', 25000.00, '5', '2024-05-30', 1, 12),
(66, 'Resident Evil The Final Chapter', 243242, 'newpro1239@gmail.com', 'uploads/Resident Evil The Final Chapter.jpg', 250000.00, '5', '2024-05-30', 1, 10),
(69, 'Geometry Dash', 112313, 'nikendewiagrr@gmail.com', 'uploads/Geometry Dash.png', 100000.00, '2', '2024-05-30', 39, 7),
(70, 'Genshin Impact', 232424, 'baminyanmin@jatim.polri.go.id', 'uploads/Genshin Impact.jpeg', 140000.00, '4', '2024-05-30', 39, 6),
(71, 'PUBG', 2432422, 'bintangbaraadyasta@gmail.com', 'uploads/PUBG.png', 135000.00, '3', '2024-05-30', 39, 11),
(72, 'Subway Surfers', 242424, 'newpro1239@gmail.com', 'uploads/Subway Surfers.png', 15000.00, '3', '2024-05-30', 39, 12),
(73, 'Subway Surfers', 242424, 'newpro1239@gmail.com', 'uploads/Subway Surfers.png', 15000.00, '3', '2024-05-30', 39, 12),
(74, 'Subway Surfers', 242424, 'newpro1239@gmail.com', 'uploads/Subway Surfers.png', 15000.00, '3', '2024-05-30', 39, 12),
(75, 'Mobile Legends', 0, 'newpro1239@gmail.com', 'uploads/Mobile Legend.png', 50000.00, '2', '2024-05-30', 39, 9),
(76, 'Mobile Legends', 0, 'newpro1239@gmail.com', 'uploads/Mobile Legend.png', 50000.00, '2', '2024-05-30', 39, 9),
(77, 'Mobile Legends', 4444, 'bintangbaraadyasta@gmail.com', 'uploads/Mobile Legend.png', 50000.00, '2', '2024-05-30', 39, 9),
(78, 'Geometry Dash', 123313, 'nikendewiagrr@gmail.com', 'uploads/Geometry Dash.png', 600000.00, '12', '2024-05-31', 39, 7),
(79, 'Geometry Dash', 111313, 'baminyanmin@jatim.polri.go.id', 'uploads/Geometry Dash.png', 100000.00, '2', '2024-05-31', 39, 7),
(80, 'Geometry Dash', 2322, 'bintangbaraadyasta@gmail.com', 'uploads/Geometry Dash.png', 100000.00, '2', '2024-05-31', 39, 7),
(81, 'Geometry Dash', 0, 'nikendewiagrr@gmail.com', 'uploads/Geometry Dash.png', 600000.00, '12', '2024-05-31', 39, 7),
(82, 'Geometry Dash', 123, 'nikendewiagrr@gmail.com', 'uploads/Geometry Dash.png', 550000.00, '11', '2024-05-31', 39, 7),
(83, 'Geometry Dash', 63784, 'newpro1239@gmail.com', 'uploads/Geometry Dash.png', 200000.00, '4', '2024-05-31', 40, 7),
(85, 'Mobile Legends', 22222, 'nikendewiagrr@gmail.com', 'uploads/Mobile Legend.png', 75000.00, '3', '2024-06-09', 2, 9),
(91, 'Mobile Legends', 0, 'baminyanmin@jatim.polri.go.id', 'uploads/Mobile Legend.png', 50000.00, '2', '2024-06-09', 2, 9),
(92, 'Mobile Legends', 0, 'baminyanmin@jatim.polri.go.id', 'uploads/Mobile Legend.png', 50000.00, '2', '2024-06-09', 2, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID_PIC`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`ID_TOPUP`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_PIC` (`ID_PIC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ID_PIC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `topup`
--
ALTER TABLE `topup`
  MODIFY `ID_TOPUP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `topup`
--
ALTER TABLE `topup`
  ADD CONSTRAINT `topup_ibfk_3` FOREIGN KEY (`ID`) REFERENCES `pengguna` (`ID`),
  ADD CONSTRAINT `topup_ibfk_4` FOREIGN KEY (`ID_PIC`) REFERENCES `images` (`ID_PIC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
