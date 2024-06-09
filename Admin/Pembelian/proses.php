<?php
session_start();
include '../../koneksi.php';

if (isset($_SESSION['ID'])) {
    $user_id = $_SESSION['ID'];

    if (isset($_POST['Submit'])) {
        $product_id = $_POST['id_produk'];
        $quantity = $_POST['jumlah'];
        $usern = $_POST['Id_Game'];
        $email = $_POST['email'];

        // Query untuk mendapatkan harga produk
        $query = "SELECT Price, Image_path, Nama FROM images WHERE ID_PIC = $product_id";
        $result = mysqli_query($mysqli, $query);
        $row = mysqli_fetch_assoc($result);
        $price = $row['Price'];
        $image = $row['Image_path'];
        $nama_img = $row['Nama'];

        // Hitung total harga   
        $total_price = $price * $quantity;

        // Simpan order ke dalam database
        $insert_query = "INSERT INTO topup (ID_PIC, Nama, User_ID, Email, Quantity, Image_path, ID, Price)
                         VALUES ('$product_id', '$nama_img', '$usern', '$email', '$quantity', '$image', '$user_id', '$total_price')";
        if (mysqli_query($mysqli, $insert_query)) {
            // Ambil ID pesanan terakhir yang dimasukkan
            $orderID = mysqli_insert_id($mysqli);
            // Simpan ID pesanan di sesi
            $_SESSION['ID_TOPUP'] = $orderID;
            echo "<script>alert('Order successfully submitted!');</script>";
            header("Refresh: 1.2;url=success.php");
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($mysqli);
        }
    } else {
        echo "No data submitted.";
    }
} else {
    echo "Session ID not set.";
}
?>
