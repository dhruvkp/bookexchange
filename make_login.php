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
        if($newhash==$hash)
        {
            $_SESSION['userid']=$row['user_id'];
          ?><script type="text/javascript">
         window.location.href = "usr_profile.php";
          </script>
<?php
        }
        else
            echo "password is wrong.";
    }
?>
