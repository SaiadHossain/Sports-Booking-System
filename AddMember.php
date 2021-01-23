<?php

session_start();


	
		if(!isset($_SESSION['adminname'])){
			
			
			die("Please login");
			
		}

	

?> 


<?php
include("header1.php");
include("connect.inc.php");
	
// get data from the form

function getData(){
	
	$data = array();
	$data[0] = $_POST['adminName'];
	$data[1] = $_POST['password'];
	$data[2] = $_POST['Address'];
	$data[3] = $_POST['contact'];
	$data[4] = $_POST['email'];
	
	return $data;
}


//Inserting into Database

if(isset($_POST['insert'])){
	
	$info = getData(); //get indexed data from the form.
	
	$insert_query = "INSERT INTO admin (adminName, password, Address, contact, email) VALUES ('$info[0]', '$info[1]', '$info[2]', '$info[3]', '$info[4]')";
	
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
            <h1>Add New Admin</h1>
            <ol class="breadcrumb">
              <li><i class="icon-dashboard"></i>Admin User</li>
              <li class="active"><i class="icon-file-alt"></i>Profile</li>
            </ol>
          </div>
        </div><!-- /.row -->
        


<form action = "AddMember.php" method = "POST" style="border:1px solid #ccc">

<div class="container">
    
    <label><b>AdminName</b></label>
    <input type="text" placeholder="Username" name="adminName" required>

    
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" required>

    <label><b>Address</b></label>
    <input type="text" placeholder="Victoria Street,California" name="Address" required>

	<label><b>Contact</b></label>
    <input type="number" placeholder="Contact No." name="contact" required>

  	<label><b>E-mail</b></label>
    <input type="text" placeholder="Email" name="email" required>

<div >
	 	
	<button type="submit" name="insert" class="btn btn-primary" style="width: auto">Add Member</button>
	
	</div>

</form>
  </div>
	
	<?php include('footer.php')  ?>
	