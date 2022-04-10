<?php
	include 'connect.php';
	session_start();
	
	if(isset($_SESSION['uid'])) {
		header("Location: dashboard.php");
	}

	if (isset($_POST['submit'])) {
		

		$uname = $_POST['uname'];
		$psw = $_POST['psw'];

		$sql = "SELECT * FROM `login` WHERE `uname` = '$uname'";
		$result = mysqli_query($conn, $sql);
		$numRows = mysqli_num_rows($result);
	     $row = mysqli_fetch_assoc($result);
		if ($numRows < 1) {
			
			header("Location: index.php?username-incorrect");
		
		} 
		else {
			if ($psw == $row['pass']) {
                $_SESSION['uid'] = $row['uid'];

				header("Location: parth1.php?succesful");
			} else {
				header("Location: index.php?password-incorrect");
			}
		       }
		   }
	else {
	 	header("Location: index.php?dont-hack");
	 }
	
?>	
