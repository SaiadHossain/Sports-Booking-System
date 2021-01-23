<?php

session_start();

if(!isset($_SESSION['username'])){
	
	die('You need to login to view this page');
}
?>


 <?php 
 
include_once("header.php") ;
include ("connect.inc.php");



if(isset($_POST['submit']))
{
	$time = $_POST['time'];
	
function Timetable($time, $conn)
{
	
	$time = mysqli_real_escape_string($conn, $time);
	
	if(mysqli_query($conn, "SELECT count(userId) FROM booking WHERE userId = '{$_SESSION['userId']}'"))
	{
		
		mysqli_query($conn, "INSERT INTO booking (time)  
		VALUES ('$time') 
	
			(SELECT * FROM booking WHERE userId = '{$_SESSION['userId']}' ),
		
		"
		); //Inserting the booking time in database
		
	return true;

}
	else{
		
		return false;
	}

}
	
	if(Timetable($time, $conn) == false)
	{
		echo "Could not book";
	}
	
	else{
		
		echo "Booking Confirmed";
	}
}

$sql = "SELECT time1 FROM user WHERE username = '{$_SESSION['username']}'";
//$sql = "SELECT time1 FROM user WHERE userId = '{$_SESSION['userId']}' AND time1 = morning";
		


?>
      

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Blank Page <small>A Blank Slate</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
            </ol>
          </div>
        </div><!-- /.row -->
        
   <h2> Welcome to Booking Section </h2>
	 
    <form action="slots.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
   
     
    <br><br><label><b>Suggested Timetable</b></label>
  
  <?php
	$row = "";
	$time = array();
	  
	if ($result = $conn->query($sql)) 
	{
		$row = $result->fetch_row(); 

		$result->close();
	}
	else
	{ mysqli_error(); }
	
	if($row[0] == "Morning")
	{
		array_push($time,"08:00-09:00",
				  		 "09:00-10:00",
				  		 "10:00-11:00");
	}
	else if($row[0] == "Afternoon")
	{
		array_push($time,"12:00-01:00",
						 "01:00-02:00",
						 "02:00-03:00");
	}
	else if($row[0] == "Evening")
	{
		array_push($time,"04:00-05:00",
						 "06:00-07:00",
						 "07:00-08:00");
	} 
	  
	  
   ?>
    
  <input list="timeslots" name="time">
  
  <datalist id = "timeslots">
 
  <option value=<?php echo($time[0]); ?>>
   
  <option value=<?php echo($time[1]); ?>>
  
  <option value=<?php echo($time[2]); ?>>

  </datalist>
    
   <br><br><br>	
  <button type="submit" name = "submit" class="btn btn-primary">Confrim Booking </button>
</form>

      </div><!-- /#page-wrapper -->
      
      
      

    </div><!-- /#wrapper -->

   
  <?php

include_once("footer.php") ;

?>
      