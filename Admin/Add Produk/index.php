<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexs.css">
    <link
      rel="icon"
      href="https://static.republika.co.id/uploads/images/inpicture_slide/poster-solo-leveling-webcomic-yang-akan-diadaptasi-menjadi_220706173845-217.png"
    />
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
    <h2>Table Produk</h2>
    <a href="../nextpage.php"><button>Back</button></a>
    <a href="addproduk.php"><button>Add produk</button></a>
    <table>
        <tr>
            <td>ID</td>
            <td>Nama Produk</td>
            <td>Gambar</td>
            <td>Penjelasan</td>
            <td>Display</td>
            <td>Penjelasan</td>
            <td>Display</td>
            <td>Penjelasan</td>
            <td>Display</td>
            <td>Penjelasan</td>
            <td>Rating</td>
            <td>Harga</td>
        </tr>
        <?php
        include '../../koneksi.php';

        $query = mysqli_query($mysqli, "SELECT * FROM images");
        while($data = mysqli_fetch_array($query)){    
        ?>
        <tr>
            <td><?php echo $data['ID_PIC']?></td>
            <td><?php echo $data['Nama']?></td>
            <td><img src="<?php echo $data['Image_path']?>"></td>
            <td><?php echo $data['Penjelasan0']?></td>
            <td><?php echo $data['display']?></td>
            <td><?php echo $data['Penjelasan2']?></td>
            <td><?php echo $data['display2']?></td>
            <td><?php echo $data['Penjelasan3']?></td>
            <td><?php echo $data['display3']?></td>
            <td><?php echo $data['Penjelasan4']?></td>
            <td><?php echo $data['rating']?></td>
            <td><?php echo 'Rp.'.$data['Price']?></td>
            <td ><a href='deletes.php?Id=<?php echo $data['ID_PIC'];?>' class="ganti">Delete</a></td>
        </tr>
<?php } ?>
    </table>
    <footer id="social_icon">
        <ul class="social_icon">
            <li><a href="#"><box-icon type="logo" name="instagram"></box-icon></a></li>
            <li><a href="#"><box-icon name="facebook" type="logo"></box-icon></a></li>
            <li><a href="#"><box-icon name="twitter" type="logo"></box-icon></a></li>
            <li><a href="#"><box-icon name="youtube" type="logo"></box-icon></a></li>
        </ul>
        <p>©Online Web Game</p>
    </footer>
</body>

</html>