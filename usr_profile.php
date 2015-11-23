<?php
session_start(); 
    if(!isset($_SESSION['userid']))
   {
    header("location:make_login.php");
   }
   else
   {
    echo $_SESSION['userid'];
    }

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Book exchange</title>

</head>

<body>
	

</body>