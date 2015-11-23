<?php
session_start();
    if(!isset($_SESSION['userid']))
   {
    header("location:login.php");
   }
   else
   {
    include 'header.php';
	include 'connection/connection.php';
    connectdb();
    $result = query($sql);
    $sql = "select firstname,lastname from User where user_id='".$_SESSION['userid']."' ;";
    $row = $result->fetch_assoc();
        
    }

?>

<p>Here is my user profile code.</p>

<?php
include 'footer.php';
?>
