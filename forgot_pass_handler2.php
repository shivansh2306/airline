<?php
	session_start();
?>
<html>
	<head>
		<title>Login Handler</title>
	</head>
	<body>
		
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['pass']))
				{
					$data_missing[]='Password';
				}
				else
				{
					$pass_word=md5($_POST['pass']);
				}
				if(empty($data_missing))
				{
						//echo "haha".$user_name;
						$user_name=$_SESSION['login_user'];
						require_once('mysqli_connect.php');
						$query="UPDATE customer SET pwd=? where customer_id=?";
						$stmt=mysqli_prepare($dbc,$query);
						mysqli_stmt_bind_param($stmt,"ss",$pass_word,$user_name);
						mysqli_stmt_execute($stmt);
						$affected_rows=mysqli_stmt_affected_rows($stmt);
						mysqli_stmt_close($stmt);
						mysqli_close($dbc);
						session_destroy();

						if($affected_rows==1)
						{
							header("location: login_page.php?msg=pass_updated");
						}
						else
						{
							echo "Error in updating Password";
							header('location:forgot_pass.php?msg=failed');
						}
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
