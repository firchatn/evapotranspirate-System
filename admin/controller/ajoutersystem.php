<?php
require 'connection_bd.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 
    $nom = $_POST['nom'];

  

    $q =  "INSERT INTO `system`(`nom`) VALUES ('$nom');";

    


    mysqli_query($db, $q);
    header("Location: tableSystem.php", true, 301);
}
?>