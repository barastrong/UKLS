<?php 
// mengaktifkan session pada php
session_start();
include 'koneksi.php';

$username = $_POST['Username'];
$password = $_POST['Password'];

$login = mysqli_query($mysqli,"select * from pengguna where Username='$username' AND Password='$password'");
$cek = mysqli_num_rows($login);

//cek username
if($cek > 0){
    
    $data = mysqli_fetch_assoc($login);

    //cek jika user login sebagai admin
    if($data['Level']=="admin"){

        // buat session login dan username
        $_SESSION['Username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['Level'] = "admin";
        header("location:Admin/index.php");
        
        // cek jika usser login sebagai user
    }elseif($data['Level']=="user"){
        // buat session login dan username
        $_SESSION['Username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['Level'] = "user";
        // alihkan ke halaman dashboard user
        header("location:User/index.php");

    }else{
        // alihkan ke halaman login kembali
        header("location:index.php");
    }
}else{
    header("location:index.php?pesan=gagal");
}
?>