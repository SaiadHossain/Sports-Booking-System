<?php

session_start();



if(!isset($_SESSION['username'])){
			
			
			die("Please login");
			
		}
?>

<?php
include("connect.inc.php");



if(isset($_GET['success']) === true && empty($_GET['success']) === true) {
	?>
	<h2> Thanks, your profile has been updated... </h2>
	
	<?php
}	
	



if(isset($_POST['update'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];   // Grab the form data in local variables. 
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$time = $_POST['time1'];
	
	if(profile($username, $password, $address, $contact, $email,$time, $conn) === false){
		
		echo "Could not update the profile";
	}
	
	else{
		
		header('Location:update.php?success');
		exit();
	}


}

	function profile($username, $password, $address, $contact, $email, $time, $conn){
		
			$username = mysqli_real_escape_string($conn,$username);
			$password = mysqli_real_escape_string($conn,$password);
			$address = mysqli_real_escape_string($conn,$address);
			$contact = mysqli_real_escape_string($conn,$contact);
			$email = mysqli_real_escape_string($conn,$email);
			$time = mysqli_real_escape_string($conn,$time);
		
		if(mysqli_query($conn, "SELECT COUNT(userId) FROM user WHERE username = '{$_SESSION['username']}'")){
			
			mysqli_query($conn, "UPDATE user SET username = '$username', password = '$password', address = '$address', contact = '$contact', email = '$email', time1 = '$time' WHERE username = '{$_SESSION['username']}' ");
	
			return true;
		}
		
		else{
			
			return false;
		}
	}

include_once("header_home.php");

?>







<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Page</title>
</head>

<body>

<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
            </ol>
          </div>
        </div><!-- /.row -->
      



<h2>Update your information</h2>

<form method="POST" action="update.php" style="border:1px solid #5A2829">
<div class="container">	
<label><b>UserName</b></label>
 <input type="text" placeholder="Enter UserName" name="username" required>

<label><b>Password</b></label>
 <input type="password" placeholder="Enter Password" name="password" required>

<label><b>Address</b></label>
 <input type="text" placeholder="1234 Main St" name="address" required>

<label><b>Contact</b></label>
 <input type="number" placeholder="Enter contact number" name="contact" required>

   
<br><label>E-mail</label></br>
 <input type="text" placeholder="asd@yahoo.com" name="email" required>
  	 
 	 
	<br><label><b>Preferred Timetable</b></label>
  <input list="times" name="time1">
  <datalist id="times">
    <option value="Morning">
    <option value="Afternoon">
    <option value="Evening">
  </datalist>

  	 
 <button type="submit" class="btn btn-primary" id = "update" name= "update">Update</button> 	 
	
	
</form>

</body>
</html>




<?php
		
include_once("footer.php") ;
	
?>