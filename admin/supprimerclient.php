<?php
require "connection_bd.php";
$id = $_GET['id'];
mysqli_query($db, "DELETE FROM client WHERE id=$id;");

header("Location: tableClient.php", 301);
?>