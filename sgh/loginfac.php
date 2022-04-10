<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<?php 
include 'connection.php';

if($conn)
{
	$conn1= mysqli_select_db($conn,$dbname);
	if(!$conn1)
	{
		echo "Database not found";
	}
	else{
	
		/*$username = $_GET['username'];
		$password = $_GET['pwd'];*/
		$username="ABC";
		$password="12";
		
        $q="SELECT * FROM `faculty` WHERE `username`='$username' and `password`='$password'";
		$sql =mysqli_query($conn, $q);    
		$numRows=mysqli_num_rows($sql);
		
		while($result=mysqli_fetch_assoc($sql))
		    {
		    	echo "username".$result['username']." "."password".$result['password'];
		    }	
	        /*$jsondata[] = $result;
	    	 }
	    	echo json_encode($jsondata);
	    	*/
		//	$ar1=mysqli_query($conn,'SELECT FROM `faculty`');
			
		// 	$jsondata = array();
		// while($array = mysqli_fetch_row($ar1))
	 //    {	
	 //        $jsondata[] = $array;
		// }
	 //    	echo json_encode($jsondata);
			
			
			
			
			
		
	
	
}

}

?>

</body>
</html>