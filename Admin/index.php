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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas akhir</title>
    <link rel="stylesheet" href="indexs.css">
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
</head>
<body>
<header class="header">
      <div class="header-logo">
        <img
src="../logo.png"
          style="width: 150px; height: 50%"
        />
      </div>
      <nav class="navbar">
        <a href="nextpage.php">Home</a>
        <a href="nextpage.php">About</a>
        <a href="nextpage.php">Contact</a>
        <a href="profile.php">Profile</a>
        <a href="../Logout.php">Logout</a>
      </nav>
      <div class="btns">
        <img
          src="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
          alt=""
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