<?php
session_start();
    if(!isset($_SESSION['userid']))
   {
    header("location:login.php");
   }
   else
   {
    include 'header.php';
    }

?>

<p>Here is my user profile code.</p>

<?php
include 'footer.php';
?>
