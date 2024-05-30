<?php

include_once("../../koneksi.php");

if (isset($_GET['Id'])) {
    // Mengambil nilai ID dari parameter GET
$ids = $_GET['Id'];

$result = mysqli_query($mysqli, "DELETE FROM images WHERE ID_PIC=$ids");

header("location:index.php");
}
?>