<?php

	include('dbDemo.php');

?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>This is a tab</title>
		
		<style>
			.greenB			{ border-color: green; }
			.blueB			{ border-color: blue;  }
		
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
		
		<div id = "outterDiv">
		<h1>Register </h1>
		
		 <!-- register form -->
		<form method="post" action="dbDemo.php">

			<label id = "text"> 


			</label>	
			
			<br>
			
			<label id="username"> Enter Username:

				<input type="text" name="username" id="username" value="">

			</label>	

 			<br><br><br>

			<label> Enter Password:</label>	

			<input type="password" name="password" id="password" value="">

		
			<br><br><br>


            
   

           		<input type="submit" name="register" id="register" value = "register" >
        <?php

        
        
        ?>
            
   
            
        </form>
        

       <!-- login form -->

		<h1>Log-in </h1>
		
		<form method="post" action="loggedIn.php">

			<label id = "text"> 

		

			</label>	
			
			<br>
			
			<label id="logUsername"> Enter Username:

				<input type="text" name="logUsername" id="logUsername" value="">

			</label>	

 			<br><br><br>

			<label> Enter Password:</label>	

			<input type="password" name="logPassword" id="logPassword" value="">

		
			<br><br><br>

   
    
           		<input type="submit"  name="login" id="login" value="login">
 
        

			<br>

			
		</form>

		<br><br><br>

		<div id="outputDiv"></div>	
		<div id = "errorDiv"></div>	

		</div>
		
	</body>

</html>