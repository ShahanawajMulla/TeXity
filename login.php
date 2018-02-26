<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];


$cnn=mysql_connect("localhost","root","");
	mysql_select_db('tex',$cnn);

$query= mysql_query("SELECT * FROM `users` WHERE username='$username'");
$numrows = mysql_num_rows($query);
	 $row = mysql_fetch_assoc($query);
	 	
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
			
		
		if(($username==$dbusername) && ($password==$dbpassword))
		{

			$_SESSION['username']=$row['username'];

			//echo "Youre in! <a href='admin.html'>Click</a> here to enter the member page ";
				header("Location: admin.php");

		}
		else
		
		{	echo "<script> alert('Incorrect password!');</script>";
			header("Location: login.html");
		}
			


	


?>