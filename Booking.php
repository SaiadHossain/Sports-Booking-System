<?php
session_start();	
if(!isset($_SESSION['username']))
	{	
	  die("Please login");	
	}


include("connect.inc.php");
include_once("header_home.php");
include("Announce.php");



$sql = "SELECT time1 FROM user WHERE username = '{$_SESSION['username']}'" ;




?>
      
      	

      <div id="page-wrapper">
		
      
       
        <div class="row">
          <div class="col-lg-12">
            <h1>Booking</h1>
            <ol class="breadcrumb">
              <li><i class="icon-dashboard"></i>Choose your favorite games</li>
              <li class="active"><i class="icon-file-alt"></i>Timeslot</li>
            </ol>
            
            
          </div>
        </div><!-- /.row -->
        
        
   
      
   
	 
    <form action="slots1.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    
    
    
   	<label><b>Date</b></label>
	<input type="date" name= "date" value='<?php echo date('Y-m-d');?>' required>
   	  
    <br><label><b>Select Games</b></label>
      
    <br>
    <input type="radio" name="games" value="1" checked> Badminton<br>
  	<input type="radio" name="games" value="2">Tenis<br>
  	<input type="radio" name="games" value="3">Volley Ball<br>
	<input type="radio" name="games" value="4">Rugby<br>
  	<input type="radio" name="games" value="5">Basket Ball<br>
  	<input type="radio" name="games" value="6">Football<br>
  	<input type="radio" name="games" value="7">Cricket<br>
  	<input type="radio" name="games" value="8">Swimming<br>
 
   
    
   
   <br>
   
   
   
   
   <!--  ==================================================================  -->
  
    
    <br><br><label><b>Suggested Timetable</b></label>
  
  <?php
	$row = "";
	$time = array();
	  
	if ($result = $conn->query($sql))  //fetching the time from user table
	{
		$row = $result->fetch_row(); 

		$result->close();
	}
	else
	{ mysqli_error(); }
	
 	  
	  
	  
	  
	  // ================================================================
	  
	  
	  
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
    
   
 <select name="time">
   
      
     <!--   here we iterate the array ($time) element by element to show all the available timies in the array to the user  -->
       <?php
        foreach($time as $item){
        ?>
        <option value="<?php echo $item; ?>"> <?php echo $item; ?></option>
        <?php
        }
        ?> 
	 
  </select>
  
  <!--  ==================================================================  -->
   
   
   
   
   
   
  <button type="submit" name="submit" class="btn btn-primary"> Confirm Booking ! </button>

   
    
     
      </form>

      </div><!-- /#page-wrapper -->
      
      
      

    </div><!-- /#wrapper -->
   
  <?php
	include_once("footer.php");

?>

