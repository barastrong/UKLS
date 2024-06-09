<?php
include("../../koneksi.php");

if (isset($_POST['Simpan'])) {
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $nama_produk = mysqli_real_escape_string($mysqli, $_POST['NP']);
    $PJ = mysqli_real_escape_string($mysqli, $_POST['PJ']);
    $PJ0 = mysqli_real_escape_string($mysqli, $_POST['PJ0']);
    $label = mysqli_real_escape_string($mysqli, $_POST['L1']);
    $PJ2 = mysqli_real_escape_string($mysqli, $_POST['PJ2']);
    $label2 = mysqli_real_escape_string($mysqli, $_POST['L2']);
    $PJ3 = mysqli_real_escape_string($mysqli, $_POST['PJ3']);
    $label3 = mysqli_real_escape_string($mysqli, $_POST['L3']);
    $PJ4 = mysqli_real_escape_string($mysqli, $_POST['PJ4']);

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ['jpg', 'jpeg', 'png'];

    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false && in_array($imageFileType, $allowed_types)) {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $stmt = $mysqli->prepare("UPDATE images 
                                      SET Nama = ?, Penjelasan = ?, Penjelasan0 = ?, display = ?, display2 = ?, display3 = ?, Penjelasan2 = ?, Penjelasan3 = ?, Penjelasan4 = ?, Image_path = ? 
                                      WHERE ID_PIC = ?");
            $stmt->bind_param('ssssssssssi', $nama_produk, $PJ, $PJ0, $label, $label2, $label3, $PJ2, $PJ3, $PJ4, $target_file, $id);

            if ($stmt->execute()) {
                header("Location: index.php");
                exit();
            } else {
                echo "<script>alert('Input Gagal: " . $stmt->error . "');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Upload Gagal');</script>";
        }
    } else {
        echo "<script>alert('File harus berupa gambar (jpg, jpeg, png)');</script>";
    }
}
?>
