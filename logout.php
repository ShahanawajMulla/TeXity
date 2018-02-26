<?php

session_start();
$_SESSION['username']=false;

session_destroy();

//echo "You've been logged out. <a href='adminlogin.php'>Click here</a> to return.";
header("Location: login.html");
?>