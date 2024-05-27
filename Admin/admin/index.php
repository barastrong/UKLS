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
    <h1>CRUD</h1>
    <a href="../nextpage.php"><button>Back</button></a>
    <a href="Innerjoin.php"><button>Inner Join</button></a>
    <br>
    <table border='1'>
    <tr >
        <td>ID</td>
        <td>Username</td>
        <td>password</td>
        <td>level</td>
        <td>email</td>
    </tr>
    <?php 
include "../../koneksi.php";
$query_mysql = mysqli_query($mysqli,"SELECT * FROM pengguna")or die(mysqli_error());

while($data = mysqli_fetch_array($query_mysql)){
?>
<tr>
    <td><?php echo $data['ID']; ?></td>
    <td><?php echo $data['Username']; ?></td>
    <td><?php echo $data['Password']; ?></td>
    <td><?php echo $data['Level']; ?></td>
    <td><?php echo $data['Email']; ?></td>
    <td ><a href='edit.php?id=<?php echo $data['ID'];?>' class="ganti">Edit</a></td>
    <td ><a href='delete.php?id=<?php echo $data['ID'];?>' class="hapus">Delete</a></td>

</tr>
<?php } ?>
</table>
    </main>

    <footer>
        <p>Hak Cipta &copy; 2024 Admin Page.</p>
    </footer>

</body>
<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
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
</style>
</body>
</html>