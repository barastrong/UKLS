<?php
// Mulai sesi untuk melacak pengguna yang login
session_start();

// Cek apakah parameter 'id'     ada di URL, jika tidak ada, arahkan ke 'nextpage.php'
if (!isset($_GET['id'])) {
    header('Location: ../nextpage.php');
    exit();
}

// Sertakan file koneksi database
include '../../koneksi.php';

// Ambil parameter 'id' dari URL
$id = $_GET['id'];

// Cek apakah 'id' adalah angka, jika tidak, arahkan ke 'nextpage.php'
if (!is_numeric($id)) {
    header('Location: ../nextpage.php');
    exit();
}

// Siapkan pernyataan SQL untuk mengambil data dari tabel 'images' di mana ID_PIC sama dengan 'id'
$stmt = $mysqli->prepare("SELECT * FROM images WHERE ID_PIC = ?");

// Gantikan tanda tanya dalam pernyataan SQL dengan nilai 'id'
// 'i' berarti nilai yang diikat adalah integer
$stmt->bind_param("i", $id);

// Eksekusi pernyataan SQL
$stmt->execute();

// Dapatkan hasil eksekusi
$result = $stmt->get_result();

// Ambil data dalam bentuk array asosiatif
$data = $result->fetch_assoc();

// Cek apakah data ada, jika tidak ada, arahkan ke 'nextpage.php'
if (!$data) {
    header('Location: ../nextpage.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($data['Nama']); ?></title>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="flapybird.css">
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
</head>
<body>
    <!-- Navbar -->
    <header class="header">
        <div class="header-logo">
            <img src="../../logo.png" style="width: 100px; height: 50%" />
        </div>
        <nav class="navbar">
            <a href="../nextpage.php">Home</a>
            <a href="#containers">About</a>
            <a href="#social_icon">Contact</a>
            <a href="../profile.php">Profile</a>
        </nav>
        <div class="btns">
            <img src="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png" alt="">
            <p class="text"><?php echo htmlspecialchars($_SESSION['Username']); ?></p>
        </div>
    </header>
    <!-- Content -->
    <div class="about">
        <div class="about-img">
            <img src="../../Admin/Add Produk/<?php echo $data['Image_path']?>" alt="" width="60%" height="60%">
        </div>
        <div class="rating">
            <h2>Rating: <?php echo htmlspecialchars($data["rating"]); ?></h2>
        </div>
        <div class="about-text">
            <h2><?php echo htmlspecialchars($data['Nama']); ?></h2>
            <p><?php echo htmlspecialchars($data['Penjelasan0']); ?></p>
        </div>
    </div>
    <br><br><br><br>
    <h1 style="text-align: center; text-transform: uppercase; font-size: 35px;"><?php echo htmlspecialchars($data['Nama']); ?></h1>
    <br><br>
    <div class="display">
        <h2><?php echo htmlspecialchars($data['display']); ?></h2>
        <p><?php echo htmlspecialchars($data['Penjelasan2']); ?></p>
    </div>
    <br>
    <br>
    <div class="display">
        <h2><?php echo htmlspecialchars($data['display2']); ?></h2>
        <p><?php echo htmlspecialchars($data['Penjelasan3']); ?></p>
    </div>
    <br>
    <br>
    <div class="display">
        <h2><?php echo htmlspecialchars($data['display3']); ?></h2>
        <p><?php echo htmlspecialchars($data['Penjelasan4']); ?></p>
    </div>
    <br><br><br><br>
    <!-- Footer -->
    <footer id="social_icon">
        <ul class="social_icon">
            <li><a href="#"><box-icon type='logo' name='instagram'></box-icon></a></li>
            <li><a href="#"><box-icon name='facebook' type='logo'></box-icon></a></li>
            <li><a href="#"><box-icon name='twitter' type='logo'></box-icon></a></li>
            <li><a href="#"><box-icon name='youtube' type='logo'></box-icon></a></li>
        </ul>
        <p>©Online Web Game</p>
    </footer>
</body>
</html>
<?php
$stmt->close();
$mysqli->close();
?>
