<?php

session_start();

include("connect.inc.php");     
 
if(!isset($_SESSION['adminname']))
{ die ("You are not authorized to access this page"); }

echo($_GET['text']);

$sql="UPDATE announcement SET AnnounceContent = '$_GET[text]'";

if(!(mysqli_query($conn,$sql)))
{ echo "Error: " . $sql . "<br>" . mysqli_error($conn); }
else
{
	header("Location: admin.php");
}
?>