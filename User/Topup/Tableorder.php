<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Order</title>
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
</head>
<body>
    <h1>List Order</h1>
    <a href="../nextpage.php"><button>Back</button></a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Quantity</th>
            <th>Harga</th>
            <th>Tanggal Pembelian</th>
        </tr>
        <?php
            session_start();
            include_once("../../koneksi.php");
            
            if (isset($_SESSION['ID'])) {
                $user_id = $_SESSION['ID'];

                $no = 1;
                $sql = "SELECT * FROM topup WHERE ID = $user_id";

                $result = mysqli_query($mysqli, $sql);
                
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['Nama']; ?></td>
            <td><?php echo $row['Quantity']; ?></td>
            <td><?php echo 'Rp.'.$row['Price'];?></td>
            <td><?php echo $row['Tanggal_Pembelian']; ?></td>
            <td><a href='deletes.php?Id=<?php echo  $row['ID_TOPUP'];?>'>Batalkan Pemesanan</a></td>
        </tr>
        <?php
                    }
                } else {
                    echo "<tr><td colspan='7'>No data found</td></tr>";
                }
            } else {
                echo "<tr><td colspan='7'>User not logged in</td></tr>";
            }
        ?>
    </table>
</body>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h1 {
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

.hapus {
    color: red;
    text-decoration: none;
}

.hapus:hover {
    text-decoration: underline;
}
</style>
</html>
