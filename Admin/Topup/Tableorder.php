<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="OrderTable.css">
</head>
<body>
    <h2>Order List</h2>
    <a href="../nextpage.php"><button>Back</button></a>
    <table border="1">
        <tr>
            <th>Order ID</th>
            <th>Product Name</th>
            <th>User ID</th>
            <th>Email</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Order Date</th>
        </tr>
        <?php
        $no = 1;
        include '../../koneksi.php';
        $query = "SELECT * FROM topup";
        $result = mysqli_query($mysqli, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$row['Nama']}</td>
                    <td>{$row['User_ID']}</td>
                    <td>{$row['Email']}</td>
                    <td>{$row['Quantity']}</td>
                    <td>Rp.{$row['Price']}</td>
                    <td>{$row['Tanggal_Pembelian']}</td>
                    <td><a href='Delete.php?id={$row['ID_TOPUP']}'>Batalkan Pemesanan</a></td>
                  </tr>";
                  $no++;
        }
        ?>
    </table>
</body>
</html>
