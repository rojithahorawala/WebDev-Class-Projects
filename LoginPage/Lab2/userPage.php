<!DOCTYPE html>
<html>
	<head><title>Database Demo</title>


    <style>
			.greenB			{ border-color: green; }
			.blueB			{ border-color: blue;  }

            .bigger { size: 12px;}
		
			div.visible 	{ display: block; }
			div.invisible 	{ display: none; }

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
			
			#outputDiv		{
								border-style: none;
								background-color: rgb(255, 255, 255, 0.493);  /* font */
								width: 4000px;
     							height:4000px;
							}

			#errorDiv       {
								border-style: none;
								color: rgb(110, 15, 28);
								width: 1000px;
     							height:300px;
							}
		
		</style>

    </head>
	<body>
	
	<script>
			function colorFuncThree()
			{
				document.getElementById("outputDiv").style.backgroundColor = '#ADF5A3';
			}

			function colorFuncTwo()
			{
				document.getElementById("outputDiv").style.backgroundColor = '#99C0D0';
			}

		
			function colorFunc()
			{
				document.getElementById("outputDiv").style.backgroundColor = '#EDD7E6';
			}

		</script>

		<div id = "outputDiv">
		<p class = 'textsizeup' class = ''>WELCOME USER<p>
		
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
			
		if ($mysqli->connect_error) {
			echo 'Errno: '.$mysqli->connect_errno;
			echo '<br>';
			echo 'Error: '.$mysqli->connect_error;
			exit();
 		 }
		?>


		
		
		<!-- <input type="button" id="theButton" value="Toggle Color Light pink"> -->

		
			<div class ='pos'>
				<button onclick="colorFunc()">Change to Light Pink</button>

				<button  onclick="colorFuncTwo()">Change to Light Blue</button>

				<button  onclick="colorFuncThree()">Change to Light Green</button>
			</div>
			<div class ='posTwo'>
			<h1>Back to <button><a href = "lab2.php"> Login</a>  </button></h1>

			</div>


		
		</div>

		


<?php
  $mysqli->close();
?>
	
	</body>
</html>