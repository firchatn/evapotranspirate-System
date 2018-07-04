<?php
require 'connection_bd.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 
    $nom = $_POST['nom'];

  

    $q =  "INSERT INTO `culture`(`nom`) VALUES ('$nom');";

    


    mysqli_query($db, $q);
    header("Location: tableCulture.php", true, 301);
}
?>