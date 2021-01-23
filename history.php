<?php

session_start();	
if(!isset($_SESSION['username'])) //For security purposes
	{	
	  die("Please login");	
	}

$_SESSION['userId'];


include("connect.inc.php");
include("header_home.php");


$result = mysqli_query($conn, "SELECT * FROM booking WHERE userId = '{$_SESSION['userId']}'") 
	or die(mysqli_error($result));

if(mysqli_num_rows($result) == 1) {

   while($rows = mysqli_fetch_array($result)) 

	   {
				
				
				$bookingInfo = $rows['bookingInfo'];
				$time = $rows['time'];
				$status = $rows['Status'];
				
				
			}
	   
   } 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Booking Information</title>
</head>

<body>

<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            
            <ol class="breadcrumb">
              <li><a href="#"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
            </ol>
          </div>
        </div><!-- /.row -->
      



<h2>Personal Booking Information</h2>




<form action = "history.php" method = "POST">
	
	 
	 
	
	<div class="table-responsive">
				  <table class="table table-bordered table-hover table-striped tablesorter">
				<thread>
	
		
		<tr>
			<th>Date Of Booking</th>
			<th>Booking Time</th>   
			<th>Booked Facility</th>
			
		
		</tr>
		</thread>
	<?php
		
			while($user = mysqli_fetch_assoc($result))
			{
				
				echo "<tr>";
				//Assign the value into the variable by fetching from database
				 //Displaying the data in table cell
				echo "<td>".$user['bookingInfo']."</td>"; 
				echo "<td>".$user['time']."</td>";
 				echo "<td>".$user['Status']."</td>"; 	
							
				echo "</tr>" ;
			
			}
		 
		?>
		
	</table>
	
	
	

</form>





<?php

	include("footer.php");
?>