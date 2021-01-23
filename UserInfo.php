<?php

session_start();


	
		if(!isset($_SESSION['adminname'])){
			
			
			die("Please login");
			
		}

?>

<?php

include('connect.inc.php');
include('header1.php');

$sql = "SELECT * FROM user";

$records = mysqli_query($conn, $sql);

?>

  <div id="page-wrapper">
		
		<div class="row">
          <div class="col-lg-12">
            <h1>Current User Information</h1>
            <ol class="breadcrumb">
              <li><i class="icon-dashboard"></i>Admin User</li>
              <li class="active"><i class="icon-file-alt"></i>Profile</li>
            </ol>
          </div>
        </div><!-- /.row -->
        


<form action = "UserInfo.php" method = "POST" style="border:1px solid #ccc">


<body>
	
	<div class="table-responsive">
	<table class="table table-bordered table-hover table-striped tablesorter">
	<thread>
	
		
		<tr>
			<th>UserID</th>
			<th>Matric No/Staff Id</th>  
			<th>UserName</th>
			<th>Password</th>   
			<th>Address</th>
			<th>Contact No</th>
			<th>Email</th>
			<th>Preferred Time</th>
		
		</tr>
		</thread>	
		<?php
		
			while($user = mysqli_fetch_assoc($records))
			{
				
				echo "<tr>";
				echo "<td>".$user['userId']."</td>"; 
				//Assign the value into the variable by fetching from database
				
				echo "<td>".$user['matricNo']."</td>"; 
				echo "<td>".$user['username']."</td>";  //Displaying the data in table cell
				echo "<td>".$user['password']."</td>"; 
				echo "<td>".$user['address']."</td>";
 				echo "<td>".$user['contact']."</td>"; 	
				echo "<td>".$user['email']."</td>"; 
				echo "<td>".$user['time1']."</td>"; 
			
				echo "</tr>" ;
			
			}
		 
		?>
		
	</table>
	
	
		<div class="btn-group" style="float: left">  
   <br><button type = "submit" name = "save" style="width:auto" onclick="window.print()">Save Receipt</button>
  </div> 
  
	
	
  </body>
  
 <?php include('footer.php'); ?>