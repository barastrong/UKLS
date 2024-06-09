<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Produk</title>
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="produks.css">
</head>
<body>
    <form action="addproduk.php" method="post" enctype="multipart/form-data">
        <div class="wrapper">
        <h1><strong>Add Produk</strong></h1>    
            <div class="input-box">
                <input type="text" placeholder="Nama Produk" name="Nama_Produk" required>
            </div>
            <div class="input-box">
            <textarea placeholder="Berikan Description Produk" name="Penjelasan" maxlength="500" required></textarea>
            </div>
            <div class="input-box">
                <input type="number" placeholder="Input Harga" name="Harga" required>
            </div>
            <div class="input-box">
            <textarea placeholder="Berikan Description Produk" name="Penjelasan0" maxlength="500" required></textarea>
            </div>
            <div class="input-box">
            <textarea placeholder="Berikan Description Display Produk" name="display" maxlength="500" required></textarea>
            </div>
            <div class="input-box">
            <textarea placeholder="Berikan Description Display ke 2 Produk" name="display2" maxlength="500" required></textarea>
            </div>
            <div class="input-box">
            <textarea placeholder="Berikan Description Display ke 3 Produk" name="display3" maxlength="500" required></textarea>
            </div>
            <div class="input-box">
            <textarea placeholder="Berikan Description ke 1 Produk" name="Penjelasan2" maxlength="500" required></textarea>
            </div>
            <div class="input-box">
            <textarea placeholder="Berikan Description ke 2 Produk" name="Penjelasan3" maxlength="500" required></textarea>
            </div>
            <div class="input-box">
            <textarea placeholder="Berikan Description ke 3 Produk" name="Penjelasan4" maxlength="500" required></textarea>
            </div>
            <div class="input-box">
                <input type="file" name="gambar" required>
            </div>
            <input type="submit" class="btn" name="Submit" value="Submit">
            <input type="submit" class="btn" value="Back" onclick="location.href='index.php'">
        </div>
    </form>

    <?php
if (isset($_POST['Submit'])) {
    include_once("../../koneksi.php");

    $Nama_Produk = $_POST['Nama_Produk'];
    $Penjelasan = $_POST['Penjelasan'];
    $Rating = $_POST['Rating'];
    $Harga = $_POST['Harga'];
    $Penjelasan0 = $_POST['Penjelasan0'];
    $display = $_POST['display'];
    $display2 = $_POST['display2'];
    $display3 = $_POST['display3'];
    $Penjelasan2 = $_POST['Penjelasan2'];
    $Penjelasan3 = $_POST['Penjelasan3'];
    $Penjelasan4 = $_POST['Penjelasan4'];

    // Handling file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allowed file types
    $allowed_types = ['jpg', 'jpeg', 'png'];

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false && in_array($imageFileType, $allowed_types)) {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            // File is valid, proceed to insert into database using prepared statement
            $query = "INSERT INTO images (Nama, Penjelasan, Image_path, Price, Penjelasan0, display, display2, display3, Penjelasan2, Penjelasan3, Penjelasan4) 
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $mysqli->prepare($query);
            if ($stmt) {
                // Bind parameters and execute the statement
                $stmt->bind_param("sssssssssss", $Nama_Produk, $Penjelasan ,$target_file, $Harga, $Penjelasan0, $display, $display2, $display3, $Penjelasan2, $Penjelasan3, $Penjelasan4);
                if ($stmt->execute()) {
                    echo "<script>alert('Product has been successfully registered.');</script>";
                    header("location:../nextpage.php");
                } else {
                    echo "Failed to register product.";
                }
                // Close the statement
                $stmt->close();
            } else {
                echo "Error in prepared statement.";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not a valid image.";
    }
}
?>

</body>
</html>
