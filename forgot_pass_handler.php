<html>
	<head>
		<title>Login Handler</title>
	</head>
	<body>
		
		<?php
			session_start();
			session_destroy();
			session_start();
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['username']))
				{
					$data_missing[]='Username';
				}
				else
				{
					$user_name=trim($_POST['username']);
					$_SESSION['login_user']=$user_name;
				}
				if(empty($_POST['phone']))
				{
					$data_missing[]='Phone';
				}
				else
				{
					$phone=trim($_POST['phone']);
				}
				if(empty($data_missing))
				{
						require_once('mysqli_connect.php');
						$query="SELECT count(*) FROM customer where customer_id=? and phone_no=?";
						$stmt=mysqli_prepare($dbc,$query);
						mysqli_stmt_bind_param($stmt,"ss",$user_name,$phone);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_bind_result($stmt,$cnt);
						mysqli_stmt_fetch($stmt);
						//echo $cnt;
						mysqli_stmt_close($stmt);
						mysqli_close($dbc);
						/*$affected_rows=mysqli_stmt_affected_rows($stmt);
						$response=@mysqli_query($dbc,$query);
						echo $affected_rows;
						*/
						if($cnt==1)
						{
							$_SESSION['user_type']='forgotpass';
							header("location: forgot_pass2.php");
						}
						else
						{
							echo "User Not Found";
							session_destroy();
							header('location:forgot_pass.php?msg=failed');
						}
				
						mysqli_close($dbc);
				}
				else
				{
					echo "The following data fields were empty<br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Submit request not received";
			}
		?>
	</body>
</html>
