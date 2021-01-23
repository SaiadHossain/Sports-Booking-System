<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Confirmation</title>
</head>

<body>

<?php
	
include("connect.inc.php");
	
if(isset($_GET['success']) === true && empty($_GET['success']) === true) {
	?>
	<h2> Thanks, your account has been activated... </h2>
	
	<?php
}	
	
elseif(isset($_GET['username'], $_GET['confirmCode']) === true) {
	
	$username = trim(($_GET['username'])); //Getting username and code from the url
	$confirmCode = trim(($_GET['confirmCode']));

	if(activate($username, $confirmCode, $conn) === false){
		
		echo 'We have problem in activating your account';
		
		
	}
	
	else{
		
		header('Location:emailConfirm.php?success');
		exit();
	}
	
}
	
	function activate($username, $confirmCode, $conn){
		
		
		$username = mysqli_real_escape_string($conn,$username); //To prevent from any extra input by user
		$confirmCode = mysqli_real_escape_string ($conn,$confirmCode);
		
		if (mysqli_query($conn, "SELECT COUNT(userId) FROM user WHERE username = '$username' AND confirmCode = '$confirmCode' AND confirmed = 0 ")){  //query to update user to activate
			
			
			//query to set the value from 0 to 1
			mysqli_query($conn, "UPDATE user SET confirmed = '1' WHERE username = '$username'");
			
			return true;
			
		}
		
		else{
			
			return false;
		}
	}
	
?>


</body>
</html>