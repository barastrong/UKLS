<?php

include_once("../../koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM pengguna WHERE ID=$id");

header("location:index.php")

?>