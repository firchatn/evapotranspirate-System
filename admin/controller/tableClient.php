<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Client</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
<script>
	$(function () {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

		if (!screenfull.enabled) {
			return false;
		}

		$('#toggle').click(function () {
			screenfull.toggle($('#container')[0]);
		});	
	});
</script>
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
</head>
<body class="dashboard-page">

	<nav class="main-menu">
		<ul>
			<li>
				<a href="home.html">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Accueil
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-check-square-o nav_icon"></i>
				<span class="nav-text">
				Ajouter
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="ajouterCulture.html">Culture</a>
					</li>
					<li>
						<a class="subnav-text" href="ajouterClient.html">Client</a>
					</li>
					<li>
						<a class="subnav-text" href="ajouterSystem.html">System</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="tableCulture.php">
					<i class="fa fa-file-text-o nav_icon"></i>
					<span class="nav-text">
					Culture
					</span>
				</a>
			</li>
			<li>
				<a href="tableClient.php">
					<i class="fa fa-bar-chart nav_icon"></i>
					<span class="nav-text">
					Client
					</span>
				</a>
			</li>
			<li>
				<a href="tableSystem.php">
					<i class="fa fa-check-square-o nav_icon"></i>
					<span class="nav-text">
					System d'irrigation
					</span>
				</a>
			</li>
			<li>
					<a href="AjouterCultureClient.php">
						<i class="fa fa-check-square-o nav_icon"></i>
						<span class="nav-text">
						Culture Client
						</span>
					</a>
				</li>
			
	
		</ul>
		<ul class="logout">
			<li>
			<a href="logout.php">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Deconnection
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="index.html"><img src="images/logo.png" alt="" />Club Equitation</a></h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</div>
			<div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
					<div class="header-right-left">
						<!--notifications of menu start -->
						<ul class="nofitications-dropdown">
							
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-notification">
									<li>
										<div class="notification_header">
											<h3>You have 3 new notifications</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet</p>
										<p><span>1 hour ago</span></p>
										</div>
									  <div class="clearfix"></div>	
									 </a></li>
									 <li class="odd"><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									 </a></li>
									 <li><a href="#">
										<div class="user_img"><img src="images/3.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									 </a></li>
									 <li>
										<div class="notification_bottom">
											<a href="#">See all notifications</a>
										</div> 
									</li>
								</ul>
							</li>	
							
							<div class="clearfix"> </div>
						</ul>
					</div>	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Paramétres</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i> Profil</a> </li> 
									<li> <a href="#"><i class="fa fa-sign-out"></i> Déconnexion</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Les Clients</h2> 
			
					<a  href="ajouterClient.html"><i class="fa fa-plus fa-2x"></i> </a>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  
					    <table id="table">
<thead>
						  <tr>
							<th>ID Client</th>
							<th>Nom</th>
							<th>Prenom</th>
                            <th>Email</th>
                            <th>Password</th>
              <th>Cin</th>
              <th>Adress</th>
							<th>Telephone</th>
                            <th>Type</th>
                           
							<th></th>
						  </tr>
						</thead>
						<tbody>

                        <?php
require "connection_bd.php";
$resultat=mysqli_query($db, "select * from client;");
while ($ligne=mysqli_fetch_array($resultat)) {
    ?>

						<tr>
							<td><?php echo $ligne['id']; ?></td>
							<td><?php echo $ligne['nom']; ?></td>
							<td><?php echo $ligne['prenom']; ?></td>
							<td><?php echo $ligne['email']; ?></td>
              <td><?php echo $ligne['password']; ?></td>
              <td><?php echo $ligne['cin']; ?></td>
							<td><?php echo $ligne['adress']; ?></td>
							<td><?php echo $ligne['tel']; ?></td>
							<td><?php echo $ligne['type']; ?></td>
							
							<td>        

 
                <a  href="modifierclient.php?id=<?php echo $ligne['id'] ?>"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                <a class="text-danger" href="supprimerclient.php?id=<?php echo $ligne['id'] ?>"><i class="fa fa-trash-o fa-2x"></i></a>
                &nbsp;&nbsp;
							</td>
						</tr>
                    
                          
                          <?php
} ?>

						</tbody>
					  </table>
					</div>
				

			

			

				

			
			</div>
		</div>
		<!-- footer -->
		
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>




</body>
</html>
