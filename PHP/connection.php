<?php
					$servername = "localhost";
					$server_user = "root";
					$server_pass = "";
					$dbname = "avyato_task";
					$con = new mysqli($servername, $server_user, $server_pass, $dbname);
					if(!$con)
					{
						die('connection error'.mysqli_error($con));
					}	
?>
