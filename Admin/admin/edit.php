<?php
    include("../../koneksi.php");

    if( !isset($_GET['id'])){
        header('Location: index.php');
    }
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE ID=$id");

    while($user = mysqli_fetch_array($result))
    {
        $username = $user['Username'];
        $password = $user['Password'];
        $level = $user['Level'];
        $email = $user['Email'];
    }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
</head>
<body>
<form action="editv2.php" method="post">

        <div>
            <label>Username</label> <br>
            <input name="username" type="text"  value="<?php echo $username;?>">
        </div>  
        <div>
            <label>Password</label> <br>
            <input name="password" type="text"  value="<?php echo $password;?>">
        </div> 
        <div>
            <label>Level</label> <br>
            <select id="level" name="level" class="level" value="<?php echo $level;?>">
            <option value="admin">Admin</option>
            <option value="user">User</option>
            </select>
        </div>  
        <div>
            <label>Email</label> <br>
            <input name="email" type="email"  value="<?php echo $email;?>">
        </div> 
        <div>
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <input type="submit" name="Simpan" value="Submit">
        </div>
    </form>
     <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    margin-top: 140px;
}

form {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form div {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    color: #333;
}

input[type="text"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}

select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg fill="rgba(0,0,0,0)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M7 10l5 5 5-5H7z"/></svg>');
    background-repeat: no-repeat;
    background-position-x: calc(100% - 10px);
    background-position-y: center;
}

input [type="submit"] {
background-color:#45a049;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 4px;
}

input:hover [type="submit"] {
    background-color: #45a049;
}

    </style>
    </html>