<?php 
	
	session_start();
    if(!isset($_SESSION['userid']))
   {
    header("location:/bookexchange/login.php");
   }
   else
   {
    include 'header.php';


    include 'connection.php';
    connectdb();
	$sql = "select user_id,firstname, lastname, email, username, dob  from User where status = 'under_review';";
	$user_list = array();
	$result = query($sql);

    }

	
	
	
?>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
				<form name='f1' method='post' >
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					
					<th class="table-header-repeat line-left minwidth-1"><a href="">First Name</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Last Name</a></th>
					<th class="table-header-repeat line-left"><a href="">Email</a></th>
					<th class="table-header-repeat line-left"><a href="">UserName</a></th>
					<th class="table-header-repeat line-left"><a href="">DateOfBirth</a></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
					
				</tr>
				<?php
				if($result->num_rows != 0){
				while($row = $result->fetch_assoc()) {
						array_push($user_list,array('user_id'=>$row['user_id'],'firstname'=>$row['firstname'],'lastname'=>$row['lastname'],'email'=>$row['email'],'username'=>$row['dob'],'dob'=>$row['dob']));
       
   
					echo "<tr>";
					
					echo"<td>".$row['firstname']."</td>";
					echo"<td>".$row['lastname']."</td>";
					echo"<td>".$row['email']."</td>";
					echo"<td>".$row['username']."</td>";
					echo"<td>".$row['dob']."</td>";
					echo"<td>";
					
					echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = 'button' name = 'remove' value = 'x' onClick = 'redirect(".$row['user_id'].")' class='button_example'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					
					echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = 'button' name = 'remove' value = '✓' onClick = 'redirect2(".$row['user_id'].")' class='button_example'>";
					//echo"<a href='' onClick = 'redirect(".$row['item_id'].")' title='Edit' class='icon-2 info-tooltip'></a>";
					
					
					echo"</td>";
					echo "</tr>";
					
					
				
				} 
				}
				else
				{
					echo"<h1> No Users Found. </h1>";
				}?>
				
				</table>
			<input type='hidden' value='' name = 'user_id' id = 'user_id'/>
			<input type='hidden' value='display_pen_users.php' name = 'url' id = 'url'/>
			</form>
			
			</div>
			<!--  end content-table  -->
		
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>

<script>
function redirect(user_id){
		alert("Here is the user _ id: "+user_id);
		if(confirm("Are you Sure?")){
			document.f1.user_id.value=user_id;
			document.f1.action = 'remove_users.php';
			f1.submit();
		}
	}
	
function redirect2(user_id){
		alert("Here is the user _ id: "+user_id);
		if(confirm("Are you Sure?")){
			document.f1.user_id.value=user_id;
			document.f1.action = 'approve_users.php';
			f1.submit();
		}
	}
		</script>	
			
<?php
include 'footer.php';
?>
