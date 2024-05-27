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
    <title>Geometry Dash</title>
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
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxCsKBzwrQ2SI2joH0vyYYgaOfpkoDVm3o75BbIS-NRw&s" alt="" width="60%" height="50%">
        </div>
        <div class="rating">
        <h2>Rating: <?php echo $data["rating"]?></h2>
        </div>
        <div class="about-text">
            <h2>Geometry Dash</h2>
            <p>Geometry Dash is a side-scrolling music platforming game series developed by Robert Topala. The game was released on 13 August 2013 on iOS and Android, and the Windows and macOS versions on 22 December 2014. In Geometry Dash, players control the movement of an icon and navigate music-based levels while avoiding obstacles such as spikes. </p>
        </div>
       </div>
       <br><br><br><br><br><br><br><br><br>
       <h1 style="text-align: center; text-transform: uppercase; font-size: 35px;">Geometry Dash</h1>
       <br><br>
       <div class="display">
        <h2>Gameplay</h2>
        <p>As a single-button game, Geometry Dash can be played with a touchscreen, keyboard, mouse, or controller. The player manipulates the movement of their icon through input in the form of pressing or holding to reach the end of a level. The level restarts if the player crashes into an obstacle, such as a spike, a sawblade, a wall, or a ceiling. There is a 'practice mode' in which a player may place checkpoints to survey or practice a level but is unable to collect coins or gain progress for normal mode. The timing and rhythm of the in-game music are key parts of the game, often relating to each other.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Reception</h2>
        <p>The game received generally positive reviews from critics. Softpedia complimented the game's style and challenge that it brings up, saying, 'While it can get a bit frustrating sometimes, you can always complete the stages using the practice mode and then jump into the many different user-generated levels'.148Apps gave the game a positive review, stating, 'Geometry Dash provides all of the challenge expected from an 'impossible' game while also making it more accessible to newcomers'.Geometry Dash has also been listed by the reviewer Chris Morris on the website Common Sense Media as a child-friendly video game that parents could let their children play on, stating that the game was a 'good way to handle frustration' and that 'families can also talk about rhythm and the joy of dancing in time with music'.On the App Store, Geometry Dash was the second-best and seventh-best selling iPad and iPhone game in 2018, respectively.</p>
       </div>
       <br>
       <br>
       <div class="display">
        <h2>Pre-Geometry Dash</h2>
        <p>Geometry Dash was created by Swedish video game developer Robert Nicholas Christian Topala (born 23 February 1987), known professionally as RobTop. On 6 June 2010, Topala created his first video game, Bounce Ball Thingy, on Newgrounds, developing it while he was at university studying civil engineering. He later abandoned his course because he became more interested in the video game industry.</p>
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