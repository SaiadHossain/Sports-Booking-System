<?php

session_start();	
if(!isset($_SESSION['username'])) //For security purposes
	{	
	  die("Please login");	
	}

$_SESSION['userId'];


include("connect.inc.php");
include("header_home.php");


$result = mysqli_query($conn, "SELECT * FROM user WHERE userId = '{$_SESSION['userId']}'") 
	or die(mysqli_error($result));

if(mysqli_num_rows($result) == 1) {

   while($rows = mysqli_fetch_array($result)) 

	   {
				
				
				$matricNo = $rows['matricNo'];
				$username = $rows['username'];
				$password = $rows['password'];
				$address = $rows['address'];
				$contact = $rows['contact'];
				$email = $rows['email'];
				$time = $rows['time1'];
				
			}
	   
   } else{
		   
		   echo "No data are available";
		
	   }
   



?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Personal Information</title>
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
      



<h2>Personal Information</h2>




<form action = "profile.php" method = "POST">
	
	 <fieldset disabled="disabled">
	 
	 
	
	<label><b>Matric/Staff No</b></label>
	<input type = "number" name = "matricNo" placeholder = "Matric/Staff Id" value= "<?php if(isset($matricNo)) echo $matricNo; ?>"> <br><br>
	
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
	
	
	
	</fieldset>
</form>


<?php 

include("footer.php");
?>