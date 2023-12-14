<?php
    // include("dbDemo.php");
    session_start();
?>


<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>This is a tab</title>
		
		<style>
			.greenB			{ border-color: green; }
			.blueB			{ border-color: blue;  }

            .bigger { size: 12px;}
		
			div.visible 	{ display: block; }
			div.invisible 	{ display: none; }

			#outterDiv		{background-color: rgba(255, 255, 255, 0.493);
							width: 4000px;;
     						height:4000px;
							}
			
			#outputDiv		{
								border-style: none;
								color: rgb(17, 15, 15);  /* font */
								width: 1000px;
     							height:100px;
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
    <h2>Username and/or Password is not registered. <br><br> Please click 'Return to Register/Login' button to register or try agian</h2>                 
    <?php


	

        
        $login = $_POST['login'];

        $error = 0;


        $db_host = 'localhost';
        $db_user = 'root';
        $db_password = 'root';
        $db_db = 'lab2';	
                                    
        $db_port = 8889;

        $mysqli = new mysqli(
            $db_host,
            $db_user,
            $db_password,
            $db_db,
            $db_port	
        );
            
        if ($mysqli->connect_error) {
            echo 'Errno: '.$mysqli->connect_errno;
            echo '<br>';
            echo 'Error: '.$mysqli->connect_error;
            exit();
        }




    ?>
        
    
        
    <?php

        if(isset($login))
        {
            $logUsername = $_POST['logUsername'];
            $logPassword = $_POST['logPassword'];

            if(empty($logUsername) || empty($logPassword))
            {
                echo 'Username is empty<br>';
                echo 'or<br>';
                echo ' Password is empty';
                echo '<div>';
                echo '<a href="lab2.php"><b>Try again</b></a>';
                echo '</div>';
                $error += 1;
                // header('location: lab2.php');
            }


            if($error == 0)
            {
                $sqlLogin = "SELECT * FROM users WHERE username= '$logUsername' AND password = '$logPassword'";
                $result = $mysqli->query($sqlLogin);
                
                // $result = mysqli_query($mysqli, $sqlLogin);
                // $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);

               //$countRows = my_sqli_num_rows($result);

                while($row=$result->fetch_assoc())
                {
                    echo 'logged in as ' . $row["username"];
                    echo '<br>';
                    echo 'logged in as ' . $row["password"];
                    echo '<br>';

                    if($logUsername == 'admin' || $db_password == 'admin')
                    {
                        header('location: adminPage.php');
                    }
                    else
                    {
                        header('location: userPage.php');
                    }
                    break;
                }
                


                echo '<br><br><br><br><br>';
            }

        }


    

	


        
    ?>    
    <div >
			<h1>Try Agian? <button><a href = "lab2.php"> Return to Register/Login</a>  </button></h1>

			</div>

</html>