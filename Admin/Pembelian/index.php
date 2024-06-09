<?php
include("../../koneksi.php");

if (!isset($_GET['id'])) {
    header("location:../nextpage.php");
    exit();
}

$id = mysqli_real_escape_string($mysqli, $_GET['id']);
$result = mysqli_query($mysqli, "SELECT * FROM images WHERE ID_PIC='$id'");

if ($result) {
    $data = mysqli_fetch_assoc($result);
    if ($data) {
        $name = htmlspecialchars($data['Nama']);
        $image = htmlspecialchars($data['Image_path']);
        $harga = htmlspecialchars($data['Price']);
    } else {
        header("location:../nextpage.php");
        exit();
    }
} else {
    die("Database query failed: " . mysqli_error($mysqli));
}

mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topup</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form action="proses.php" method="post">
        <h2>Topup</h2>
        <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_SESSION['ID']); ?>">
        <input type="hidden" name="id_produk" value="<?php echo $id; ?>">
        <div>
            <img src="../Add Produk/<?php echo $image; ?>" alt="">
        </div>
        <div class="Nama">
            <h2><?php echo $name; ?></h2>
        </div>
        <div clas="ID">
            <label for=""><strong>ID Game:</strong></label>
            <input type="number" min="1" name="Id_Game" required>
        </div>
        <div class="Quaintity">
            <label for=""><strong>Quantity:</strong></label>
            <input type="number" min="1" name="jumlah">
        </div>
        <div class="email">
            <label for=""><strong>Email (optional):</strong></label>
            <input type="email" name="email">
        </div>
        <hr>
        <div class="Price">
            <label for=""><strong>Price:</strong><?php echo $harga; ?></label>
        </div>
        <input type="submit" name="Submit" value="Buy">
        <input type="button" name="back" value="Back" onclick="location.href='../nextpage.php'">
    </form>
</body>
</html>
