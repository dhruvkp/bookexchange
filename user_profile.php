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
    $sql = "select firstname,lastname from User where user_id='".$_SESSION['userid']."' ;";
    $result = query($sql);
    $row = $result->fetch_assoc();
    $fname=$row['firstname'];

    }

?>
<div id="wrapper">
<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Hello , <?php echo $fname; ?>
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Post your book</a>
                </li>
                <li>
                    <a href="#">Registered book</a>
                </li>
                <li>
                    <a href="#">My accounts</a>
                </li>

            </ul>
        </div>

<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>


</div>
        <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<?php
include 'footer.php';
?>
