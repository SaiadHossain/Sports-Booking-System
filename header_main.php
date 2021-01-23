<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 90px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
	
</style>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sports Booking System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Unimas e-sports Booking</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
           <br><br> <li><a href="contact.php"><i class="fa fa-bar-chart-o"></i> Contacts</a></li>
            <li><a href="about.php"><i class="fa fa-table"></i> About Us</a></li>
            <li><a href="index.php"><i class="fa fa-edit"></i> Back to Main Page</a></li>
            </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
            
             
                                     
            
             <!-- here edit -->
             
             <?php 
				  if(!isset($_SESSION['username']))
				  {
			?>
			   
			   <li> 
			 <div class="dropdown">
  			<button class="dropbtn">Login</button>
  			<div class="dropdown-content">
    		<a href="adminlogin.php">Admin</a>
    		<a href="login.php">Student/Staff</a>

           </div>
           </div>
            			  
		</li>
		  	 
		  	 <li>
		  	 
		  	 	<button type="button" class="dropbtn" button onClick="location.href = 'test.php';">Sign Up</button>
		  	 
				 </li>
		  	 
			  	 <?php
				  }
				  else
				  {
				 ?>
					  
					
          
            <li class="dropdown user-dropdown">
            
             <!-- here edit -->
             
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
			<?php
					  echo $_SESSION['username'];
				  }
				  ?> 
             <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="update.php"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="index.php?logout=1"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
			  
                        
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      
	