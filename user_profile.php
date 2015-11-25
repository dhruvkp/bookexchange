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
    $sql = "select * from User where user_id='".$_SESSION['userid']."' ;";
    $result = query($sql);
    $row = $result->fetch_assoc();
    $fname=$row['firstname'];

    }

?>
<!-- <div class="row" style="font-family: 'Open Sans', sans-serif;">
           <div class="col-md-offset-2 col-md-8" style="margin-top:15px">
           <h3  align="center"> About me </h3> <hr style="margin-top:1px;margin-bottom:20px">
        
           </div>
       </div> -->

<div class="main">
      <div class="shop_top">
         <div class="container">
                                <div class="register-top-grid">
                                        <h3>PROFILE DETAIL</h3>
                                        <div class="top">
                                            <span>Name</span>
                                            <text><?php echo $row['firstname'] ." ". $row['lastname'] ?></text>
                                        </div>
                                        <div class="top">
                                            <span>Username</span>
                                            <text ><?php echo $row['username'] ?></text>
                                        </div>
                                        <div class="top">
                                            <span>Date of Birth</span>
                                            <text > <?php echo $row['dob'] ?></text>
                                        </div>
                                        <div class="top">
                                            <span>Gender</span>
                                            <text > <?php echo $row['gender'] ?></text>
                                        </div>
                                        <div class="top">
                                            <span>Email</span>
                                            <text > <?php echo $row['email'] ?></text>
                                        </div>
                                        <div class="top">
                                            <span>Contact</span>
                                            <text > <?php echo $row['contact_no'] ?></text>
                                        </div>
                                        
                                         <div class="top">
                                            <span>Address1</span>
                                            <text > <?php echo $row['address1'] ?></text>
                                        </div>
                                        <div class="top">
                                            <span>Address2</span>
                                            <text > <?php echo $row['address2'] ?></text>
                                        </div>
                                         <div class="top">
                                            <span>City</span>
                                            <?php $sql="select city_name from city where city_id =(select city_id from Zipcode where zipcode='".$row['zipcode']."');";
                                            $result1 = query($sql);
    										$row1 = $result1->fetch_assoc();
    
                                             ?>
    
                                            <text > <?php echo $row1['city_name'] ?></text>
                                        </div>
                                        
                                           <div class="top">
                                            <span>Zipcode</span>
                                            <text > <?php echo $row['zipcode'] ?></text>
                                        </div>
                                        <div class="clear"> </div>
                                </div>
                                <div class="clear"> </div>
                                <input type="submit" value="Edit Profile"> &nbsp; &nbsp;<input type="submit" value="Edit Password">
                       
                    </div>
           </div>
      </div>
<!-- 
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

  </div> -->

<?php
include 'footer.php';
?>
