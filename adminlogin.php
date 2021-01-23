	     
<?php
include("connect.inc.php");



if(isset($_POST['submit'])){  //when submit button is hit
	
		
	$adminname = $_POST['adminname'];  //check the field for input
	$password = $_POST['password'];
	
	check ($conn, $adminname, $password);
	
}

function check($conn, $adminname, $password){
	
	$check = "SELECT *FROM admin where adminname = '$adminname' AND password = '$password'";
		
	$check_q = mysqli_query($conn, $check); //connect into database and query
 	
	
	$rows = mysqli_num_rows($check_q);	  
	
	
	if($rows ==1){   //check in the database whether user exists or not
	
		
		session_start();
		$adminId = $_SESSION['adminId'];
		$_SESSION['adminname'] = $adminname;   //Assign the session for the particular user
		$_SESSION['password'] = $password;
		$_SESSION['userobj'] = mysql_fetch_assoc($check_q);
		
		header("Location:admin.php");
	
		}
		
	else{
		
		echo "Login Denied";
	}

	


}
include("header_main.php");

?>
      

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Admin Login <small>Welcome</small></h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Blank Page</li>
            	
            </ol>
          </div>
        </div><!-- /.row -->
       	
   	    
   	    
    	    
      <form action="adminlogin.php" method="POST">
 	
 	<div class="imgcontainer">
 	<img src="/unimas/image/admin.jpg" alt="Avatar" class="avatar"> 
  
   <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="adminname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name= "submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

 
    
    
  </div>
</form>

       
         </div><!-- /#page-wrapper -->
      
      
      

    </div><!-- /#wrapper -->

   
<?php

include_once("footer.php") ;

?>
      