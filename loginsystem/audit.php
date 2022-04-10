<?php
$cash=100;
$income=4200;
$expense=2000;
$Total=$income-$expense;


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
			<span class="display-4">Passive Income</span>
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
					<li class="list-group-item active"><h5>Cash : <?php echo "$$cash";?></h5></li>
					<li class="list-group-item list-group-item-action">Total Income : <?php echo "$$income";?></li>
					<li class="list-group-item list-group-item-action">Total Expence : <?php echo "$-$expense";?></li>
					<li class="list-group-item list-group-item-action payday">Payday : <?php echo "$$Total";?></li>
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
					<tr>
						<td>Pilot</td>
						<td>5000$</td>
					</tr>
					<tr>
						<td>House Rent</td>
						<td>200$</td>
					</tr>
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
					<tr>
						<td>Car Loan</td>
						<td>140$</td>
					</tr>
					<tr>
						<td>Credit Card Payment</td>
						<td>120$</td>
					</tr>
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
					<tr>
						<td>3 2BHK apts</td>
						<td>10000$</td>
					</tr>
					<tr>
						<td>ABC stocks</td>
						<td>400$</td>
					</tr>
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
					<tr>
						<td>Home Loan</td>
						<td>75000$</td>
					</tr>
					<tr>
						<td>Car Loan</td>
						<td>7000$</td>
					</tr>
				</table>
			</div>
		</div>
		
	</div>
</body>
</html>