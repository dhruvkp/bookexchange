<?php
    session_start();
    include 'connection/connection.php';
    connectdb();

    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select user_id, password_hash from User where email='".$email."' or username='".$email."';";
    $result = query($sql);
    if($result->num_rows == 0)
    {
        echo "No user found.";
    }
    else
    {
        $row = $result->fetch_assoc();
        $hash=$row['password_hash'];
        $newhash=md5($password);
        if($newhash==$hash && $email != 'admin')
        {
            $_SESSION['userid']=$row['user_id'];
            header("Location: user_profile.php");
        }
		else if($newhash == $hash && $email='admin' && $password='admin'){
			$_SESSION['userid']=$row['user_id'];
            header("Location: /bookexchange/Admin/index.php");
		}
        else
            echo "password is wrong.";
    }
?>
