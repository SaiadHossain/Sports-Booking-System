	     
<?php
include("connect.inc.php");

$msg = "";

if(isset($_POST['submit'])){  //when submit button is hit
	
		
	$username = $_POST['username'];  //check the field for input
	$password = $_POST['password'];
	
	check ($conn, $username, $password);
	
}

function check($conn, $username, $password){
	
	$check = "SELECT * FROM user where username = '$username' AND password = '$password' AND confirmed = 1 ";
		
	$check_q = mysqli_query($conn, $check); //connect into database and store the  query result
 	
	
	$rows = mysqli_num_rows($check_q);	  
	
	$user = mysqli_fetch_object($check_q) ;

	
	if($rows ==1){   //check in the database whether user exists or not
	
		
		session_start();
		$_SESSION['userId'] = $user->userId ;
		echo $username;
		$_SESSION['username'] = $username;   //Assign the session for the particular user
		$_SESSION['userobj'] = mysql_fetch_assoc($check_q);
		
		
echo $username;
		header("Location:Booking.php");
	
		
	
		}
		
	else{
		
		 $msg = "Login Denied";
	}


}
include_once("header_main.php");
?>
      

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>E-Sports <small>Login Slate</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Home</a></li>
              <li class="active"><i class="icon-file-alt"></i> login Page</li>
            	
            </ol>
          </div>
        </div><!-- /.row -->
    
     
   <h2><?php echo $msg; ?></h2>
   
   <h2> Login Page </h2>
	<h3>Welcome</h3>	   
    	
   	    
   	    
    	    
      <form action="login.php" method="POST">
 	
 	<div class="imgcontainer">
 	<img src="/unimas/image/img_avatar2.png" alt="Avatar" class="avatar"> 
  
   <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name= "submit">Login</button>
    <input type="checkbox"> Remember me
  </div>

 
    
    
  </div>
</form>

       
         </div><!-- /#page-wrapper -->
      
      
      

    </div><!-- /#wrapper -->

   
<?php

include_once("footer.php") ;

?>
      