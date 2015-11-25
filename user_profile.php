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
<div class="row">
           <div class="col-md-offset-2 col-md-8" style="margin-top:15px">
           <h3 class="box_title" align="center"> About me </h3> <hr style="margin-top:5px;margin-bottom:5px">
        
           </div>
       </div>


  <div class="row">
       	<div class="col-md-offset-2 col-md-8 well">
           
          <div class="col-md-offset-1 col-md-5">
           <br><b> Name: </b> Heet Vachhani  <br> 
          </div>
          <div class="col-md-offset-1 col-md-5">
           <br><b> Email: </b> 26vachhani@gmail.com <br> 
          </div>
         
         <div class="col-md-offset-1 col-md-5">
           <br><b> City: </b>   <br> 
          </div>

          <div class="col-md-offset-1 col-md-5">
           <br><b> College: </b> <br> 
          </div> 
          
          <div class="col-md-offset-1 col-md-5">
          <br><b>Address: </b> <br> 
          </div>   

          <div class="col-md-offset-1 col-md-5">
           <br><b>Phone: </b> <br> 
          </div>       
          <div class="col-md-offset-1 col-md-5">
           <br><b>Occupation: </b>  <br> 
          </div> 
          
          </div>

  </div>

<?php
include 'footer.php';
?>
