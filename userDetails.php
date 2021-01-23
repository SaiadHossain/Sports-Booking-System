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
	$data[0] = $_POST['userId'];
	$data[1] = $_POST['matricNo'];
	$data[2] = $_POST['username'];
	$data[3] = $_POST['password'];
	$data[4] = $_POST['address'];
	$data[5] = $_POST['contact'];
	$data[6] = $_POST['email'];
	$data[7] = $_POST['time'];
	$data[8] = $_POST['confirmed'];
	$data[9] = $_POST['confirmCode'];
	
	return $data;
}

//Search user

if(isset($_POST['search']))
{
	$info = getData();
	$search_query = "SELECT * FROM user WHERE matricNo = '$info[1]'";
	$search_result = mysqli_query($conn, $search_query); //store the query result 
	
	if($search_result)
	{
		
		if(mysqli_num_rows($search_result))
		{
			
			while($rows = mysqli_fetch_array($search_result)) 
				//if Id matches then it will fetch all the record from that row and will be stored in variable $rows
				
			{
				
				$userId = $rows['userId'];
				$matricNo = $rows['matricNo'];
				$username = $rows['username'];
				$password = $rows['password'];
				$address = $rows['address'];
				$contact = $rows['contact'];
				$email = $rows['email'];
				$time = $rows['time1'];
				$confirmed = $rows['confirmed'];
				$confirmCode = $rows['confirmCode'];
				
			}
		}else{
			
			echo "No data are available";
		}
	}else{
		
		echo "result error";
	}
}

//Inserting into Database

if(isset($_POST['insert'])){
	
	$info = getData(); //get indexed data from the form.
	
	$insert_query = "INSERT INTO user (matricNo, username, password, address, contact, email, time1, confirmed) VALUES ('$info[1]', '$info[2]', '$info[3]', '$info[4]', '$info[5]', '$info[6]', '$info[7]', '$info[8]')";
	
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

//Delete user from database

if(isset($_POST['delete'])){
	
	$info = getData();
	
	$delete_query = "DELETE FROM user WHERE matricNo='$info[1]'";

	try{
		
		$delete_result = mysqli_query($conn, $delete_query);
		
		if($delete_result)
		{
			
			if(mysqli_affected_rows($conn)>0)
			{
				
				echo "data deleted successfully";
			}
		
		else
		{
			
			echo "data not deleted";
		}
	}
	

}catch(Exception $ex)
	{
		echo("error in delete option".$ex->getMessage());
	}
	
	//Edit data from database
	
}
?>



      <div id="page-wrapper">
		
		<div class="row">
          <div class="col-lg-12">
            <h1>Manage User Details</h1>
            <ol class="breadcrumb">
              <li><i class="icon-dashboard"></i>Edit User</li>
              <li class="active"><i class="icon-file-alt"></i>Profile</li>
            </ol>
          </div>
        </div><!-- /.row -->
        


<form action = "userDetails.php" method = "POST">
	
	
	<label><b>UserId</b></label>
	<input type = "number" name = "userId" placeholder = "Id" value="<?php if(isset($userId)) echo $userId; ?>"<br><br>
	
	<label><b>Matric/Staff No</b></label>
	<input type = "number" name = "matricNo" placeholder = "Matric/Staff Id" value="<?php if(isset($matricNo)) echo $matricNo; ?>"> <br><br>
	
	<label><b>Username</b></label>
	<input type = "text" name = "username" placeholder = "Your Name" value="<?php if(isset($username)) echo $username; ?>"><br><br>
	
	<label><b>Password</b></label>
	<input type = "text" name = "password" placeholder = "Password" value="<?php if(isset($password)) echo $password; ?>"><br><br>
	
	<label><b>Address</b></label>
	<input type = "text" name = "address" placeholder = "Victoria Street, NewZeland" value="<?php if(isset($address)) echo $address; ?>"><br><br>
	
	<label><b>Contact</b></label>
	<input type = "number" name = "contact" placeholder = "Contact" value="<?php if(isset($contact)) echo $contact; ?>"><br><br>
	
	<label><b>E-mail</b></label>
	<input type = "text" name = "email" placeholder = "asd@gmail.com" value="<?php if(isset($email)) echo $email; ?>"><br><br>
	
	<label><b>Preferred Time</b></label>
	<input type = "text" name = "time" placeholder = "10am-12pm" value="<?php if(isset($time)) echo $time; ?>"><br><br>
	
	<label><b>Confirm</b></label>
	<input type = "number" name = "confirmed" placeholder = "Confirmed" value="<?php if(isset($confirmed)) echo $confirmed; ?>"><br><br>
	
	<label><b>ConfirmCode</b></label>
	<input type = "number" name = "confirmCode" placeholder = "ConfirmCode" value="<?php if(isset($confirmCode)) echo $confirmCode; ?>"><br><br>
	
	
	<div >
		
		<button type="submit" name="insert" class="btn-group" style="width: auto">Add </button>
		<button type="submit" name="delete" class="btn-group" style="width: auto">Delete </button>
		<button type="submit" name="search" class="btn-group" style="width: auto">Search </button>

		</div>
	
	
</form>

    </div><!-- /#page-wrapper -->
      
      
      

    </div><!-- /#wrapper -->
	
<?php include('footer.php')  ?>
