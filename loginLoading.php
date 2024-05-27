<?php 
session_start();
include 'koneksi.php';

$username = $_POST['Username'];
$password = $_POST['Password'];

// Gunakan parameterized query untuk mencegah SQL Injection
$stmt = $mysqli->prepare("SELECT * FROM pengguna WHERE Username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0) {
    $data = $result->fetch_assoc();

    // Gunakan password_verify() untuk memverifikasi kata sandi
    if(password_verify($password, $data['Password'])) {
        // buat session login dan username
        $_SESSION['Username'] = $username;
        $_SESSION['Level'] = $data['Level'];
        
        // Tentukan lokasi redirect berdasarkan level pengguna
        if($data['Level'] == "admin") {
            header("location:Admin/index.php");
        } elseif($data['Level'] == "user") {
            header("location:User/index.php");
        } else {
            header("location:index.php");
        }
    } else {
        header("location:index.php?pesan=gagal");
    }
} else {
    header("location:index.php?pesan=gagal");
}
$stmt->close();
?>
