<?php
session_start();
if(!isset($_SESSION['Username']) || $_SESSION['Level'] != "user"){
    header("Location: ../index.php");
    exit();
}

$username = $_SESSION['Username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas akhir</title>
    <link rel="stylesheet" href="indexs.css">
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
        <a href="#social_icon">Contact</a>
        <a href="profile.php">Profile</a>
        <a href="../Logout.php">Logout</a>
      </nav>
      <div class="btns">
        <img
          src="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
          alt=""
          class="img"
        />
        <p class="text"><?php echo htmlspecialchars($username); ?></p>
      </div>
    </header>
    <div class="awal">
        <h1>Welcome to Web Game</h1>
        <p>This website explains various games</p>
        <a href="nextpage.php"><button class="btn">Visit Us To Know More </button></a>
    </div>
</body>
</html>