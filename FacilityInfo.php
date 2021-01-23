<?php

session_start();


	
		if(!isset($_SESSION['adminname'])){
			
			
			die("Please login");
			
		}

?>

	<?php

	include('connect.inc.php');
	include('header1.php');

	$sql = "SELECT * FROM sportsfacility";

	$records = mysqli_query($conn, $sql);

	?>


	  <div id="page-wrapper">

			<div class="row">
			  <div class="col-lg-12">
				<h1>Sports Facility Information</h1>
				<ol class="breadcrumb">
				  <li><i class="icon-dashboard"></i>Admin User</li>
				  <li class="active"><i class="icon-file-alt"></i>Profile</li>
				</ol>
			  </div>
			</div><!-- /.row -->



	<form action = "FacilityInfo.php" method = "POST" style="border:1px solid #ccc">


	<body>

	<div class="table-responsive">
				  <table class="table table-bordered table-hover table-striped tablesorter">
				<thread>
			<tr>
				<th>FacilityID <i class="fa fa-sort"></i></th>  
				<th>Sports Name <i class="fa fa-sort"></i></th>
				<th>No. Of Courts <i class="fa fa-sort"></i></th>   

			</tr>
			</thread>


	<?php



				while($user = mysqli_fetch_assoc($records))
				{

					echo "<tr>";
					echo "<td>".$user['facilityId']."</td>"; 
					//Assign the value into the variable by fetching from database


					echo "<td>".$user['sportsName']."</td>";  //Displaying the data in table cell
					echo "<td>".$user['no_Of_courts']."</td>"; 

					echo "</tr>" ;

				}

			?>

		</table>

		<div class="btn-group" style="float: left">  
   <br><button type = "submit" name = "save" style="width:auto" onclick="window.print()">Save Receipt</button>
  </div> 
  
		
		</body>
<br><br><br>
	 <?php include('footer.php'); ?>