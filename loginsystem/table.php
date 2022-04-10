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
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<style>
	.mGrid{
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-template-rows: 1fr 1fr;
		grid-gap: 25px;
	}
		
	</style>
	<div class="limiter">

<div class="bckg">
		<h1>PASSIVE INCOME:</h1>
	 	<div class="bckp">
  <div class="progress-bar bg-danger" role="progressbar" style="width: 2%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="50" >20%</div>
</div>

<p1>CASH : <?php echo "$$cash" ?></p1>
<p2> <li>TOTAL INCOME:<?php echo "$$income" ?></li>
<li>TOTAL EXPENSES: <?php echo "$-$expense" ?></li>
<li>---------------------------</li>
<li>PAYDAY: <?php echo "$$Total" ?></li>     </p2>
	</div>
		<div class="container-table100 mGrid">

			<div class="wrap-table100">
				<div class="table100">
					<table style="50%">
						<h1>INCOME</h1>
						<thead>
							<tr class="table100-head">
								<th class="column1">INCOME SOURCES</th>
								<th class="column2">CASHFLOW</th>
								
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1">Pilot</td>
									<td class="column2">5000$</td>
									
								</tr>
								<tr>
									<td class="column1">HOUSE RENT</td>
									<td class="column2">200$</td>
									
								</tr>
						</tbody>
					</table>

				
					
				</div>
			</div>
			<div class="wrap-table100">
				<div class="table100">
					<table style="50%">
							<h1>EXPENSES</h1>

						<thead>
							<tr class="table100-head">
								<th class="column1">EXPENSES</th>
								<th class="column2">COST</th>
															</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1">CAR loan</td>
									<td class="column2">140$</td>
									
								</tr>
								<tr>
									<td class="column1">Credit Card Payment</td>
									<td class="column2">120$</td>
									
								</tr>
								
								
						</tbody>
					</table>

				
					
				</div>
			</div>
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<h1>ASSETS</h1>
						<thead>
							<tr class="table100-head">
								<th class="column1">ASSETS</th>
								<th class="column2">COST</th>
								
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1">3 2BHK apts</td>
									<td class="column2">10000$</td>
									
								</tr>
								<tr>
									<td class="column1">ABC stock</td>
									<td class="column2">400$</td>
									
								</tr>

								
								
						</tbody>
					</table>

				
					
				</div>
			</div>
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<h1>LIABILITY</h1>
						<thead>
							<tr class="table100-head">
								<th class="column1">LIABILITY</th>
								<th class="column2">AMOUNT</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td class="column1">HOME LOAN</td>
									<td class="column2">75000$</td>

								</tr>
								<tr>
									<td class="column1">CAR loan</td>
									<td class="column2">7000$</td>
									
								</tr>

								
								
						</tbody>
					</table>

				
					
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
