<!DOCTYPE html>

<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
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
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: orangered}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
	
	
</style>




<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Fullscreen Background Image Slideshow with CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
         
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    </head>
    <body id="page">
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>Foot·ball</h3></div></li>
            <li><span>Image 02</span><div><h3>Bad·min·ton</h3></div></li>
            <li><span>Image 03</span><div><h3>Rug·by</h3></div></li>
            <li><span>Image 04</span><div><h3>Volley·ball</h3></div></li>
            <li><span>Image 05</span><div><h3>Swim·ming</h3></div></li>
            <li><span>Image 06</span><div><h3>Basket·ball</h3></div></li>
        </ul>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="#">
                    <strong>&laquo; Unimas: </strong>Copyright 2017
                </a>
                
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Unimas <span>Sports Facility Booking System</span></h1>
                <h2>Welcome !!</h2>
					
 				

				 				 
<p class="codrops-demos">
			 		   
<div class="dropdown">
  <button class="dropbtn">Login</button>
  <div class="dropdown-content">
    <a href="login.php">Student & Staff</a>
    <a href="adminlogin.php">Unimas Management</a>
    
  </div>
</div>
   &nbsp;
      &nbsp;
	<a href="test.php" class="dropbtn">Sign Up</a>
	 &nbsp;
      &nbsp;			  
 <a href="contact.php" class="dropbtn">Contacts</a>
 &nbsp;
 &nbsp;
<a href="about.php" class="dropbtn">About Us</a>
						  						  
   
           </p>
            </header>
        </div>
    </body>
</html>