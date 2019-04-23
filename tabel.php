<?php include "conect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kalkulator Segitiga</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/S3.png');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					PERHITUNGAN LUAS SEGITIGA
				</span>
				<br>

				<form class="login100-form validate-form p-b-33 p-t-5">
					<table class="blueTable" id="tab">
					<thead>
					<tr>
					<th>NRP</th>
					<th>Alas</th>
					<th>Tinggi</th>
					<th>Luas</th>
					<th>Tanggal</th>
					</tr>
					</thead>
					<tbody>
					<?php 

					$sql = "SELECT * FROM segitiga";
					$result = $conn->query($sql);

					if (!empty($result)) {
					// output data of each row
					foreach ($result as $key => $value) {
					?>
					<tr>
					<td><?php echo $value['nrp']?></td>
					<td><?php echo $value['alas']?></td>
					<td><?php echo $value['tinggi']?></td>
					<td><?php echo $value['luas']?></td>
					<td><?php echo $value['tanggal']?></td>
					</tr>

					<?php	
					}
					} 

					?>

					</tbody>
					</table>
			
				
					
				</form>

				
			</div>
		</div>
	</div>
	
	
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

	<script>
	$(document).ready( function () {
	$('#tab').DataTable();
	} );
	</script>

</body>
</html>