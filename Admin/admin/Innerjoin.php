<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inner Join</h1>
    <a href="../nextpage.php"><button>Back</button></a>
    <table>
    <tr>
        <td>ID Topup</td>
        <td>Nama Game</td>
        <td>ID Game</td>
        <td>Jumlah</td>
        <td>Price</td>
    </tr>
    <?php 
    include '../../koneksi.php';

    $query = mysqli_query($mysqli, "SELECT topup.ID_TOPUP, images.Nama, images.ID_PIC, topup.Quantity, topup.Price
    From topup
    INNER JOIN images ON topup.ID_PIC = images.ID_PIC") or die(mysqli_error($mysqli));
    while($data = mysqli_fetch_array($query)){    
    ?>
    <tr>
        <td><?php echo $data['ID_TOPUP'];?></td>
        <td><?php echo $data['Nama'];?></td>
        <td><?php echo $data['ID_PIC'];?></td>
        <td><?php echo $data['Quantity'];?></td>
        <td><?php echo 'Rp.'.$data['Price'];?></td>
        <td><a href='deletes.php?id = <?php echo $data['ID_TOUP'];?>'>Delete</a></td>
    </tr>
    <?php }?>
    </table>
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
</html>