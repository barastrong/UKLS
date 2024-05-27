<?php
include '../../koneksi.php';
$Id = 3;
$query = mysqli_query($mysqli,"SELECT * FROM images WHERE ID_PIC = $Id");
while($data = mysqli_fetch_assoc($query)){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flappy Bird</title>
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
            <img src="https://upload.wikimedia.org/wikipedia/en/0/0a/Flappy_Bird_icon.png" alt="" width="60%" height="50%">
        </div>
        <div class="rating">
        <h2>Rating: <?php echo $data["rating"]?></h2>
        </div>
        <div class="about-text">
            <h2>Flappy Bird</h2>
            <p>Flappy Bird adalah sebuah permainan di Android dan iOS, yang dibuat oleh seorang pengembang dari Hanoi, Vietnam bernama Nguyen Ha Dong dan diluncurkan pada bulan Mei 2013. Cara bermainnya yakni dengan mengetukkan jari ke layar ponsel pintar untuk membuat si burung terbang, melewati setiap pipa berwarna hijau. Jika waktu ketika mengetuk layar tidak tepat, maka dapat membuat si burung terbang menabrak pipa dan pada akhirnya harus mengulang permainan ini dari awal. Nguyen beralasan bahwa dia menciptakan permainan ini untuk kegiatan bersantai para pemainnya.</p>
        </div>
       </div>
       <br><br><br><br>
       <h1 style="text-align: center; text-transform: uppercase; font-size: 35px;">Flappy Bird</h1>
       <br><br>
       <div class="display">
        <h2>Perilisan</h2>
        <p>Asal usul Flappy Bird mulai terlihat pada tanggal 6 November 2012 ketika Nguyen membagikan gambar di Twitter tentang permainan yang sedang ia kerjakan.Pada gambar itu tampak karakter burung di sebelah kiri gambar yang menjadi cikal-bakal karakter utama Flappy Bird. Namun, pada saat itu Nguyen tidak menyebut judul permainan yang sedang dikerjakan.Kemudian pada 29 April 2013, Nguyen kembali membagikan gambar dari sebuah permainan yang dibuatnya dengan judul Flap Flap untuk Apple iOS.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Penghapusan</h2>
        <p>Pada tanggal 8 Februari 2014, Nguyen mengumumkan di Twitter bahwa game tersebut akan dihapus dari Apple App Store dan Google Play, menulis: "Saya minta maaf pengguna 'Flappy Bird', 22 jam dari sekarang, saya akan menghapus 'Flappy Bird'. Saya tidak tahan lagi." Dia melanjutkan ke katakan bahwa menghapus game itu "tidak ada hubungannya dengan masalah hukum".Game telah dihapus dari kedua Aplikasi Apple Store dan Google Play tepat waktu, membuat banyak penggemar kecewa.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Permainan</h2>
        <p> membuat banyak penggemar kecewa. Cara memainkan Flappy Bird cukup dengan mengetuk jari ke layar untuk membuat si burung terbang.Bukan hanya sembarang terbang saja, tetapi tantangannya di sini adalah menjaga agar burung tersebut tidak menabrak pipa-pipa hijau dengan cara terbang melalui celah-celahnya.emain akan mendapat skor 1 (satu) jika berhasil melewati satu pipa.Jika waktu ketika mengetuk layar tidak tepat, maka dapat membuat si burung terbang menabrak pipa dan pada akhirnya harus mengulang permainan ini dari awal.</p>
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
    <?php } ?>
</body>
</html>