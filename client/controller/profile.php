
<html>

<head>
    <title>Smart Taxi|Core</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/core.css">
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="./js/core.js"></script>
    <style>
    a:hover{
        color :white;
        text-align: left;
        
    }
    a{
        color : white;
    }
    .menu-toggle{
        text-align: left;
    }
    
    </style>

</head>

<body>

<div class="mobile-wrapper">

		<div class="mobile mobile-three">
            
			<div class="header">
                	<div class="menu-toggle">
                            <a href="core.html"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
                        </div>
            </div>  
            
            ​<picture>
               
                <img src="./w.png" class="img-fluid img-thumbnail" width="50%">
              </picture>
          


              
              <?php
require "connection_bd.php";
$id = $_COOKIE["user"];
$resultat=mysqli_query($db, "select * from client where email='$id';");
while ($ligne=mysqli_fetch_array($resultat)) {
    ?>

<h1> nom : <?php echo $ligne['nom']; ?></h1>
<h2> prenom : <?php echo $ligne['prenom']; ?></h2>
<h2> email : <?php echo $ligne['nom']; ?></h2>
<h2> password : <?php echo $ligne['password']; ?></h2>
<h2> telephone : <?php echo $ligne['tel']; ?></h2>
<h2> adress : <?php echo $ligne['adress']; ?></h2>
<?php
} ?>

        </div>
        </div> 
	
        <!--===============================================================================================-->
            <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/bootstrap/js/popper.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/daterangepicker/moment.min.js"></script>
            <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
            <script src="js/main.js"></script>
    </body>
    </html>