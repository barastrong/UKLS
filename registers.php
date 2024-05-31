<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registers.css">
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
    <form action="registers.php" method="post">
        <div class="wrapper">
            <h1>Registration</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="Username" required>
                <box-icon type='solid' name='user'></box-icon>
            </div> 
            <div class="input-box">
                <input type="email" placeholder="Email" name="Email" required>
                <box-icon type='solid' name='envelope'></box-icon>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="Password">
                <box-icon type='solid' name='lock-alt'></box-icon>
            </div>
            <div class="role">
                <select name="role" id="">
                    <option value="" disable selected>Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <br><br>
            <div class="remember-forgot">
                <label><input type="checkbox" required>I agree to the terms & conditions</label>
            </div>
            <input type="Submit" class="btn" name="Submit">
            <div class="register-link">
                <p>Already have an account? <a href="index.php">Login</a></p>
            </div>
        </div>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        $user= $_POST['Username'];
        $password= $_POST['Password'];
        $level= $_POST['role'];
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
