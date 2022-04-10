<?php
session_start();
$cash=2000;
$income=0;
$expense=0;
$Total=0;

$uid=$_SESSION['uid'];
echo "LOGIN ID:".$uid;
include 'connect.php';

$page = $_SERVER['PHP_SELF'];
$sec = "10";


$sql1 = "SELECT uid,income_src,amt FROM `inc` WHERE `uid` = '$uid'";
$result1 = mysqli_query($conn, $sql1);
$numRows1 = mysqli_num_rows($result1);

$sql2 = "SELECT uid,expense,amt FROM `exps` WHERE `uid` = '$uid'";
$result2 = mysqli_query($conn, $sql2);
$numRows2 = mysqli_num_rows($result2);

$sql3 = "SELECT uid,asset_name,amt FROM `asset` WHERE `uid` = '$uid'";
$result3 = mysqli_query($conn, $sql3);
$numRows3 = mysqli_num_rows($result3);

$sql4 = "SELECT uid,loans,amt FROM `liability` WHERE `uid` = '$uid'";
$result4 = mysqli_query($conn, $sql4);
$numRows4 = mysqli_num_rows($result4);

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
			<span class="display-4">Passive Income: </span><h><?php
					$result1 = mysqli_query($conn, $sql1);
					$income=0;
					while($row1 = mysqli_fetch_assoc($result1))
                    { 
						$income=$income+$row1['amt'];
					}
					echo "₹$income";
					?>/<?php 5
			$result2 = mysqli_query($conn, $sql2);
			while($row2 = mysqli_fetch_assoc($result2))
                    {    $expense=$expense+$row2['amt'];} 
                echo"₹$expense" ?></h>
                
                	
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
					
					<li class="list-group-item list-group-item-action">Total Income : <?php
					$sql12 = "SELECT uid,income_src,amt FROM `inc` WHERE `uid` = '$uid'";
                    $result12 = mysqli_query($conn, $sql12);
                    $income=0;
					while($row12 = mysqli_fetch_assoc($result12))
                    { $income=$income+$row12['amt'];} echo "₹ $income";?></li>
					<li class="list-group-item list-group-item-action">Total Expense : <?php
					while($row2 = mysqli_fetch_assoc($result2))
                    {    $expense=$expense+$row2['amt'];} 
                    echo "₹ $expense";?></li>
					<li class="list-group-item list-group-item-action payday">Payday : <?php  $Total=$income-$expense ;
					  echo "₹ $Total";?></li>
				</ul>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md">
				<h3 class="display-4 my-income">Income</h3>
				<table class="table-bordered table-hover" style="width: 100%;">
					<tr class="table-active">
						<th>Income Source</th>
						<th>Cashflow</th>
					</tr>
					<?php
						$result1 = mysqli_query($conn, $sql1);
					while($row1 = mysqli_fetch_assoc($result1))
                    { 
						echo "
							<tr>
								<td>".$row1['income_src']."</td>
								<td>₹".$row1['amt']."</td>
							</tr>
						";
					
						}
					?>
					
				</table>
			</div>
			<div class="col-md-1">
				
			</div>
			<div class="col-md">
				<h3 class="display-4 my-income">Expenses</h3>
				<table class="table-bordered table-hover" style="width: 100%;">
					<tr class="table-active">
						<th>Expenses</th>
						<th>Cost</th>
					</tr>
					<?php
					$result2 = mysqli_query($conn, $sql2);

					while($row2 = mysqli_fetch_assoc($result2))
                    {   echo "
							<tr>
								<td>".$row2['expense']."</td>
								<td>₹".$row2['amt']."</td>
							</tr>
						";
					
						}
					?>
				</table>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-md">
				<h3 class="display-4 my-income">Assets</h3>
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
								<td>".$row3['asset_name']."</td>
								<td>₹".$row3['amt']."</td>
							</tr>
						";
					
						}
					?>
				</table>
			</div>
			<div class="col-md-1">
				
			</div>
			<div class="col-md">
				<h3 class="display-4 my-income">Liability</h3>
				<table class="table-bordered table-hover" style="width: 100%;">
					<tr class="table-active">
						<th>Liability</th>
						<th>Amount</th>
					</tr>
					<?php

					while($row4 = mysqli_fetch_assoc($result4))
                    {
						echo "
							<tr>
								<td>".$row4['loans']."</td>
								<td>₹".$row4['amt']."</td>
							</tr>
						";
					
						}
					?>
				</table>
			</div>
		</div>
		
	</div>
</body>
</html>