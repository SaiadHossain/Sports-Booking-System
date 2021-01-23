<head>
    <p id="demo"></p> 	
     </head>
  

     
         <div class="img-rounded" style="float: right; background-color: #fffbcf; width: 280px; height: 200px; border: 1px solid black; margin: 10px;">
		 <h3 style="color: #ffffff; background-color: #2a4e57; text-align: center; margin: 0px; padding: 0px;">Announcements</h3>

		 <div id="cc-homepage-announcements" style="height: 200px; overflow-x: hidden; overflow-y: auto; padding: 6px; text-align: left;">
		
		<?php
		
		include("connect.inc.php");     

		$sql="SELECT AnnounceContent FROM announcement WHERE AnnounceID = 1";

		$result = $conn->query($sql);
		
		while($row = $result->fetch_assoc())
		{
			echo("$row[AnnounceContent]");
		}
		
		?> 
		 </div>
      
     
      
        </div>

 