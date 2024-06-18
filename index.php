<!DOCTYPE html>
<html lang="en">
    <!-- coding by helpme_coder -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
 </head>
<body>  
    <div class="container">
       <div class="box">
        <div class="header">
            <p>Log In</p>
        </div>
        <form action="loginLoading.php" method="POST">
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
            <input type="submit" class="input-submit" name="Submit" value="SIGN IN">
        </div>
        <div class="bottom">
            <span><a href="registers.php">Sign Up</a></span>
            <span><a href="#">Forgot Password?</a></span>
        </div>
       </div>
       <div class="wrapper"></div>
    </div>
    </form>
</body>
</html>