<?php
//Connects to your Database 
mysql_connect("localhost", "aichatbot", "Bulldog@1979") or die(mysql_error()); 
mysql_select_db("database name") or die(mysql_error()); 

 //checks cookies to make sure they are logged in 
 if(isset($_COOKIE['https://www.aichatbot.ai'])){ 

 	$username = $_COOKIE['aichatbot']; 
 	$pass = $_COOKIE['Bulldog@1979']; 
 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )){ 

		//if the cookie has the wrong password, they are taken to the login page 
 		if ($pass != $info['password']){
			header("Location: login.php"); 
 		}
		//otherwise they are shown the admin area
		else{
		
 			 echo "Admin Area<p>"; 
     echo "Your Content<p>"; 
     echo "<a href=logout.php>Logout</a>"; 
 		}
	}
}

 else{ //if the cookie does not exist, they are taken to the login screen 
	header("Location: login"); 
 }
 ?>
