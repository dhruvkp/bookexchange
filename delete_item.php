<?php
    include 'connection/connection.php';
    connectdb();
    $sql='Delete from Item where item_id='.$_POST['itemid'];
    $res=query($sql);
    echo $res;
?>
