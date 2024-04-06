<?php
session_start();
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>SPUCODERS</title>
			<link rel="stylesheet" type="text/css" href="assets/styles/styledefault.css">
			<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300&display=swap" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
	  <body>

	  <div class="header">
		  <div class="container">
			  <div class="navbar">
				  <a href="index.php"><img src="assets/images/spuco_logo_no.png" class="logo1" alt="snow"></a>
						<nav id="nav-exit">
							<ul id="MenuItems">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About Us</a</li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="eventsandcompetitions.php">Events & Competitions</a></li>
								<li><a href="membershipaccount.php">Membership</a></li>
							</ul>
						</nav>
						<!-- Menu icon -->
					  <img src="assets/images/menu.png" alt="snow" class="menu-icon" onclick="menutoggle()" align="center">
			  </div>
		  </div>
    </div>

	<!----------js for toggle menu----------->
	<script>
		var MenuItems = document.getElementById("MenuItems");
		MenuItems.style.maxHeight = "0px";
		function menutoggle(){
			if(MenuItems.style.maxHeight == "0px")
			{
				MenuItems.style.maxHeight = "fit-content";
				document.getElementById("nav-exit").style.visibility = "";
			}
			else
			{
					MenuItems.style.maxHeight = "0px";
					document.getElementById("nav-exit").style.visibility = "collapse";	
			}
		}
	</script>
