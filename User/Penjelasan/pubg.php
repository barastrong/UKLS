<?php
session_start();
include '../../koneksi.php';
$Id = 11;
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
    <title>PlayerUnknown's Battlegrounds (PUBG)</title>
    
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
            <img src="https://cdn.medcom.id/dynamic/content/2023/02/20/1539361/2ohXOcFsbq.jpeg?w=480" alt="" width="60%" height="50%">
        </div>
        <div class="rating">
        <h2>Rating: <?php echo $data["rating"]?></h2>
        </div>
        <div class="about-text">
            <h2>PlayerUnknown's Battlegrounds (PUBG)</h2>
            <p>PUBG: Battlegrounds (sebelumnya dikenal sebagai PlayerUnknown's Battlegrounds) adalah sebuah permainan battle royale, di mana 100 orang sekaligus dapat bermain secara daring. Pemenang dari permainan ini adalah individu atau tim yang dapat bertahan hingga akhir. Pemain bisa bermain sendirian (solo), tim dengan dua orang (duo), dan tim dengan empat orang (squad). Pemain bisa mengundang teman di daftar teman (friend list) untuk bergabung ke dalam permainan sebagai sebuah tim.</p>
        </div>
       </div>
       <br><br><br><br><br><br><br><br><br>
       <h1 style="text-align: center; text-transform: uppercase; font-size: 35px;">PlayerUnknown's Battlegrounds (PUBG)</h1>
       <br><br>
       <div class="display">
        <h2>Penerimaan</h2>
        <p>PlayerUnknown's Battlegrounds diluncurkan di Steam pada bulan Maret 2017. Walaupun belum genap satu tahun, tapi permainan ini telah membuat rekor baru, ada sekitar 877.844 pemain yang daring secara bersamaan pada tanggal 26 Agustus 2017 di platform Steam. Angka ini mengalahkan rekor jumlah pemain Dota 2 dalam waktu bersamaan yang hanya mencapai 842.919.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>India</h2>
        <p>Pada bulan Maret 2019, PlayerUnknown's Battlegrounds Mobile dilarang di negara bagian Gujarat di India setelah pemerintah setempat memutuskan bahwa permainan itu "terlalu membuat ketagihan dan kejam". Beberapa orang yang ketahuan memainkan permainan ini pun ditangkap.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Indonesia</h2>
        <p>Menyusul kejadian Penembakan masjid Christchurch, pada bulan Maret 2019 Majelis Ulama Indonesia melakukan kajian fatwa haram bagi PlayerUnknown's Battlegrounds dan diperkirakan akan rampung pada bulan April 2019.</p>
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