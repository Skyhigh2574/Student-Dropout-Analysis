<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.css">
	 
</head>
<body>
<p class="text">CONGRATULATIONS!!!</p>
<br></br>
<br></br>

<?php
session_start();



unset($_SESSION['uid']);
/*if(isset($_SESSION['uid']))
{}
else{
header("Location: index.php");}*/
session_destroy();

?>
</body>
</html>
