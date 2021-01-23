<?php

session_start();


	
		if(!isset($_SESSION['adminname'])){
			
			
			die("Please login");
			
		}


?>


<?php

include('connect.inc.php');
include('header1.php');

$sql = "SELECT booking.bookingNo, user.username, booking.bookingInfo, booking.time, booking.Status
FROM booking
INNER JOIN user
ON booking.userId=user.userId";

$records = mysqli_query($conn,$sql);


?>

<div id="page-wrapper">
		
		<div class="row">
          <div class="col-lg-12">
            <h1>Booking Information</h1>
            <ol class="breadcrumb">
              <li><i class="icon-dashboard"></i>Admin User</li>
              <li class="active"><i class="icon-file-alt"></i>Profile</li>
            </ol>
          </div>
        </div><!-- /.row -->
        


<form action = "BookingInfo.php" method = "POST" style="border:1px solid #ccc">

<body>
	

	<div class="table-responsive">
				  <table class="table table-bordered table-hover table-striped tablesorter">
				<thread>
	
		
		<tr>
			<th>Booking No.</th>
			<th>User Name</th>  
			<th>Date Of Booking</th>
			<th>Booking Time</th>   
			<th>Game</th>
			
		
		</tr>
		</thread>
	<?php
		
			while($user = mysqli_fetch_assoc($records))
			{
				
				echo "<tr>";
				echo "<td>".$user['bookingNo']."</td>"; 
				//Assign the value into the variable by fetching from database
				
				 
				echo "<td>".$user['username']."</td>";  //Displaying the data in table cell
				echo "<td>".$user['bookingInfo']."</td>"; 
				echo "<td>".$user['time']."</td>";
 				echo "<td>".$user['Status']."</td>"; 	
							
				echo "</tr>" ;
			
			}
		 
		?>
		
	</table>

		
		
		<div class="btn-group" style="float: left">  
   <br><button type = "submit" name = "save" style="width:auto" onclick="window.print()">Save Receipt</button>
  </div> 
  
		
		
	
</body>
	
	<?php include('footer.php'); ?>


