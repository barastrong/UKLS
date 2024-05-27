<?php
include '../../koneksi.php';
$Id = 10;
$query = mysqli_query($mysqli,"SELECT * FROM images WHERE ID_PIC = $Id");
while($data = mysqli_fetch_assoc($query)){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Evil: The Final Chapter</title>
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
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXIzNSP1mKFUSxtFZcDYPHHp4MVWr5wuOsbZ7Ib909Iw&s" alt="" width="60%" height="50%">
        </div>
        <div class="rating">
        <h2>Rating: <?php echo $data["rating"]?></h2>
        </div>
        <div class="about-text">
            <h2>Resident Evil: The Final Chapter</h2>
            <p>Resident Evil: The Final Chapter merupakan film horor aksi dan fiksi sains yang ditulis dan disutradarai oleh Paul W. S. Anderson. Film ini merupakan film keenam dan seri terakhir dari Resident Evil, dan merupakan kelanjutan dari Resident Evil: Retribution (2012) berdasarkan serial permainan video horor Capcom. Film ini dibintangi oleh Milla Jovovich, Ali Larter, Ruby Rose, William Levy, Eoin Macken, Rola, Lee Joon-gi, dan Iain Glen. Film tersebut dijadwalkan tayang di bioskop pada 23 Desember 2016 di Jepang dan 27 Januari 2017 di Amerika Utara.</p>
        </div>
       </div>
       <br><br><br><br><br><br><br><br><br>
       <h1 style="text-align: center; text-transform: uppercase; font-size: 35px;">Resident Evil: The Final Chapter</h1>
       <br><br>
       <div class="display">
        <h2>Sinopsis</h2>
        <p>Setelah kejadian akan punahnya manusia dalam Resident Evil: Retribution, Alice, Jill, Leon, Ada, dan Becky dikhianati oleh Wesker di Washington D.C. Sebagai penyintas tunggal dan menjadi satu-satunya manusia yang bertahan menghadapi mayat hidup, Alice harus kembali ke tempat asal mula mimpi buruk itu mulai-Kota Raccoon (Raccoon City), tempat Umbrella Corporation menyiapkan bala tentara untuk penyerangan terakhir terhadap penyintas terakhir dalam kehancuran tersebut. Dalam perlombaan melawan waktu, Alice akan bergabung dengan teman-temannya, dan sekutunya yang lama, dalam sebuah pertempuran dengan mayat hidup dan moster mutan baru. Antara kehilangan kemampuan manusia super miliknya dan serangan Umbrella yang akan datang, ini merupakan perjalanan Alice yang sangat sulit karena ia melawan untuk menyelamatkan manusia, yang berada di ambang keterlupaan.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Produksi</h2>
        <p>Pada September 2012, mengikuti kesuksesan film laris Resident Evil: Retribution, film keenam dalam serial Resident Evil dikonfirmasikan oleh pimpinan distribusi Sony Pictures, Rory Bruer, dengan Milla Jovovich sebagai pemeran utama untuk membangkitkan peran Alice.Pada Oktober 2012, dalam wawancara dengan Forbes, produser Samuel Hadida menyatakan bahwa seri keenam dan ketujuh sedang direncakan dan pengulangan serial film tersebut mungkin dilakukan.Pada Desember 2012, sutradara Paul W. S. Anderson mengonfirmasikan bahwa ia akan menyutradarai Resident Evil 6. Ia menyatakan bahwa ini akan menjadi film terakhir dalam serial tersebut dan beberapa karakter dalam dua film pertama akan kembali.Pada Juni 2013, Milla mengirimkan cuitan dan mengatakan bahwa film keenam, yang direncanakan akan dirilis pada 12 September 2014, tidak akan dirilis sebelum 2015. Film ini akhirnya direncanakan masuk dalam proses produksi pada akhir 2013 setelah Paul Anderson menyelesaikan karyanya dalam film romansa Pompeii.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Perilisan</h2>
        <p>Sony pada awalnya menjadwalkan film tersebut dirilis pada 12 September 2014.Pada 20 September 2015, film tersebut akhirnya dijadwalkan akan dirilis pada 27 Januari 2017 oleh Screen Gems.</p>
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