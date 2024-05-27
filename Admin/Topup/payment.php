<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="Jasa.css">
</head>
<body>
<form action="order_process.php" method="post">
    <h2>Order Form</h2>
    <input type="hidden" name="user_id" value="<?php echo $_SESSION['ID']; ?>">
        <label for="number">Id game:</label>
        <input type="text" name="name" id="name" placeholder="Massukan User ID" required>
        <label for="product">Product:</label>
        <select id="product" name="product_id" required>
            <option value="">Select Product</option>
            <?php
            // Ambil daftar produk dari database
            include '../../koneksi.php';
            $query = "SELECT * FROM images";
            $result = mysqli_query($mysqli, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['ID_PIC']}' > {$row['Nama']} - Rp.{$row['Price']}</option>";
            }
            ?>
        </select>
        <br>
        <label for="quantity">Jumlah Pembelian:</label>
        <input type="number" id="quantity" name="quantity" min="1" value="1" required>
        <br>
        <label for="email">Email (opisional)</label>
        <input type="email" id="name" name="email" placeholder="Masukkan email" required>
        <input type="submit" value="Submit Order" name="submit">
    </form>
</body>
</html>
