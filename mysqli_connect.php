<?php
DEFINE('DB_USER','shiv');
						DEFINE('DB_PASSWORD','iamsherlocked');
						DEFINE('DB_HOST','localhost');
						DEFINE('DB_NAME','airline_reservation');

						$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
						OR dies('Could not connect to MySQL:' .
							mysqli_connect_error());
?>
