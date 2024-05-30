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
    <h1>List Order</h1>
    <a href="../nextpage.php"><button>Back</button></a>
    <table>
        <tr>
            <td>ID</td>
            <td>ID Produk</td>
            <td>ID User</td>
            <td>Nama Produk</td>
            <td>Quantity</td>
            <td>Harga</td>
            <td>Tanggal Pembelian</td>
        </tr>
        <?php
        include '../../koneksi.php';

        $query = mysqli_query($mysqli, "SELECT topup.ID_TOPUP, topup.Nama, topup.ID_PIC, topup.Quantity, topup.Price, pengguna.ID, topup.User_ID, topup.Tanggal_Pembelian
        From topup
        INNER JOIN pengguna ON topup.ID = pengguna.ID") or die(mysqli_error($mysqli));
        while($data = mysqli_fetch_array($query)){    
        ?>
        <tr>
        <td><?php echo $data['ID_TOPUP'];?></td>
        <td><?php echo $data['ID_PIC'];?></td>
        <td><?php echo $data['ID'];?></td>
        <td><?php echo $data['Nama'];?></td>
        <td><?php echo $data['Quantity'];?></td>
        <td><?php echo 'Rp.'.$data['Price'];?></td>
        <td><?php echo $data['Tanggal_Pembelian'];?></td>

        <!-- <td><a href='deletes.php?Id=<?php echo $data['ID_TOPUP'];?>' class="hapus">Delete</a></td> -->
        </tr>
<?php } ?>
    </table>
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