<?php

require 'connection_bd.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $u=$_POST['email'];
    $p=$_POST['password'];
    $resultat=mysqli_query($db, "select * from client where email = '$u' and password = '$p';");
    if ($resultat && $resultat->num_rows > 0) {
        echo " $u welcome";

        
        setcookie("user", $u, time() + (86400*30), "/");
        header("Location: core.html", true, 301);
    } else {
        header("Location: errorlogin.html", true, 301);
    }
}
?>
