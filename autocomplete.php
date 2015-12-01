<?php
	
		include 'connection/connection.php';
        connectdb();
        $term=$_GET['search'];
        $sql="select * from Item where post_status='available' and (title like '%".$term."%') ORDER BY title ASC";
        $res=query($sql);
        while ($row = $res->fetch_assoc()) {
        $data[] = $row['title'];

    }
    echo json_encode($data);
?>