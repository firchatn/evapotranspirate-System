<?php
require "connection_bd.php";
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM culture WHERE id=$id;");

header("Location: tableCulture.php", 301);
?>