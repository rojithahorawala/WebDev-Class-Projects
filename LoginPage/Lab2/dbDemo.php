<?php

session_start();

?>


<!DOCTYPE html>
<html>
	<head>
  <meta charset="utf-8">  
  <title>Database Demo</title></head>
	<body>

<?php


	

//    $logUsername = $_POST['logUsername'];
//    $logPassword = $_POST['logPassword'];
   $register = $_POST['register'];
   $login = $_POST['login'];

   $error = 0;


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
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }



?>


  	
	<?php
			if(isset($register))
			{
				

				$username = $_POST['username'];
				$password = $_POST['password'];
				if(empty($username))
				{
					$error += 1;
					echo 'Username field can not be empty <br>';
				}
				if(empty($password))
				{
					$error += 1;
					echo 'Password field can not be empty<br>';
				}
		



				if($error == 0)
				{
				$sqlOne = "insert into users( `username`, `password`) VALUES ('$username' , '$password')";
				$stmt = $mysqli->prepare($sqlOne);
				$stmt->execute();
				echo "You registered :)";
				// header('location: loggedIn.php')		
				}
				echo '<div >';
				echo '<h1>Head back and login <button><a href = "lab2.php"> Return to Register/Login</a>  </button></h1>';
	
				echo '</div>';
				
			}
			

	?>
	



	<table border="0">
			<thead>
				<tr>
					<!-- <td>User ID</td>
					<td>Username</td>
			<td>Password</td> -->

				</tr>
			</thead>
			<tbody>
		




<?php
  $mysqli->close();
?>

	</body>
</html>