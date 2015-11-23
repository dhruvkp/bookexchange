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

<?
    include 'footer.php';
?>
