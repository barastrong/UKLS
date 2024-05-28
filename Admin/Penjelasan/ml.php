<?php
session_start();
include '../../koneksi.php';
$Id = 9;
$query = mysqli_query($mysqli,"SELECT * FROM images WHERE ID_PIC = $Id");
while($data = mysqli_fetch_assoc($query)){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="flapybird.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Mobile Legends</title>
    
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
        <img src="https://www.jagoanhosting.com/blog/wp-content/uploads/2021/08/Meta-Mobile-Legend-Terbaik-Juli-2020.jpg.webp" alt="" width="60%" height="50%">
    </div>
    <div class="rating">
        <h2>Rating: <?php echo $data["rating"]?></h2>
        </div>
    <div class="about-text">
        <h2>Mobile Legends</h2>
        <p>Mobile Legends: Bang Bang adalah permainan video seluler ber-genre multiplayer online battle arena (MOBA) yang dikembangkan dan diterbitkan oleh Moonton, anak perusahaan dari ByteDance.
            Dirilis pada tahun 2016, game ini semakin populer di seluruh dunia, terutama di wilayah Asia Tenggara, dan sejak itu telah melampaui 1 miliar kali unduhan, dengan puncak pemain bulanan sebanyak 100 juta. Pada tahun 2021, "Mobile Legends: Bang Bang" mencapai pendapatan kotor sepanjang masa sebesar US$1 miliar dengan 44 persen pendapatannya berasal dari luar Asia, menjadikannya gim seluler teratas dari genre-nya dengan daya tarik paling global.</p>
    </div>
   </div>
   <br><br><br><br><br><br><br><br><br>
   <h1 style="text-align: center; text-transform: uppercase; font-size: 35px;">Mobile Legends</h1>
   <br><br>
   <div class="display">
    <h2>Alur Game</h2>
    <p>Mobile Legends adalah permainan MOBA yang dirancang untuk ponsel. Kedua tim masing-masing berisi lima orang berjuang untuk mencapai dan menghancurkan markas musuh sambil mempertahankan markas mereka sendiri untuk mengendalikan tiga jalur, yang dikenal sebagai jalur "atas", "tengah" dan "bawah", yang menghubung ke setiap markas.</p>
   </div>
   <br>
   <br>
   <div class="display">
    <h2>Kontroversi hak cipta</h2>
    <p>Riot Games (anak usaha dari Tencent dan perusahaan saudara dari TiMi Studio yang mengembangkan permainan serupa, Arena of Valor), perusahaan yang mengembangkan dan menerbitkan permainan PC League of Legends, mengajukan gugatan pada tanggal 11 Juli 2017 terhadap pengembang Mobile Legends: Bang Bang yaitu Shanghai Moonton Technology ke Pengadilan Negeri California karena telah melanggar beberapa merek dagang dalam permainan tersebut. Gugatan tersebut didasarkan atas dugaan pelanggaran atas kekayaan intelektual oleh Moonton, para pengacara Riot Games menuturkan dalam gugatan mereka, bahwa Moonton melakukan pelanggaran atas kekayaan intelektual melalui permainan video yang mereka kembangkan, yaitu Magic Rush: Heroes Mobile, Legends: 5v5 MOBA (nama terdahulu Mobile Legends: Bang Bang), dan Mobile Legends: Bang Bang. Pelanggaran tersebut, antara lain, mengenai aspek logo, karakter, rancangan peta, rancangan hero, dan rancangan monster. Mereka pun melengkapi surat gugatan dengan ilustrasi untuk memperlihatkan aspek-aspek pelanggaran kekayaan intelektual yang dilakukan Moonton.</p>
   </div>
   <br>
   <br>
   <div class="display">
    <h2>Karakter</h2>
    <p>Pada dasarnya, karakter dalam Mobile Legends dibedakan menjadi 6 peran (role) di antaranya: marksman, fighter, tank, mage, assassin dan support. Setiap peran mempunyai spesialisasi dan kemampuan yang unik. Total jumlah hero per November 2021, baik pada server orisinal (original server) maupun lanjutan (advance server) adalah 107 hero.</p>
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