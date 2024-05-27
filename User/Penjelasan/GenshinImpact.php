<?php
include '../../koneksi.php';
$Id = 6;
$query = mysqli_query($mysqli,"SELECT * FROM images WHERE ID_PIC = $Id");
while($data = mysqli_fetch_assoc($query)){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Impact</title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="flapybirds.css">
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
</head>
<body>
     <!-- Navbar -->
     <header class="header">
        <div class="header-logo">
            <img src="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png" style=" width: 100px;
            height: 50%;">
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
            <p class="text">People</p>
        </div>
        </header>
       <!-- konten -->
       <div class="about">
        <div class="about-img">
            <img src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_GenshinImpact_miHoYoLimited_S1_2560x1440-91c6cd7312cc2647c3ebccca10f30399" alt="" width="60%" height="50%">
        </div>
        <div class="rating">
        <h2>Rating: <?php echo $data["rating"]?></h2>
        </div>
        <div class="about-text">
            <h2>Genshin Impact</h2>
            <p>Genshin Impact (Hanzi: 原神, Pinyin: Yuánshén; Jepang: 原神 (Hiragana: げんしん), Romaji: Genshin; Korea: 원신, Wonsin) adalah permainan video yang dikembangkan dan diterbitkan oleh miHoYo. Permainan ini dirilis pada tanggal 28 September 2020 di Android, iOS, Windows, dan PlayStation 4, serta 28 April 2021 di platform PlayStation 5</p>
        </div>
       </div>
       <br><br><br><br><br><br><br><br><br>
       <h1 style="text-align: center; text-transform: uppercase; font-size: 35px;">Genshin Impact</h1>
       <br><br>
       <div class="display">
        <h2>Alur Game</h2>
        <p>Genshin Impact adalah permainan yang bergenre dunia terbuka (open world) sekaligus bermain peran aksi. Pada permainan ini, pemain memungkinkan untuk mengendalikan salah satu karakter yang dapat digantikan di dalam sebuah party (kelompok). Karakter-karakter yang ditukarkan dapat dilakukan dengan cepat selama melakukan kombat sehingga memungkinkan pemain untuk menggunakan kombinasi kemampuan dan serangan yang berbeda. Karakter yang dapat memiliki kemampuan diperkuat dengan berbagai cara, seperti menaikkan level-nya secara langsung dan memperkuat artefak beserta senjata yang dapat digunakan oleh seorang karakter. Selain berpetualang, pemain dapat mencoba berbagai tantangan untuk mendapatkan hadiah. Pemain dapat melawan raja dan tantangan berhadiah di seluruh Pulau Teyvat, tetapi hadiah tersebut didapatkan dengan menggunakan mata uang yang disebut Original Resin. Menyelesaikan tantangan-tantangan tersebut dapat menambah kenaikan pemain dengan cara meningkatkan Adventure Rank, yang dapat membuka misi baru, tantangan, dan menaikkan World Level. World Level adalah ukuran mengenai seberapa kuat musuh-musuh di dunia dan seberapa besar hadiah yang jarang didapatkan setelah mengalahkannya.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Pertarungan Elemen</h2>
        <p>Karakter yang dapat dimainkan (playable characters) memiliki kemampuan untuk mengendalikan salah satu dari tujuh elemen (atau disebut unsur) alam, di antaranya adalah: Anemo (angin), Geo (tanah), Pyro (api), Hydro (air), Cryo (es), Electro (listrik), dan Dendro (tanaman yang hidup).Ketika unsur-unsur tersebut bereaksi dengan yang lain, hasilnya memberikan macam-acam efek. Sebagai contoh, jika serangan Hydro mengenai suatu target, musuh akan menimbulkan efek status "Wet", dan bila selanjutnya dikenai dengan serangan Cryo, kedua efek status ini bergabung membekukan musuh, yang menghentikannya untuk melakukan aksi untuk sementara.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Genius Invokation TCG</h2>
        <p>Terdapat sebuah permainan kartu dagangan (collectible-card game) yang dimainkan di meja yang bernama Genius Invokation TCG. Ini adalah mode permainan opsional lain yang dirilis dalam pembaruan versi 3.3 pada Desember 2022.ermainan ini menggunakan pertempuran berbasis giliran (turn-based). Dilengkapi dengan kartu yang terdiri atas tiga karakter beserta tiga puluh karakter pendukung, pemain menang dengan mengalahkan semua kartu berupa karakter milik lawan. Masing-masing ronde memerlukan pelemparan dadu yang memaksa pemain untuk menggunakan kartunya dengan pelemparan yang terbatas jumlahnya. Mirip dengan permainan utamanya, reaksi elemen disertakan sebagai mekanik mode permainan ini.Pemain dapat menantang karakter NPC, karakter yang dapat dimainkan, dan pemain lain di mode co-op.Hadiah di dalam permainan didapatkan karena berpartisipasi di Genius Invokation TCG.</p>
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