<?php
require 'connection_bd.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $cin = $_POST['cin'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel= $_POST['tel'];
    $email = $_POST['email'];
    $type = $_POST['gender'];
    $adress = $_POST['adress'];
    $password = $_POST['password'];
  

    $q =  "INSERT INTO `client`(`nom`, `prenom`, `email`, `password`, `cin`, `adress`, `type`, `tel`) VALUES ('$nom','$prenom','$email','$password','$cin','$adress','$type','$tel');";

    


    mysqli_query($db, $q);
    header("Location: tableClient.php", true, 301);
}
?>