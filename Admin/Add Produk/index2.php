<?php
include("../../koneksi.php");

if (!isset($_GET['Id'])) {
    header('Location: index.php');
    exit();
}
$id = mysqli_real_escape_string($mysqli, $_GET['Id']);

$result = mysqli_query($mysqli, "SELECT * FROM images WHERE ID_PIC='$id'");

if ($result) {
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        $name = htmlspecialchars($user['Nama']);
        $penjelasan = htmlspecialchars($user['Penjelasan']);
        $penjelasan0 = htmlspecialchars($user['Penjelasan0']);
        $label = htmlspecialchars($user['display']);
        $label2 = htmlspecialchars($user['display2']);
        $label3 = htmlspecialchars($user['display3']);
        $penjelasan2 = htmlspecialchars($user['Penjelasan2']);
        $penjelasan3 = htmlspecialchars($user['Penjelasan3']);
        $penjelasan4 = htmlspecialchars($user['Penjelasan4']);
        $price = htmlspecialchars($user['Price']);
    } else {
        echo "<script>alert('Data not found.'); window.location.href = 'index.php';</script>";
    }
} else {
    echo "<script>alert('Query failed: " . mysqli_error($mysqli) . "'); window.location.href = 'index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="edit.css">
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
</head>
<body>
<form action="editv2.php" method="post" enctype="multipart/form-data">
    <h2>Edit Form</h2>
    <div>
        <label for="gambar">Upload Gambar:</label>
        <input type="file" name="gambar">
    </div>
    <div>
        <label for="name">Nama Produk:</label>
        <input type="text" name="NP" value="<?php echo $name; ?>" required>
    </div>
    <div>
        <label for="penjelasan">Penjelasan:</label>
        <textarea name="PJ" maxlength="500" required><?php echo $penjelasan; ?></textarea>
    </div>
    <div>
        <label for="penjelasan0">Penjelasan 0:</label>
        <textarea name="PJ0" maxlength="500" required><?php echo $penjelasan0; ?></textarea>
    </div>  
    <div>
        <label for="label1">Label 1:</label>
        <input type="text" name="L1" value="<?php echo $label; ?>" required>
    </div>
    <div>
        <label for="penjelasan2">Penjelasan 2:</label>
        <textarea name="PJ2" maxlength="500" required><?php echo $penjelasan2; ?></textarea>
    </div>
    <div>
        <label for="label2">Label 2:</label>
        <input type="text" name="L2" value="<?php echo $label2; ?>" required>
    </div>
    <div>
        <label for="penjelasan3">Penjelasan 3:</label>
        <textarea name="PJ3" maxlength="500" required><?php echo $penjelasan3; ?></textarea>
    </div>
    <div>
        <label for="label3">Label 3:</label>
        <input type="text" name="L3" value="<?php echo $label3; ?>" required>
    </div>
    <div>
        <label for="Penjelasan4">Penjelasan 4:</label>
        <textarea name="PJ4" maxlength="500" required><?php echo $penjelasan4; ?></textarea>
    </div>
    <div>
        <label for="Price">Price:</label>
        <input type="number" name="Price" value="<?php echo $price; ?>" required>
    </div>
    <div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="Simpan" value="Submit">
        <input type="button" name="Back" value="Back" onclick="window.location.href='index.php'">
    </div>
</form>
</body>
</html>
