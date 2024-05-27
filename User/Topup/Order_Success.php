<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
    <style>
        /* Style the body to use Flexbox */
        body {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 100vh; /* Full viewport height */
            margin: 0; /* Remove default margin */
            font-family: Arial, sans-serif; /* Optional: improve font appearance */
        }
        /* Style the success message container */
        .success-message {
            border: 1px solid #ccc;
            padding: 20px; /* Increase padding for better appearance */
            max-width: 500px;
            text-align: left; /* Align text to the left for readability */
        }
        /* Style the list */
        ul {
            list-style-type: none;
            padding: 0;
        }
        /* Style list items */
        li {
            margin-bottom: 10px; /* Increase margin for better spacing */
        }
        h2 {
            text-align: center; /* Center align the heading */
        }
    </style>
</head>
<body>
    <div class="success-message">
    <h2>Order Successful!</h2>
        <p>Thank you for your order. Your order has been successfully placed.</p>
        <p>Your order details:</p>
        <ul>
            <?php
            include '../../koneksi.php';
            session_start();

            // Ambil ID pesanan dari variabel sesi
            if (isset($_SESSION['ID_TOPUP'])) {
                $orderID = $_SESSION['ID_TOPUP'];

                // Query untuk mengambil detail pesanan berdasarkan ID pesanan
                $query = "SELECT * FROM topup WHERE ID_TOPUP = '$orderID'";
                $result = mysqli_query($mysqli, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    $order = mysqli_fetch_assoc($result);
                    echo "<li><strong>Order ID:</strong> {$order['ID_TOPUP']}</li>";
                    echo "<li><strong>Product Name:</strong> {$order['Nama']}</li>";
                    echo "<li><strong>ID Game:</strong> {$order['User_ID']}</li>";
                    echo "<li><strong>Your Email:</strong> {$order['Email']}</li>";
                    echo "<li><strong>Jumlah Pembelian:</strong> {$order['Quantity']}</li>";
                    echo "<li><strong>Total Harga:</strong> Rp.{$order['Price']}</li>";
                    echo "<li><strong>Order Date:</strong> {$order['Tanggal_Pembelian']}</li>";
                    echo "<script>aler('Thankyou for Buying')</script>";
                    header("Refresh: 5; url=../nextpage.php");
                } else {
                    echo "<script>aler('Your Order not found!')</script>";
                    header("Refresh:5; url=Tableorder.php");
                }}
            ?>
        </ul>
    </div>
</body>
</html>
