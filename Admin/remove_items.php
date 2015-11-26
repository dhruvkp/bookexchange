<?php
    session_start();
    include 'connection.php';
    connectdb();

    $item_id=$_POST['item_id'];
	$url=$_POST['url'];
    
    $sql="delete from item where item_id='".$item_id."';";
    $result = query($sql);
	header('Location:'.$url);
    
?>
