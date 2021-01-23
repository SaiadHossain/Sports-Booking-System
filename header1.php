

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

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
           
         	 <br>
            <li><a href="admin.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
             
            <li><a href="FacilityInfo.php"><i class="fa fa-dashboard"></i> Facility Info</a></li>
            <li><a href="AddFacility.php"><i class="fa fa-table"></i> Manage Facility</a></li>
            <li><a href="AddMember.php"><i class="fa fa-bar-chart-o"></i> Add Member</a></li>
            <li><a href="userDetails.php"><i class="fa fa-table"></i> Manage User</a></li>
            <li><a href="BookingInfo.php"><i class="fa fa-edit"></i> View Booking</a></li>
            <li><a href="UserInfo.php"><i class="fa fa-font"></i>Current UserInfo</a></li>
           
             
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
         
            <li class="dropdown user-dropdown">
            
             <!-- here edit -->
             
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 
				  if(!isset($_SESSION['adminname']))
				  {
					  echo "You are not logged in";
				  }
				  else
				  {
					  echo $_SESSION['adminname'];
				  }
				  ?> 
             <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?logout=1"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      
      
      
      
      