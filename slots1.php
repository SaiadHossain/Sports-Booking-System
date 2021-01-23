<?php
session_start();

if(!isset($_SESSION['username'])){			
	die("Please login");
}

include ("connect.inc.php");


$msg = " ";


if(isset($_POST['submit']))
{ 
	
	
	// check the time and date if not exist then insert  otherwise return error message.
	
	$date = $_POST['date'] ;
	$time = $_POST['time'];
	$facilityId = $_POST['games'] ;
	 $uid = $_SESSION['userId'];
	 
	 
 	
	 $query = "SELECT * FROM booking WHERE bookingInfo = '$date' and time = '$time' and facilityId = $facilityId ";
	
 	
	mysqli_query($conn, $query) ;
 
		// echo "Affected rows: " . mysqli_affected_rows($conn);

	
		 
		
	if(mysqli_affected_rows($conn) > 0)
	{
		 
		// the result is positve , so the slot is booked
		$msg = "Sorry but someone has booked this slot. Try another date or time" ;
	}
	
	else{
		
		
		  // here confirm booking
		$sql = "INSERT INTO booking (userId, facilityId, bookingInfo, time, Status) VALUES ($uid,$facilityId, '$date', '$time' , (SELECT sportsName FROM sportsfacility WHERE facilityId = '$facilityId'))" ;
		
		// check the query : 
		if(mysqli_query($conn, $sql))
		{
				header('Location:status.php');
		} else 
		{
			 
			echo mysqli_error($conn);
		}

	}
include("header_home.php");	
}
 

mysqli_close($conn);
?>
      

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Blank Page <small>A Blank Slate</small></h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
            </ol>
          </div>
        </div><!-- /.row -->
        
   <h2> Welcome to Booking Section </h2>
	 
    <form action="slots1.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
   
     
    
	  
	  
	 <?php   echo $msg ; ?>
      </div><!-- /#page-wrapper -->
      
      
      

    </div><!-- /#wrapper -->

   
  <?php

include_once("footer.php") ;

?>
      