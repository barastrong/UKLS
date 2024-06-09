<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexs.css">
</head>
<body>
    <h2>Table produk</h2>
    <a href="../nextpage.php"><button>Back</button></a>
    <a href="addproduk.php"><button>Add Produk</button></a>
    
    <table>
        <tr>
            <td>NO</td>
            <td>Nama</td>
            <td>Gambar</td>
            <td>Rating</td>
            <td>Penjelasan</td>
            <td>Penjelasan</td>
            <td>Label</td>
            <td>Penjelasan</td>
            <td>Label</td>
            <td>Penjelasan</td>
            <td>Label</td>
            <td>Penjelasan</td>
            <td>Harga</td>
        </tr>
        <?php
        include "../../koneksi.php";

        $no = 1;
        $query_mysql = mysqli_query($mysqli,"SELECT * FROM images")or die(mysqli_error());
        
        while($data = mysqli_fetch_array($query_mysql)){
    ?> 
        <tr>
            <td><?php echo $no++;  ?></td>
            <td><?php echo $data['Nama']?></td>
            <td><img src="<?php echo $data['Image_path']?>" alt=""></td> 
            <td><?php echo $data['rating']?></td>
            <td><?php echo $data['Penjelasan']?></td>
            <td><?php echo $data['Penjelasan0']?></td>
            <td><?php echo $data['display']?></td>
            <td><?php echo $data['Penjelasan2']?></td>
            <td><?php echo $data['display2']?></td>
            <td><?php echo $data['Penjelasan3']?></td>
            <td><?php echo $data['display3']?></td>
            <td><?php echo $data['Penjelasan4']?></td>
            <td><?php echo $data['Price']?></td>
            <td ><a href='delete.php?Id=<?php echo $data['ID_PIC'];?>' class="ganti">Delete</a></td>
            <td ><a href='index2.php?Id=<?php echo $data['ID_PIC']?>' class="delete">Edit</a></td>
        </tr>
    <?php }?>
    </table>
</body>
</html>