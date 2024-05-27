<?php

include_once("../../koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM topup WHERE ID_TOPUP=$id");

header("location:Innerjoin.php");

?>