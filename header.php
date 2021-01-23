<?php



if (isset($_GET['logout']))
{
	$_SESSION = array();
	if ($_COOKIE[session_name()])
	{
		setcookie(session_name(), '', time()-42000, '/');
	}
	session_destroy();
	session_start();
	$_SESSION['username'] = $username;
	header('Location: welcome.php');
}

?>




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
          <a class="navbar-brand" href="welcome.php">Unimas e-sports Booking</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
           <br><br>
            <li><a href="contact.php"><i class="fa fa-bar-chart-o"></i> Contacts</a></li>
            <li><a href="about.php"><i class="fa fa-table"></i> About Us</a></li>
            <li><a href="sports.php"><i class="fa fa-edit"></i> Sports Facility</a></li>
            </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
            
             
                                     
            
             <!-- here edit -->
             
             <?php 
				  if(!isset($_SESSION['username']))
				  {
			?>

			   <li class="dropdown user-dropdown">

              <a href="login.php"> Login </a>
             
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
                <li><a href="update.php"><i class="fa fa-gear"></i>Update your profile</a></li>
                <li class="divider"></li>
                <li><a href="index.php?logout=1"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
			  
                        
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      
