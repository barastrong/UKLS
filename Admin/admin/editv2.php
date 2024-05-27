<?php
        include("../../koneksi.php");

        if (isset($_POST['Simpan'])) {
            $id = $_POST['id'];
            $username= $_POST['username'];
            $password= $_POST['password'];
            $level= $_POST['level'];
            $email= $_POST['email'];

            $result = mysqli_query($mysqli,"UPDATE pengguna SET Username='$username' ,Password='$password',Level='$level' ,Email='$email' WHERE ID=$id");
            header('Location:index.php');       

            // header("location:index.php");
        }
        ?>