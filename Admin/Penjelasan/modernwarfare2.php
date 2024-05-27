<?php
include '../../koneksi.php';
$Id = 2;
$query = mysqli_query($mysqli,"SELECT * FROM images WHERE ID_PIC = $Id");
while($data = mysqli_fetch_assoc($query)){

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modern Warfare 2</title>
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
        <img
          src="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
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
        <img
          src="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
          alt=""
        />
        <p class="text">People</p>
      </div>
    </header>
    <!-- konten -->
    <div class="about">
      <div class="about-img">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhi-hipPfUInhN7T1hR0vzHl3shF1CGCKqCCQLW4eLew&s" alt="" width="110%" height="50%" />
      </div>
      <div class="rating">
        <h2>Rating: <?php echo $data["rating"]?></h2>
        </div>
      <div class="about-text">
        <h2>Modern Warfare 2</h2>
        <p>
          game penembak orang pertama tahun 2009 yang dikembangkan oleh Infinity
          Ward dan diterbitkan oleh Activision . Ini adalah seri keenam dalam
          seri Call of Duty dan sekuel langsung dari Call of Duty 4: Modern
          Warfare . Ini dirilis di seluruh dunia pada 10 November 2009, untuk
          Windows , PlayStation 3 , dan Xbox 360 . Versi terpisah untuk Nintendo
          DS , berjudul Modern Warfare: Mobilized , juga dirilis pada hari yang
          sama. Versi untuk OS X dikembangkan oleh Aspyr dan dirilis pada Mei
          2014, dan versi Xbox 360 dibuat kompatibel untuk Xbox One pada tahun
          2018.
        </p>
      </div>
    </div>
    <br /><br /><br /><br /><br /><br /><br /><br /><br />
    <h1 style="text-align: center; text-transform: uppercase; font-size: 35px">
      Modern Warfare 2
    </h1>
    <br /><br />
    <div class="display">
      <h2>Karakter dan pengaturan</h2>
      <p>
        Call of Duty: Modern Warfare 2 terjadi lima tahun setelah peristiwa Call
        of Duty 4: Modern Warfare . Selama kampanye pemain tunggal, pemain
        mengontrol lima karakter berbeda dari sudut pandang orang pertama .
        Pemain terutama mengendalikan Sersan Gary "Roach" Sanderson, seorang
        anggota Inggris dari unit pasukan khusus internasional bernama Task
        Force 141. Selain Roach, pemain juga akan mengambil alih kendali
        Prajurit Kelas Satu Joseph Allen dan James Ramirez dari Batalyon Ranger
        ke-1 . Kapten John "Soap" MacTavish yang sekarang berperan sebagai
        anggota senior Satuan Tugas 141, bertindak sebagai atasan Roach, dan
        menjadi karakter yang dapat dimainkan dalam tiga misi terakhir
        permainan. Terakhir, pemain secara singkat berperan sebagai astronot
        yang ditempatkan di Stasiun Luar Angkasa Internasional selama puncak
        perang antara Amerika Serikat dan Rusia.
      </p>
    </div>
    <br />
    <br />
    <div class="display">
      <h2>Cerita</h2>
      <p>
        Meskipun peristiwa di pertandingan sebelumnya mencegah perang nuklir,
        kaum Ultranasionalis akhirnya menguasai Rusia dan Imran Zakhaev menjadi
        martir . Akibatnya, hubungan diplomatik dengan Amerika Serikat merosot,
        sementara Vladimir Makarov, seorang ekstremis Ultranasionalis dan anak
        didik Zakhaev, berkomitmen melakukan kampanye balas dendam terhadap
        Barat melalui tindakan terorisme. Pada tahun 2016, Prajurit Kelas Satu
        Joseph Allen mengesankan Letnan Jenderal Angkatan Darat AS Shepherd
        dengan tindakannya dengan Penjaga Angkatan Darat di Afghanistan, dan
        kemudian dilantik ke dalam Satuan Tugas 141. Dia kemudian dimasukkan ke
        dalam CIA dan mengadopsi identitas rahasia untuk menyusup ke sel teroris
        Makarov. , yang menyebabkan dia ikut serta dalam penembakan massal di
        sebuah bandara di Moskow , yang menewaskan ratusan warga sipil Rusia .
        Makarov, yang mengetahui identitas asli Allen, membunuh orang Amerika
        tersebut, meninggalkan tubuhnya untuk melibatkan Amerika Serikat dalam
        serangan tersebut .
      </p>
    </div>
    <br />
    <br />
    <div class="display">
      <h2>Perkembangan</h2>
      <p>
        Modern Warfare 2 awalnya diumumkan sebagai Call of Duty 6.Game ini
        pertama kali diumumkan dengan judul Call of Duty: Modern Warfare 2 oleh
        Activision pada tanggal 3 Desember 2008.Activision kemudian mencabut
        pengumumannya, dengan menyatakan bahwa informasi apa pun tentang game
        Call of Duty yang akan datang bersifat "spekulatif". nfinity Ward
        kemudian menegaskan bahwa pihaknya belum mengonfirmasi secara resmi
        proyek terbarunya saat itu. Pada tanggal 11 Februari 2009, Activision
        secara resmi mengumumkan Modern Warfare 2 dan menetapkan tanggal rilis
        tentatif untuk " Liburan 2009."Permainan ini diuji dalam versi beta
        internal oleh tim pengembangan. Meskipun Call of Duty 4 dan Call of
        Duty: World at War telah didahului oleh beta multipemain publik, tidak
        ada beta seperti itu yang dirilis untuk Modern Warfare 2 karena
        ditentukan bahwa, menurut Manajer Komunitas Robert Bowling, tidak
        diperlukan beta publik kecuali beta internal tidak memberikan umpan
        balik yang memadai.Meskipun Treyarch dapat mem-porting Modern Warfare ke
        Wii dan merilisnya pada hari yang sama dengan peluncuran Modern Warfare
        2 , Infinity Ward menolak untuk membuat versi Wii dari sekuelnya.
        Menurut Bowling, Infinity Ward menetapkan bahwa keterbatasan teknis Wii
        membuat tidak mungkin memberikan pengalaman sinematik yang sama seperti
        yang ingin dihadirkan sekuelnya.
      </p>
    </div>
    <br /><br /><br /><br />
    <!-- footer -->
    <footer id="social_icon">
      <ul class="social_icon">
        <li>
          <a href="#"><box-icon type="logo" name="instagram"></box-icon></a>
        </li>
        <li>
          <a href="#"><box-icon name="facebook" type="logo"></box-icon></a>
        </li>
        <li>
          <a href="#"><box-icon name="twitter" type="logo"></box-icon></a>
        </li>
        <li>
          <a href="#"><box-icon name="youtube" type="logo"></box-icon></a>
        </li>
      </ul>
      <p>©Online Web Game</p>
    </footer>
    <?php }?>
  </body>
</html>
