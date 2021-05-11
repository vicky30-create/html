<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="CSS_Files/style.css">
	<link rel="stylesheet" type="text/css" href="CSS_Files/main.css">
	<script type="text/javascript" src="jquery.js"></script>
	<title>CGPA calculator</title>
</head>
<body>
	<header>
		<nav>
			<div class="container" id="container">
				<h1 class="text text-center">Cumulative grade Point Average<br>(CGPA) Calculator</h1>
			</div>
		</nav>
	</header>
	<main>
		<div class="container form-group" id="container">
			<center>
				<p><b>Note:</b><br> <i>In order to insert your grade you will need to use:</i></p>
				<table  class="col" auto id="tablemain">
					<tr>
						<td>5</td>
						<td>as</td>
						<td>A</td>
					</tr>
					<tr>
						<td>4</td>
						<td>as</td>
						<td>B</td>
					</tr>
					<tr>
						<td>3</td>
						<td>as</td>
						<td>C</td>
					</tr>
					<tr>
						<td>2</td>
						<td>as</td>
						<td>D</td>
					</tr>
					<tr>
						<td>1</td>
						<td>as</td>
						<td>E</td>
					</tr>
					<tr>
						<td>0</td>
						<td>as</td>
						<td>F</td>
					</tr>
				</table>
			</center>
		</div>

		<div class="container" id="container">
			<div>
				<center>
				<table class="gridtable" id="tablemain">
					<form auto method="post" action="process.php">
						<div class=" bg-info">
							<thead>
							<th class="text text-center" style="font-size: 20px">STUDENT'S DETAILS</th>
						</thead>
						</div>
						<tbody>
							<div class="row">
								<div>
									<tr class="breakrow form-group">
										<td>
											<label style="font-size: 15px; color:;">CLICK TO INSERT YOUR DETAILS</label>
										</td>
									</tr>
								</div>
								<div>
									<tr class="datarow form-group" id="item">
										<td>
											<label style="float: left" >Student Name:</label>
											<input class="form-control" type="text" name="s_name" placeholder="Enter your Full name">
										</td>
									</tr>
								</div>
								<div>
									<tr class="datarow form-group" id="item">
										<td>
											<label>Student Faculty:</label>
											<input class="form-control" type="text" name="s_faculty" placeholder="Enter your Faculty name">
										</td>
									</tr>
								</div>
								<div>
									<tr class="datarow form-group" id="item">
										<td>
											<label>Student Department:</label>
											<input class="form-control" type="text" name="s_department" placeholder="Enter your Department name">
										</td>
									</tr>
								</div>
								<div>
									<tr class="datarow form-group" id="item">
										<td>
											<label>Student Level:</label>
											<input class="form-control" type="text" name="s_level" placeholder="Enter your Level">
										</td>
									</tr>
								</div>
								<div>
									<tr class="datarow form-group" id="item">
										<td>
											<label>Student Admission Number:</label>
											<input class="form-control" type="text" name="s_adm_no" placeholder="Enter your Admission Numner">
										</td>
									</tr>
								</div>
							</div>
							
						</tbody>
					<!--form-->
				</table>
				</center>
			</div>
		</div>
		<?php include("includes/main_table.php");?>
	</main>

	<footer>
		<div>
			<address>
				encoded by: iFarouq Tech.<br>
				copyright &copy; 2019-<?php echo date("Y")?> CGPA Calculator. Alright reserved.
			</address>
		</div>
	</footer>

	<script>
		$(document).ready(function(){

			//collapse and Expand section

			$('.breakrow').click(function(){
			//$('#tableMain').on('click','tr.breakrow',function(){
				$(this).nextUntil('tr.breakrow').slideToggle(200);
				
			});
		});
	</script>
</body>
</html>