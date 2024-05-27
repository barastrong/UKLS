<?php
include '../../koneksi.php';
$Id = 5;
$query = mysqli_query($mysqli,"SELECT * FROM images WHERE ID_PIC = $Id");
while($data = mysqli_fetch_assoc($query)){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Growtopia</title>
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
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGDh3K3f1fyIMjpcrMhZSPncCFxM3BbiixkCVW2x6fEA&s" alt="" width="110%" height="50%">
        </div>
        <div class="rating">
        <h2>Rating: <?php echo $data["rating"]?></h2>
        </div>
        <div class="about-text">
            <h2>Growtopia</h2>
            <p>Growtopia, commonly referred to as GT, is a massively multiplayer online sandbox video game where players can chat, farm, add friends, trade, build worlds, and engage in player versus player combat. The game was initially released on Android in November 2012, and has been released for iOS, Microsoft Windows, and OS X since then. In 2019, it was released on Nintendo Switch, PlayStation 4 and Xbox One. The servers for the console versions were shut down on July 30, 2020.</p>
        </div>
       </div>
       <br><br><br><br><br><br><br><br><br>
       <h1 style="text-align: center; text-transform: uppercase; font-size: 35px;">Growtopia</h1>
       <br><br>
       <div class="display">
        <h2>Development</h2>
        <p>Growtopia, commonly referred to as GT, is a massively multiplayer online sandbox video game where players can chat, farm, add friends, trade, build worlds, and engage in player versus player combat. The game was initially released on Android in November 2012, and has been released for iOS, Microsoft Windows, and OS X since then. In 2019, it was released on Nintendo Switch, PlayStation 4 and Xbox One. The servers for the console versions were shut down on July 30, 2020.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Gameplay</h2>
        <p>Growtopia is a 2D massively multiplayer online sandbox video game based around the idea that most of the in-game items can be grown from seeds of trees. The game has no end goals or 100% completion, however, there is an achievement system and quests to complete from non-player characters.When a new player joins, they are sent to a private world called Tutorial, which teaches them the basics of the game by giving them quests through an item called the Growpedia. The player starts out with two basic tools: a fist for punching and breaking blocks and a wrench for editing block properties, adding players and trading items. Once they have finished the tutorial, they are sent to a world called Start so that they can learn more about the game.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Release</h2>
        <p>The game can be played on multiple operating systems, including Microsoft Windows, OS X, iOS, and Android. The iOS version was released on January 11, 2013, after the initial release for Android on November 30, 2012. Following these mobile releases, the game was brought to computers; a Windows beta version was released on July 9, 2013, and a OS X version was released on July 27, 2013.</p>
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