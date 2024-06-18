<?php
// Mengaktifkan session pada PHP
session_start();
include 'koneksi.php';

$username = $_POST['Email'];
$password = $_POST['Password'];

// Melakukan query untuk mendapatkan data pengguna
$login = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE Email='$username' AND Password='$password'");
$cek = mysqli_num_rows($login);

// Cek username dan password
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    $_SESSION['Username'] = $username;
    $_SESSION['ID'] = $data['ID'];
    $_SESSION['Username'] = $data['Username']; // Menyimpan nama pengguna dalam sesi

    // Cek jika user login sebagai admin
    if($data['Level'] == "admin"){
        // Buat session login dan username
        $_SESSION['Email'] = $username;
        $_SESSION['Level'] = "admin";
        header("Location: Admin/index.php");

    // Cek jika user login sebagai user
    } elseif($data['Level'] == "user"){
        // Buat session login dan username
        $_SESSION['Email'] = $username;
        $_SESSION['Level'] = "user";
        header("Location: User/index.php");

    } else {
        // Alihkan ke halaman login kembali
        header("Location: index.php");
    }
} else {
    header("Location: index.php?pesan=gagal");
}
?>
