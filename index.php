<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
    <div class="wrapper">
            <h1>Login</h1>
            <form action="loginLoading.php" method="post">
            <div class="input-box">
                <input type="text" placeholder="Username" name="Username" required>
                <box-icon type='solid' name='user'></box-icon>
            </div> 
            <div class="input-box">
                <input type="password" placeholder="Password" name="Password" required>
                <box-icon name='lock-alt'></box-icon>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" required>Remember me</label>
                <a href="#">Fogot password?</a>
            </div>
                <input type="Submit" class="btn" name="Submit">
            <div class="register-link">
                <p>Don't have an account? <a href="registers.php">Register</a></p>
            </div>
            </from>
    </div>
</body>

</html>
