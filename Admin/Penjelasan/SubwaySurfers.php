<?php
session_start();
include '../../koneksi.php';
$Id = 12;
$query = mysqli_query($mysqli,"SELECT * FROM images WHERE ID_PIC = $Id");
while($data = mysqli_fetch_assoc($query)){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subway Surfers</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="flapybird.css">
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
</head>
<body>
     <!-- Navbar -->
     <header class="header">
        <div class="header-logo">
        <img
          src="../../logo.png"
          style="width: 100px; height: 50%"
        />
        </div>
        <nav class="navbar">
            <a href="../nextpage.php">Home</a>
            <a href="#containers">About</a>
            <!-- <a href="#">Menu</a> -->
            <a href="#social_icon">Contact</a>
            <a href="../profile.php">Profile</a>
        </nav>
        <div class="btns">
            <img src="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png" alt="">
            <p class="text"><?php echo htmlspecialchars($_SESSION['Username']); ?></p> <!-- Menampilkan username -->
        </div>
        </header>
       <!-- konten -->
       <div class="about">
        <div class="about-img">
            <img src="../Topup/uploads/Subway Surfers.png" alt="" width="60%" height="50%">
        </div>
        <div class="rating">
        <h2>Rating: <?php echo $data["rating"]?></h2>
        </div>
        <div class="about-text">
            <h2>Subway Surfers</h2>
            <p>Subway Surfers adalah permainan melarikan diri yang diusung oleh Kiloo Gamesdan Sybo Games, sebuah perusahaan swasta asal Denmark. Permainan ini tersedia untuk Android, iOS, Kindle, dan Windows Phone.Pemain berperan sebagai seorang remaja hooligan yang setelah tertangkap memasang grafiti ke sisi kereta api, berlari ke bawah trek untuk melarikan diri dari Inspektur dan anjingnya. Sebagai hooligan, pemain diminta untuk ambil koin emas sebanyak mungkin dari udara sekaligus menghindari tabrakan dengan kereta api dan benda-benda lainnya. Pada permainan ini terdapat benda khusus, seperti perburuan mingguan, yang dapat menambah penghargaan dalam permainan.</p>
        </div>
       </div>
       <br><br><br><br><br><br><br><br><br>
       <h1 style="text-align: center; text-transform: uppercase; font-size: 35px;">Subway Surfers</h1>
       <br><br>
       <div class="display">
        <h2>Latar belakang</h2>
        <p>Permainan ini diusung oleh Kiloo Games dan Sybo Games. Sudah terdapat 26,5 juta pemain aktif Subway Surfers di dunia serta 130 juta pengguna yang sudah mengunduh permainan ini, dan diprediksikan sebanyak 250 juta yang akan mengunduh pada tahun 2013.
Subway Surfers berkaitan dengan perkembangan teknologi masa kini dimana efek visual dari permainan ini adalah 3D modern. Permainan ini hanya tersedia untuk peranti yang memiliki Sistem Operasi Android (minimal versi Android 2.3.3 (Gingerbread) dengan mengunggah di Google Play dan iOS seperti iPhone 3GS, iPhone 4, iPhone 4S, iPhone 5, iPod touch (3rd generation), iPod touch (4th generation), iPod touch (5th generation) dan iPad dengan menggugah di iTunes. Saat ini, sudah tersedia versi website Diarsipkan 2021-08-17 di Wayback Machine.nya untuk bermain permainan ini.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Cara dan aturan main</h2>
        <p>Cara bermain dasar pada permainan ini yaitu dengan menyentuh jari di monitor ke arah atas untuk melompat, ke arah kanan untuk bergeser ke jalur kanan, ke kiri untuk bergeser ke jalur kiri, sedangkan mengarahkan jari ke bawah untuk berguling.

Setiap hari pemain harus menyelesaikan sebuah daily challenge atau tantangan harian dengan cara mengumpulkan huruf-huruf suatu kata. Kemudian jika tantangan tersebut diselesaikan, maka pemain akan mendapatkan penghargaan seperti koin. Selain tantangan harian, terdapat misi dimana pemain diberikan tugas yang harus diselesaikan agar meningkatkan pelipatgandaan nilai. Jika pemain ingin melewati misi tersebut, pemain dapat membelinya di toko.

Terkadang juga terdapat misi-misi khusus pada Hari Raya atau di negara spesial tertentu, contohnya Anda diminta untuk mengumpulkan bola sebanyak yang ditentukan pada saat Piala Dunia Brazil tahun 2014.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Releases and downloads</h2>
        <p>Subway Surfers was released on 24 May 2012 with updates based on seasonal holidays. Since January 2013, updates have been based on a "World Tour" theme, which updates the setting of the game every three (or four, usually for seasonal holidays) weeks. [citation needed]

In March 2018, Subway Surfers became the first game on the Google Play Store to cross the one billion downloads threshold. In May 2018, Subway Surfers crossed the two billion download mark. App Annie reported Subway Surfers as the #2 downloaded game of all time in iOS App Store.

In December 2019, SYBO Games announced that Subway Surfers, according to AppAnnie statistics, crossed the 2.7 billion download mark. Subway Surfers was the most downloaded mobile game of the decade from 2012 to 2019.</p>
       </div>
       <br><br><br><br>
       <!-- footer -->
       <footer id="social_icon">
        <ul class="social_icon">
            <li><a href="#"><box-icon type='logo' name='instagram'></box-icon></a></li>
            <li><a href="#"><box-icon name='facebook' type='logo' ></box-icon></a></li>
            <li><a href="#"><box-icon name='twitter' type='logo' ></box-icon></a></li>
            <li><a href="#"><box-icon name='youtube' type='logo' ></box-icon></a></li>
        </ul>
        <p>©Online Web Game</p>
    </footer>
    <?php }?>
</body>
</html>