<?php
session_start();
$cash=2000;
$income=0;
$expense=$_SESSION['exp'];
$Total=0;

$uid=$_SESSION['uid'];

echo "LOGIN ID:".$uid;
include 'connect.php';

$page = $_SERVER['PHP_SELF'];
$sec = "10";


$sql1="SELECT CF FROM `fasttrack` WHERE `uid` = '$uid'";


$sql3 = "SELECT asset,CF FROM `fasttrack` WHERE `uid` = '$uid'";
$result3 = mysqli_query($conn, $sql3);
$numRows3 = mysqli_num_rows($result3);



$sql5="SELECT cash FROM `login` WHERE `uid` = '$uid'";
$result5 = mysqli_query($conn,$sql5);



if(!isset($_SESSION['uid'])) {
	header("Location:./");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	<link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
</head>
<style type="text/css">
	.payday{
		background: #f1f1f1;
	}
	.my-income{
		font-size: 40px;
	}
</style>
<body>
	<div class="row">
		<div class="col-sm-3">
			
		</div>
		
		<div class="col-sm-6 text-center">
			<span class="display-4">FASTTRACK </span><h>
				<?php
					$result1 = mysqli_query($conn, $sql1);
					$inc1=0;
					while($row1 = mysqli_fetch_assoc($result1))
                    { $inc1=$inc1+$row1['CF'];
					$income=$income+$row1['CF'];
					}
					echo "₹$income";
					?>/<?php $expense=$expense+50000;
					echo "₹$expense";

					if($income>=$expense)
						{
							header("Location: logout.php");
						}
						?>


		</div>

		<div class="col-sm-3">
			
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				<ul class="list-group">
					<li class="list-group-item active"><h5>Cash : <?php 
					while($row5 = mysqli_fetch_assoc($result5))
                  {

                    echo  "₹".$row5['cash'];
                }
                      ?></h5></li>
					
					

					<li class="list-group-item list-group-item-action payday">CF day income : <?php 

  					
					 $Total=$_SESSION['exp']+$inc1;
					  echo "₹ $Total";?></li>
				</ul>
			</div>
		</div>
		
		<div class="row mt-4">
			<div class="col-md">
				<h3 class="display-4 my-income">CASHFLOW DAY INCOME RECORD</h3>
				<table class="table-bordered table-hover" style="width: 100%;">
					<tr class="table-active">
						<th>Assets</th>
						<th>Cost</th>
					</tr>
					<?php

					while($row3 = mysqli_fetch_assoc($result3))
                    {
						echo "
							<tr>
								<td>".$row3['asset']."</td>
								<td>₹".$row3['CF']."</td>
							</tr>
						";
					
						}
					?>
				</table>
			
		</div>
		
	</div>
</body>
</html>