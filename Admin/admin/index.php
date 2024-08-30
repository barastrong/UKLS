<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
</head>
<body>
    <h2>CRUD</h2>
    <a href="../nextpage.php"><button>Back</button></a>
    <a href="../Topup/Tableorder.php"><button>Table Order</button></a>
    <br>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php 
        include "../../koneksi.php";
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM pengguna") or die(mysqli_error($mysqli));
        while($data = mysqli_fetch_array($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $data['ID']; ?></td>
            <td><?php echo $data['Username']; ?></td>
            <td><?php echo $data['Password']; ?></td>
            <td><?php echo $data['Level']; ?></td>
            <td><?php echo $data['Email']; ?></td>
            <td><a href='edit.php?id=<?php echo $data['ID'];?>' class="ganti">Edit</a></td>
            <td><a href='delete.php?id=<?php echo $data['ID'];?>' class="hapus">Delete</a></td>
        </tr>
        <?php } ?>
    </table>

    <!-- <footer>
        <p>Hak Cipta &copy; 2024 Admin Page.</p>
    </footer> -->

</body>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h2 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

button {
    padding: 8px 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
}

button:hover {
    background-color: #0056b3;
}

.ganti {
    color: blue;
    text-decoration: none;
}

.ganti:hover {
    text-decoration: underline;
}

.hapus {
    color: red;
    text-decoration: none;
}

.hapus:hover {
    text-decoration: underline;
}

footer {
    text-align: center;
    margin-top: 20px;
    padding: 10px;
    background-color: #ddd;
    width: 100%;
}
</style>
</html>
