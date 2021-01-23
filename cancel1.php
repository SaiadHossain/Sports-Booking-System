<?php

session_start();

if(!isset($_SESSION['username'])){
			
			
			die("Please login");
			
}

$_SESSION['userId'];


include("connect.inc.php");



			
	$sql = ("DELETE  FROM booking WHERE userId =  '{$_SESSION['userId']}'");
	
	if(mysqli_query($conn, $sql))
	{
		echo "<h2><br><br> Your Booking has been cancelled. </h2>";
}

	else{
		
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		
	}
	
	
	
include("header_home.php");

?>
  
   
  
      
<form method = "POST" action ="cancel1.php" >

<div class="btn-group" style="float: right">
  <br><button type="submit" name = "home" style="width: auto" formaction = Booking.php>Back to Booking page</button>

	<button type="submit" name = "home" style="width: auto" formaction = index.php>Log out</button>
</div>
</form>


<?php 
include("footer.php");
?>