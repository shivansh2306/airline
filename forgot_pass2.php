<?php
	session_start();
	if($_SESSION['login_user']==null||$_SESSION['user_type']!='forgotpass'){
	 	header('location:home_page.php');
	 }
?>
<html>
	<head>
		<title>
			Create New User Account
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 135px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			UDAAN BHARO
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
				<li><a href="about_us.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact_us.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>
		<br>
		<form class="center_form" action="forgot_pass_handler2.php" method="POST" id="new_user_from">
			<br>
			<table cellpadding='10'>
				<strong>ENTER LOGIN DETAILS</strong>
				<tr>
					<td>Enter new Password  </td>
					<td><input type="password" name="pass" required><br><br></td>
				</tr>
			</table>
			<br>
			<input class="subm" type="submit" value="Submit" name="Submit">
			<br>
		</form>
	</body>
</html>
