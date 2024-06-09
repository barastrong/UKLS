<?php

include_once("../../koneksi.php");

if (isset($_GET['Id'])) {
    // Mengambil nilai ID dari parameter GET
$ids = $_GET['Id'];

$result = mysqli_query($mysqli, "DELETE FROM topup WHERE ID_TOPUP=$ids");

header("refresh: 1; url=Tableorder.php");
}
?>