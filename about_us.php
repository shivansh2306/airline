<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to udaanbharo.com
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<script src="js/file.js"></script>	
	</head>
	<body onload="myFunction()" style="margin:0;">
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			UDAAN BHARO
		</h1>
		<div id="title2">
		<?php
			if($_SESSION['login_user']!=null){
	 			echo "<h4>Welcome <i>".$_SESSION['login_user']."</i></h4>";
	 		}
		?>

		</div>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="about_us.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact_us.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<div style="display:none;" id="myDiva" class="animate-bottom">
		<div class="container">
			<div class="welcome_text">Welcome to UDAAN BHARO!</div>
			<div class="about_text"><strong>Udaan Bharo is a Fight Booking Platform that helps Customers to book flight easily through our User-friendly interface. Register yourself at udaanbharo.com and login to enjoy the benefits.</strong></div>
			<img src="images/airport3.jpg" height=100% width=100%>
			<div class="footer" id="myDIV">&copy; Shivansh Bhardwaj</div>
		</div>
		</div>
		<div id="loader"></div>
	</body>
</html>
