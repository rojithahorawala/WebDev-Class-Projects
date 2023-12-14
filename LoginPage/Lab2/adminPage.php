<!DOCTYPE html>
<html>
	<head><title>Database Demo</title>
	<style>
			

			#outterDiv		{background-color: rgb(255, 255, 255, 0.493);
							width: 4000px;;
     						height:4000px;
							}
			.pos{
					position: absolute;
					top: 200px;
       				left: 100px;
				}

			.posOne{
				position: absolute;
				top: 50px;
				left: 10px;
			}	
			.posTwo{
					position: absolute;
					top: 400px;
       				left: 10px;
				}

			.textsizeup{font-size: 29px;} 
			
		

		
		</style>
	</head>
	<body>

<?php
	$db_host = 'localhost';
	$db_user = 'root';
	$db_password = 'root';
	$db_db = 'lab2';	// the database to
								// connect to on this server
	$db_port = 8889;

	$mysqli = new mysqli(
		$db_host,
		$db_user,
		$db_password,
		$db_db,
		$db_port	// be careful...you need this!
	);
		
	if ($mysqli->connect_error) 
	{
		echo 'Errno: '.$mysqli->connect_errno;
		echo '<br>';
		echo 'Error: '.$mysqli->connect_error;
		exit();
	}
	
?>

	<table border="1">
		<thead>
			<tr>
				<td>users ID</td>
				<td>Username</td>
				<td>Password</td>
			</tr>
		</thead>
		<tbody>
<?php
		//$database = 
		// we'll fill in each row here
		$sql = "SELECT * FROM users ORDER BY username ASC";
		$stmt = $mysqli->prepare($sql);
		$stmt->execute();
		$result = $stmt->get_result();


		foreach($result as $resultRow)
		{	
		//	print("<tr><td>" . $resultRow["artistID"] . "</td>" 
		//		. "<td>" . $resultRow["name"] . "</td></tr>");
			$artID =  $resultRow["userID"];
			$artName =   $resultRow["username"];
			$pass = $resultRow["password"];
			print("<tr><td>$artID</td>" 
				. "<td>$artName</td>" . "<td>$pass</td></tr>");

			
		}
?>		
	<p class = 'textsizeup'>WELCOME admin<p>
		
		</tbody>
	</table>


	<div >
	
		<h1>Log out?<button><a href = "lab2.php"> Register/Login</a>  </button></h1>

	</div>
		


<?php
  $mysqli->close();
?>

	</body>
</html>