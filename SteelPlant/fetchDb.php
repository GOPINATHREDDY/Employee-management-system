<?php

$fetch = false;
if ($_POST){
	$fetch = true;
}

if ($fetch) {

	require_once 'connection.php';

	$startTime = date( "Y-m-d H:i:s", strtotime($_POST['startTime']) );
	$endTime = date( "Y-m-d H:i:s", strtotime($_POST['endTime']) );

	$sql = "select * from `table 2` where timestamp BETWEEN '$startTime' and '$endTime';";
	$query = mysqli_query($connection, $sql);

	$filename = "details.xls";
	header("Content-Disposition: attachment; filename=\"$filename\"");
	header("Content-Type: application/vnd.ms-excel");

	$flag = false;
	while ($row = mysqli_fetch_assoc($query)) {
		if (!$flag) {
			echo implode("\t", array_keys($row)). "\r\n";
			$flag = true;
		}

		echo implode("\t", array_values($row)). "\r\n";
	}

	// header("Location: redirect.php");
}
else {
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
	</head>
	<body>
		<div class="container">
			<div class="col-md-offset-4 col-md-4" style="padding-top:103px;">
				<form action="fetchDb.php" method="post">
					<div id="datetimepicker" class="input-append date">
						<label>Start Time: </label>
						<input data-format="yyyy/mm/dd" type="text" name="startTime"></input>
						<span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
						</span>
					</div>

					<div id="datetimepicker1" class="input-append date">
						<label>End Time: </label>
						<input data-format="yyyy/mm/dd" type="text" name="endTime"></input>
						<span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
						</span>
					</div>

					<button class="btn btn-primary"> Submit </button>
				</form>
			</div>
		</div>
	
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"> </script> 
		<script type="text/javascript" src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"> </script>
		<script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"> </script>
		<script type="text/javascript">
			$('#datetimepicker').datetimepicker({
				format: 'dd/MM/yyyy hh:mm:ss',
				language: 'en'
			});

			$('#datetimepicker1').datetimepicker({
				format: 'dd/MM/yyyy hh:mm:ss',
				language: 'en'
			});
		</script>
	</body>
<html>

<?php } ?>