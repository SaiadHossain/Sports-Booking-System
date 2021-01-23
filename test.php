<?php
    


include("connect.inc.php");

include_once("header_main.php");

$msg = " ";



if(isset($_POST['matricNo']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['contact']) && isset($_POST['email']) && isset($_POST['time'])){

	
		
	
	$matricNo = $_POST['matricNo']; //setting these values in database
		
	
	$username = $_POST['username'];
	
	
	$password = $_POST['password'];
 
	
	$address = $_POST['address'];
 
	
	
	$contact = $_POST['contact'];
 
	
	
	$email = $_POST['email'];
 
	
	$time = $_POST['time'];
 
	$confirmCode = rand();

			
			
	
	$sql = "INSERT INTO user (matricNo, username, password, address, contact, email, time1, confirmed, confirmCode)
VALUES ('$matricNo', '$username', '$password', '$address', $contact, '$email', '$time', 0, '$confirmCode')";
	
	if(isset($_POST['submit'])){
	
	if(mysqli_query($conn,$sql))
			
		{
		 $msg = "New records added";
		

	
		
	require '../../../wamp/www/PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "saiadhossain2993@gmail.com";
   $mail ->Password = "saiad-397440";
   $mail ->SetFrom("saiadhossain2993@gmail.com");
   $mail ->Subject = "Test Mail";
   $mail ->Body = 
	"Confirm the email
	Open the link to verify your account. 
	http://localhost/unimas/emailconfirm.php?username= $username &confirmCode=$confirmCode";
	

   $mail ->AddAddress("saiadhossain2993@gmail.com");

	
		
	if(!$mail->Send()){
		
	$msg =  "Mail not sent";
	
		
	}
	

	else {
		
		
		
		$msg = "Please verify your account !";

	}
		
		}
			else{
		
			$msg = "You are not authorized to register on this system";

	}
		

		
	}
	

}

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
     
     <h2>     <?php echo $msg; ?> </h2>
           
           
   <h2> User Registration </h2>
   
   
	 
    <form method="POST" action="test.php" style="border:1px solid #ccc">
  <div class="container">
    
    <label><b>Matric No./Staff ID</b></label>
    <input type="text" placeholder="Enter ID" name="matricNo" required>

    
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
 
  <select name="time">
  <option value="Morning">Morning</option>
  <option value="Afternoon">Afternoon</option>
  <option value="Evening">Evening</option>
  
</select>

  
   
    
  <br><br><br><button type="submit" class="btn btn-primary" name= "submit">Save & Submit</button>
</form>

      </div><!-- /#page-wrapper -->
      
      
      

    </div><!-- /#wrapper -->




<?php

include_once("footer.php") ;

?>