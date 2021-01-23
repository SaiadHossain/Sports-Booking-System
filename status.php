<?php

session_start();

include("connect.inc.php");
include_once("header_home.php") ;

$sql =  ("SELECT * FROM booking WHERE userId = 
			 (SELECT userId from user where username = '{$_SESSION['username']}')");

$result = mysqli_query($conn, $sql) or die(mysqli_error());

while($row = mysqli_fetch_array($result))

{
	$userId = $row['userId'];
	$bookingInfo = $row['bookingInfo'];
	$time = $row['time'];
	$Status = $row['Status'];
	$bookingNo = $row['bookingNo'];
}


?>

   
      
                  
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Booking Receipt <small>Booking Slate</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
            </ol>
          </div>
        </div><!-- /.row -->
        
   <h2> Your Status </h2>
	 
    <form action="status.php"  method="post" style="border:1px solid #ccc">
  <div class="container">
   	
   	
     <label><b>Booking Status: <?php echo "Confirmed" ?></b></label>
   
     <br><br><label><b>User Id: <?php echo $userId; ?> </b></label>
 	<br><br><label><b>Booking Number: <?php echo $bookingNo; ?> </b></label>
    <br><br><label><b>Selected Time: <?php echo $time; ?> </b></label>
	<br><br><label><b>Selected Game: <?php echo $Status; ?> </b></label>
	<br><br><label><b>Date of Booking: <?php echo $bookingInfo; ?> </b></label>
	
	
   
    </div>
   	
    	<div class="btn-group" style="float: right">
  <br><button type="submit" name = "cancel" style="width: auto" formaction = cancel1.php>Cancel Booking</button>
  </div>
  
		<div class="btn-group" style="float: left">  
   <br><button type = "submit" name = "save" style="width:auto" onclick="window.print()">Save Receipt</button>  <!--------Saving as PDF   ---------->
  </div> 
  
   	
    	
    	
     	
      </form>
 
      </div><!-- /#page-wrapper -->
      
      
      

    </div><!-- /#wrapper -->


