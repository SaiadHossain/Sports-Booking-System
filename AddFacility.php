<?php

session_start();


	
		if(!isset($_SESSION['adminname'])){
			
			
			die("Please login");
			
		}

	

?> 


<?php
include("header1.php");
include("connect.inc.php");

function getData(){
	
	$data = array();
	$data[0] = $_POST['sportsName'];
	$data[1] = $_POST['no_Of_courts'];

	return $data;
}

if(isset($_POST['insert'])){
	
	$info = getData(); //get indexed data from the form.
	
	$insert_query = "INSERT INTO sportsfacility (sportsName, no_Of_courts) VALUES ('$info[0]', '$info[1]')";

	try{
		
		$insert_result = mysqli_query($conn, $insert_query); //store the result in the variable.
		if($insert_result)
		{
			
			if(mysqli_affected_rows($conn)>0){  //if the affected rows is greater than zero in database means new data have been inserted. 
				
				echo "data inserted successfully" ;
			}else{
				
				echo "data are not inserted";
			}
		}
	}catch(Exception $ex){
		
		echo("error inserted". $ex->getMessage());
	}
	
}
?>


  <div id="page-wrapper">
		
		<div class="row">
          <div class="col-lg-12">
            <h1>Add New Facility</h1>
            <ol class="breadcrumb">
              <li><i class="icon-dashboard"></i>Admin User</li>
              <li class="active"><i class="icon-file-alt"></i>Profile</li>
            </ol>
          </div>
        </div><!-- /.row -->
        


<form action = "AddFacility.php" method = "POST" style="border:1px solid #ccc">

<div class="container">
    
    <label><b>SportsName</b></label>
    <input type="text" placeholder="Rugby" name="sportsName" required>

    
    <label><b>Number Of Courts</b></label>
    <input type="text" placeholder="no.of.courts" name="no_Of_courts" required>

<div >
	 	
	<button type="submit" name="insert" class="btn btn-primary" style="width: auto">Add Facility</button>
	
	</div>

</form>


</div>


<?php include('footer.php'); ?>