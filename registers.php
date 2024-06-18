<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png">
    <title>Login</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="header">
                <p>Sign Up</p>
            </div>
            <form action="" method="POST">
                <div class="input-box">
                    <label for="username">Username</label>
                    <input type="text" class="input-field" id="username" name="Username" required>
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-box">
                    <label for="email">E-Mail</label>
                    <input type="email" class="input-field" id="email" name="Email" required>
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <label for="pass">Password</label>
                    <input type="password" class="input-field" id="pass" name="Password" required>
                    <i class="bx bx-lock"></i>
                </div>
                <div class="input-box">
            <input type="submit" class="input-submit" name="Submit" value="SIGN UP">
        </div>
                <div class="bottom">
                    <span>Have An Account? <a href="index.php">Log In</a></span>
                </div>
            </form>
        </div>
        <div class="wrapper"></div>
    </div>
    <?php
    if (isset($_POST['Submit'])) {
        $user= $_POST['Username'];
        $password= $_POST['Password'];
        $level= 'user';
        $email= $_POST['Email'];

        include_once("koneksi.php");

        $result = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE Username='$user' OR Email='$email'");

        if (mysqli_num_rows($result)>0) {
            echo "<script>alert('Username or email already exists. Please choose another one.!')</script>";
        }else{
            $get = mysqli_query($mysqli, "INSERT INTO pengguna (Username, Password, Email, Level) VALUES ('$user', '$password', '$email', '$level')");
            if ($get>0){
                echo "<script>alert('Registration successful!')</script>";
                header("Refresh: 1.5; url=index.php");
        } else {
            echo "<script>alert('Registration failed. Please try again.')</script>";
        }
    }
    }
    ?>
</body>
</html>
