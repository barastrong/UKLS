<?php
session_start();
include '../../koneksi.php';

if (!isset($_SESSION['ID'])) {
    echo "User not logged in.";
    exit();
}

$iduser = $_SESSION['ID'];

if (isset($_POST['Submit'])) {
    $id_game = htmlspecialchars($_POST['Id_Game']);
    $id_produk = htmlspecialchars($_POST['id_produk']);
    $jumlah = htmlspecialchars($_POST['jumlah']);
    $email = htmlspecialchars($_POST['email']);

    // Validate inputs
    if (empty($id_game) || empty($id_produk) || empty($jumlah)) {
        echo "All fields except email are required.";
        exit();
    }

    // Check if the user ID exists in the pengguna table
    $user_check_stmt = $mysqli->prepare("SELECT ID FROM pengguna WHERE ID = ?");
    $user_check_stmt->bind_param("i", $iduser);
    $user_check_stmt->execute();
    $user_check_stmt->store_result();

    if ($user_check_stmt->num_rows == 0) {
        echo "User not found.";
        exit();
    }

    $user_check_stmt->close();

    // Prepare statement to fetch product details
    $stmt = $mysqli->prepare("SELECT Nama, Price, Image_path FROM images WHERE ID_PIC = ?");
    $stmt->bind_param("i", $id_produk);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($hasil = $result->fetch_assoc()) {
            $harga = $hasil['Price'];
            $nama_produk = $hasil['Nama'];
            $image_path = $hasil['Image_path'];

            $total = $harga * $jumlah;

            // Prepare insert statement
            $insert_stmt = $mysqli->prepare("INSERT INTO topup (Nama, User_ID, Email, Image_path, Price, Quantity, ID, ID_PIC) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            $insert_stmt->bind_param("sisdsiii", $nama_produk, $iduser, $email, $image_path, $total, $jumlah, $id_game, $id_produk);

            if ($insert_stmt->execute()) {
                $orderID = $insert_stmt->insert_id;
                $_SESSION['ID_TOPUP'] = $orderID; // Set the session variable with the transaction ID
                echo "Transaction successful.";
            } else {
                echo "Error: " . $insert_stmt->error;
            }

            $insert_stmt->close();
        } else {
            echo "Product not found.";
        }

        $stmt->close();
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Invalid input data.";
}
?>
