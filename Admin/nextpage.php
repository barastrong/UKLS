<?php
session_start();
if (!isset($_SESSION['Username']) || $_SESSION['Level'] != "admin") {
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
            <a href="#social_icon">Contact</a>
            <a href="profile.php">Profile</a>
            <a href="admin/index.php">Admin Panel</a>
            <a href="Add Produk/index.php">Table Produk</a>
            <a href="Topup/payment.php">Order</a>
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
    <h1 align="center" id="containers" style="padding: 80px; font-size: 50px">
      The Game Dimension
    </h1>
    <div class="container">
        <main class="grid">
            <?php
            include '../koneksi.php';

            $query = "SELECT * FROM images";
            $result = mysqli_query($mysqli, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <article>
                <img
                  src="Add Produk/<?php echo htmlspecialchars($row['Image_path']); ?>"
                  width="300px"
                  height="200px"
                  alt="Game Image"
                />
                <div class="konten">
                    <h2>Game:</h2>
                    <p><b><?php echo htmlspecialchars($row['Nama']); ?></b></p>
                    <p><?php echo htmlspecialchars($row['Penjelasan']); ?></p>
                </div>
                <a href="Penjelasan/flapybird.php?id=<?php echo htmlspecialchars($row['ID_PIC']); ?>"><button class="btn">Baca Selengkapnya</button></a>
            </article>
            <?php } ?>
        </main>
    </div>
    <footer id="social_icon">
        <ul class="social_icon">
            <li><a href="#"><box-icon type="logo" name="instagram"></box-icon></a></li>
            <li><a href="#"><box-icon name="facebook" type="logo"></box-icon></a></li>
            <li><a href="#"><box-icon name="twitter" type="logo"></box-icon></a></li>
            <li><a href="#"><box-icon name="youtube" type="logo"></box-icon></a></li>
        </ul>
        <p>©Online Web Game</p>
    </footer>
</body>
</html>
