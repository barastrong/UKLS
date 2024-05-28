<?php
session_start();
if(!isset($_SESSION['Username']) || $_SESSION['Level'] != "admin"){
    header("Location: ../index.php");
    exit();
}

$username = $_SESSION['Username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
    <title>Web Game</title>
    <link rel="stylesheet" href="nexts.css" />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="header-logo">
        <img
          src="../logo.png"
          style="width: 100px; height: 50%"
        />
      </div>
      <nav class="navbar">
        <a href="nextpage.php">Home</a>
        <a href="#containers">About</a>
        <a href="admin/index.php">Admin Panel</a>
        <a href="#social_icon">Contact</a>
        <a href="profile.php">Profile</a>
        <a href="../Logout.php">Logout</a>
        <a href="Topup/payment.php">Order</a>
        <a href="Topup/Tableorder.php">OrderList</a>
      </nav>
      <div class="btns">
        <img
          src="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
          alt=""
        />
        <p class="text"><?php echo htmlspecialchars($username); ?></p>
      </div>
    </header>
    <h1 align="center" id="containers" style="padding: 80px; font-size: 50px">
      The Game Dimension
    </h1>
    <div class="container">
      <main class="grid">
        <article>
          <img
            src="https://www.freepnglogos.com/uploads/logo-mobile-legend-png/logo-mobile-legend-nasce-team-psg-rrq-paris-saint-germain-sbarca-20.png"
            alt=""
            width="300px"
            height="200px"
          />
          <div class="konten">
            <h2>Game:</h2>
            <p><b>Mobile Legends</b></p>
            <p>
              Dirilis pada tahun 2016, game ini semakin populer di seluruh
              dunia, terutama di wilayah Asia Tenggara, dan sejak itu telah
              melampaui 1 miliar kali unduhan, dengan puncak pemain bulanan
              sebanyak 100 juta.
            </p>
          </div>
          <a href="Penjelasan/ml.php"><button class="btn">Baca Selengkapnya</button></a>
        </article>
        <article>
          <img
            src="https://buatlogoonline.com/wp-content/uploads/2022/10/Logo-PUBG-Mobile.png"
            alt=""
            width="300px"
            height="200px"
          />
          <div class="konten">
            <h2>Game:</h2>
            <p><b>PUBG Mobile</b></p>
            <p>
              pada bulan Maret 2017. Walaupun belum genap satu tahun, tapi
              permainan ini telah membuat rekor baru, ada sekitar 877.844 pemain
              yang daring secara bersamaan pada tanggal 26 Agustus 2017 di
              platform Steam.
            </p>
          </div>
          <a href="Penjelasan/pubg.php"><button class="btn">Baca Selengkapnya</button></a>
        </article>
        <article>
          <img
            src="https://i.pinimg.com/originals/3d/64/f8/3d64f891a5e176a2cdd9985dd3522828.png"
            alt=""
            width="300px"
            height="200px"
          />
          <div class="konten">
            <h2>Game:</h2>
            <p><b>Subway Surfers</b></p>
            <p>
              Subway Surfers dirilis pada 24 Mei 2012 dengan pembaharuan
              berdasarkan libur musiman. Sejak 2 Januari 2013, pembaharuan telah
              didasarkan pada "World Tour" yang menempatkan permainan di kota
              baru setiap bulannya.
            </p>
          </div>
          <a href="Penjelasan/SubwaySurfers.php"><button class="btn">Baca Selengkapnya</button></a>
        </article>
        <article>
          <img
            src="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_GenshinImpact_miHoYoLimited_S1_2560x1440-91c6cd7312cc2647c3ebccca10f30399"
            alt=""
            width="300px"
            height="200px"
          />
          <div class="konten">
            <h2>Game:</h2>
            <p><b>Genshin Impact</b></p>
            <p>
              Genshin Impact (Hanzi: 原神, Pinyin: Yuánshén; Jepang: 原神
              (Hiragana: げんしん), Romaji: Genshin; bahasa Korea: 원신, Wonsi).
              Permainan ini dirilis pada tanggal 28 September 2020 di Android,
              iOS, Windows, dan PlayStation 4, serta 28 April 2021 di platform
              PlayStation 5.
            </p>
          </div>
          <a href="Penjelasan/GenshinImpact.php"><button class="btn">Baca Selengkapnya</button></a>
        </article>
        <article>
          <img
            src="https://play-lh.googleusercontent.com/ixHXzBWPmmKWIBxDMfjbIXK10UQCTDvIYOcs_uLXHCRbdsz2siJFYfb7MqckU8eC3Ks"
            alt=""
            width="250px"
            height="200px"
          />
          <div class="konten">
            <h2>Game:</h2>
            <p><b>Geometry Dash</b></p>
            <p>
              Geometry Dash is a series of side scrolling music platforming
              video games developed by Swedish developer Robert "RobTop" Topala.
              The game was released on 13 August 2013 on iOS and Android.
            </p>
          </div>
          <a href="Penjelasan/geometrydash.php"><button class="btn">Baca Selengkapnya</button></a>
        </article>
        <article>
          <img
            src="https://upload.wikimedia.org/wikipedia/en/0/0a/Flappy_Bird_icon.png"
            alt=""
            width="300px"
            height="200px"
          />
          <div class="konten">
            <h2>Game:</h2>
            <p><b>Flappy Bird</b></p>
            <p>
              Flappy Bird adalah sebuah permainan di Android dan iOS, yang
              dibuat oleh seorang pengembang dari Hanoi, Vietnam bernama Nguyen
              Ha Dong dan diluncurkan pada bulan Mei 2013.
            </p>
          </div>
          <a href="Penjelasan/flapybird.php"><button class="btn">Baca Selengkapnya</button></a>
        </article>
        <article>
          <img
            src="https://cdn.eraspace.com/pub/media/mageplaza/blog/post/g/a/gamecodmw.jpg"
            alt=""
            width="300px"
            height="200px"
          />
          <div class="konten">
            <h2>Game:</h2>
            <p><b>Modern Warfare 2</b></p>
            <p>
              Call of Duty: Modern Warfare 2 adalah Permainan komputer penembak
              orang pertama (FPS) yang dikembangkan oleh Infinity Ward dan
              diterbitkan oleh Activision untuk Xbox 360 dan PlayStation 3 video
              game konsol dan sistem operasi Microsoft Windows resmi diumumkan
              pada tanggal 11 Februari, 2009 game ini dirilis di seluruh dunia
              pada tanggal 10 November 2009.
            </p>
          </div>
          <a href="Penjelasan/modernwarfare2.php"><button class="btn">Baca Selengkapnya</button></a>
        </article>
        <article>
          <img
            src="https://www.metacritic.com/a/img/catalog/provider/6/12/6-1-707668-52.jpg"
            alt=""
            width="300px"
            height="200px"
          />
          <div class="konten">
            <h2>Game:</h2>
            <p><b>Growtopia</b></p>
            <p>
              Growtopia, commonly referred to as GT, is a massively multiplayer
              online sandbox video game where players can chat, farm, add
              friends, trade, build worlds, and engage in player versus player
              combat.The game was initially released on Android in November
              2012, and has been released for iOS, Microsoft Windows, and OS X
              since then. In 2019, it was released on Nintendo Switch,
              PlayStation 4 and Xbox One.The servers for the console versions
              were shut down on July 30, 2020.
            </p>
          </div>
          <a href="Penjelasan/growtopia.php"><button class="btn">Baca Selengkapnya</button></a>
        </article>
        <article>
          <img
            src="https://upload.wikimedia.org/wikipedia/id/b/bf/Resident_Evil_The_Final_Chapter_poster.jpg"
            alt=""
            width="300px"
            height="200px"
          />
          <div class="konten">
            <h2>Game:</h2>
            <p><b>Resident Evil: The Final Chapter</b></p>
            <p>
              Resident Evil: The Final Chapter merupakan film horor aksi dan
              fiksi sains yang ditulis dan disutradarai oleh Paul W. S.
              Anderson. Film ini merupakan film keenam dan seri terakhir dari
              Resident Evil, dan merupakan kelanjutan dari Resident Evil:
              Retribution (2012) berdasarkan serial permainan video horor
              Capcom. Film ini dibintangi oleh Milla Jovovich, Ali Larter, Ruby
              Rose, William Levy, Eoin Macken, Rola, Lee Joon-gi, dan Iain Glen.
            </p>
          </div>
          <a href="Penjelasan/residentevil.php"><button class="btn">Baca Selengkapnya</button></a>
        </article>
      </main>
    </div>
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
  </body>
</html>
