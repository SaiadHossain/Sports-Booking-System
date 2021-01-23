<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Unimas E-Sports</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  		
  		
   		
  </head>
  <body>
    <header>
      <div class="container"> 
       
        <div id="branding">
          <h1><span class="highlight">Unimas</span> E-Sports System</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Back to Main Page</a></li>
            <li class="current"><a href="about.php">About</a></li>
            <li><a href="contact.php">Contacts</a></li>
          </ul>
        </nav>
      </div>
    </header>

    
    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">About Us</h1>
          
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/7.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/swim1.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/image3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>


        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3>What We Do</h3>
            <p>The system is eligible for Unimas Member only. Unimas is aware of your health and fitness activities. We highly encourage you to join the sports complex and keep yourself healthy and live a better life. Unimas has offered many sports facilities. It is an opportunity for you to utilize it. Students and staff are welcome to the sports complex for their entertainment and physical activities. </p>
          </div>
               </aside>
 	<br> <br>
           
           
           <div class="slideshow-container">
       		
        
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.5205778118275!2d110.4344576142958!3d1.4613932989342253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba22d4a9d015f%3A0xcd36cae9c9f1517!2sUnimas+Sport+Complex!5e0!3m2!1sen!2smy!4v1514196206974" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   
				<aside id="sidebar" style="width: 28%">
          		<div class="dark">
            	<h3>Check out the location</h3>
        		<p> Drag the map and check out the Unimas Sports Center Location. The map is dynamic. You can enlarge to see the postion.  </p>
       	  	</div>
          	</aside>
      
      
				      
			</div>      
    	
      	
      	
      </div>
   
   
     </section>

        
         
	     
    
        
    
    
  </body>
   
  
    
</html>

 <footer>
      <p>Unimas, Copyright &copy; 2017</p>
    </footer>
