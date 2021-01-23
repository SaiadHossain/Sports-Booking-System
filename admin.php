

<style>
body{
  font: 15px/1.5 Arial, Helvetica,sans-serif;
  padding:0;
  margin:0;
  background-color:#f4f4f4;
}

/* Global */
.container{
  width:80%;
  margin:auto;
  overflow:hidden;
}

ul{
  margin:0;
  padding:0;
}

.button_1{
  height:38px;
  background:#e8491d;
  border:0;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
}

.dark{
  padding:15px;
  background: #800507;
  color:#ffffff;
  margin-top:20px;
  margin-bottom:10px;
 
}
	
	.dark2{
  padding:15px;
  background: #6E7477;
  color:#55F709;
  margin-top:20px;
  margin-bottom:10px;
 
}

	.dark3{
  padding:15px;
  background: #01D5C5;
  color:#0B0607;
  margin-top:20px;
  margin-bottom:10px;
 
}




/* Header **/
header{
  background:#35424a;
  color:#ffffff;
  padding-top:30px;
  min-height:70px;
  border-bottom:#e8491d 3px solid;
}

header a{
  color:#ffffff;
  text-decoration:none;
  text-transform: uppercase;
  font-size:16px;
}

header li{
  float:left;
  display:inline;
  padding: 0 20px 0 20px;
}

header #branding{
  float:left;
}

header #branding h1{
  margin:0;
}

header nav{
  float:right;
  margin-top:10px;
}

header .highlight, header .current a{
  color:#e8491d;
  font-weight:bold;
}

header a:hover{
  color:#cccccc;
  font-weight:bold;
}

/* Showcase */
#showcase{
  min-height:400px;
  background:url('../image/showcase.jpg') no-repeat 0 -400px;
  text-align:center;
  color:#ffffff;
}

#showcase h1{
  margin-top:100px;
  font-size:55px;
  margin-bottom:10px;
}

#showcase p{
  font-size:20px;
}

/* Newsletter */
#newsletter{
  padding:15px;
  color:#ffffff;
  background:#35424a
}

#newsletter h1{
  float:left;
}

#newsletter form {
  float:right;
  margin-top:15px;
}

#newsletter input[type="email"]{
  padding:4px;
  height:25px;
  width:250px;
}

/* Boxes */
#boxes{
  margin-top:20px;
}

#boxes .box{
  float:left;
  text-align: center;
  width:30%;
  padding:10px;
}

#boxes .box img{
  width:90px;
}

/* Sidebar */
aside#sidebar{
  float:right;
  width:30%;
	padding: 20px;
  margin-top:100px;
	margin-bottom: 100px;
	border-radius: 10px;
}

aside#sidebar .quote input, aside#sidebar .quote textarea{
  width:90%;
  padding:20px;
	
}

/* Main-col */
article#main-col{
  float:left;
  width:65%;
}

/* Services */
ul#services li{
  list-style: none;
  padding:20px;
  border: #cccccc solid 1px;
  margin-bottom:5px;
  background:#e6e6e6;
}

footer{
  padding:20px;
  margin-top:20px;
  color:#ffffff;
  background-color:#e8491d;
  text-align: center;
}

/* Media Queries */
@media(max-width: 768px){
  header #branding,
  header nav,
  header nav li,
  #newsletter h1,
  #newsletter form,
  #boxes .box,
  article#main-col,
  aside#sidebar{
    float:none;
    text-align:center;
    width:100%;
  }

  header{
    padding-bottom:20px;
  }

  #showcase h1{
    margin-top:40px;
  }

  #newsletter button, .quote button{
    display:block;
    width:100%;
  }

  #newsletter form input[type="email"], .quote input, .quote textarea{
    width:100%;
    margin-bottom:5px;
  }
}

.flex {
  display: flex;
  justify-content: center;
  
}

.flex>div {
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}
	.sans{
		
		color: orangered;
		font-family:  Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana," sans-serif";
	}
	
	
</style>


<?php
session_start();

include("connect.inc.php");     
 

if(!isset($_SESSION['adminname'])){
			
			
	die ("You are not authorized to access this page");
			
		}

include_once("header1.php");

?>

   <head> 	
	   
   		
<script src="js/announce.js"></script>
		
</head>     

	
 		<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1 class="sans">Welcome to Admin Dashboard</h1>
            <ol class="breadcrumb">
              <li><a href="admin.php"><i class="icon-dashboard"></i> Dashboard</a></li>
              <li class="active"><i class="icon-file-alt"></i> Admin</li>
            </ol>
          </div>
          
      <!------Creating Announcement ----------->
    
      
          <div class="img-rounded" style="float: left; background-color: #fffbcf; width: 280px; height: 200px; border: 1px solid black; margin: 10px;">
<h3 style="color: #ffffff; background-color: #2a4e57; text-align: center; margin: 0px; padding: 0px;">Announcements</h3>
<div id = "edit" contenteditable = "true">Update your announcement here </div>
	<div id="cc-homepage-announcements" style="height: 200px; overflow-x: hidden; overflow-y: auto; padding: 6px; text-align: left;"></div>
      <input type = "button" value = "save my edits" onclick = "saveEdits()"/>
      
<div id = "update"> - Edit the text and click save for next time </div>
      
        </div>
		  </div><!-- /.row -->

      	 	
      <div class="flex">		
      
     
           <aside id="sidebar">
           
          <div class="dark">
            <i class="fa fa-user"></i><h3>Number of Current Users</h3>
         
    
           
<h3> <?php 

$result = mysqli_query($conn, "SELECT * FROM user");

$num_rows = mysqli_num_rows($result);

echo "$num_rows \n" ; 


?>
	      
 </div>
	  </aside>

	
	
	
      
   <aside id="sidebar">
          <div class="dark2">
          
            <i class="fa fa-edit"></i><h3>Number of Booking History</h3>
      		   
    
           
<h3> <?php 

$result2 = mysqli_query($conn, "SELECT * FROM booking");

$num_rows = mysqli_num_rows($result2);

echo "$num_rows \n" ; 


?>
	   
 </div>
  
	  </aside>
	
      		
       
   	     <aside id="sidebar">
          <div class="dark3">
            <i class="fa fa-dashboard"></i><h3>Number of Sports Facility</h3>
         
    
           
<h3> <?php 

$result2 = mysqli_query($conn, "SELECT * FROM sportsfacility");

$num_rows = mysqli_num_rows($result2);

echo "$num_rows \n" ; 


?>
	      
 </div>
	  </aside>
	         
   </div>
    	  
    	  	  	  
		  
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    
    
     <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li class="active"><i class="icon-file-alt"></i> Unimas .. all rights reseve 2017</li>
            </ol>
          </div>
        </div><!-- /.row -->

  </body>
</html>



  
    