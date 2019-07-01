<?php

	if ($_POST) {
		require "connection.php";

		function gpv($x){ return $_POST[$x]; }

		$name = gpv('name');
		$father_name = gpv('father_name');
		$dept = gpv('dept');
		$dept_code = gpv('dept_code');
		$adhar_no = gpv('adhar_no');
		$pan_no = gpv('pan_no');
		$bank = gpv('bank');
		$acc_no = gpv('acc_no');
		$email = gpv('email');
		$phone = gpv('phone');
		$address = gpv('address');
		$city = gpv('city');
		$zip = gpv('zip');

		$sql = "INSERT INTO `table 2`(`empname`, `fathers_name`, `dept`, `dept_code`, `aadhaar_num`, `pan_num`, `bank_name`, `account_num`, `door_num`, `city`, `pin_code`) VALUES ('$name' ,'$father_name', '$dept', '$dept_code', '$adhar_no', '$pan_no', '$bank', '$acc_no', '$phone',  '$city', '$zip')";
	  $query = mysqli_query($connection, $sql);

		if ($query) {
			echo "Successfully saved !!";
		}
		else {
			echo "Unable to save to the database. Please try again later";
		}
	}

?>

<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Bootstrap 3 Contact form with Validation</title>

	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
	<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">

		<form class="well form-horizontal" action=" " method="post"  id="contact_form">
			<fieldset>

				<!-- Form Name -->
				<legend>Contact Us Today!</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label"> Name</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input  name="name" placeholder="First Name" class="form-control"  type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" >Father Name</label> 
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="father_name" placeholder="Father Name" class="form-control"  type="text">
						</div>
					</div>
				</div>


	<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" >Emp No</label> 
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="emp_no" placeholder="emp" class="form-control"  type="number">
						</div>
					</div>
				</div>
				<!-- Select Basic -->
				<div class="form-group"> 
					<label class="col-md-4 control-label">DEPT</label>
					<div class="col-md-4 selectContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							<select name="dept" class="form-control selectpicker" >
								<option value=" " >Please select your dept</option>
								<option>Alabama</option>
								<option>Alaska</option>
								<option >Arizona</option>
								<option >Arkansas</option>
								<option >California</option>
								<option >Colorado</option>
								<option >Connecticut</option>
								<option >Delaware</option>
								<option >District of Columbia</option>
								<option> Florida</option>
								<option >Georgia</option>
								<option >Hawaii</option>
								<option >daho</option>
								<option >Illinois</option>
								<option >Indiana</option>
								<option >Iowa</option>
								<option> Kansas</option>
								<option >Kentucky</option>
								<option >Louisiana</option>
								<option>Maine</option>
								<option >Maryland</option>
								<option> Mass</option>
								<option >Michigan</option>
								<option >Minnesota</option>
								<option>Mississippi</option>
								<option>Missouri</option>
								<option>Montana</option>
								<option>Nebraska</option>
								<option>Nevada</option>
								<option>New Hampshire</option>
								<option>New Jersey</option>
								<option>New Mexico</option>
								<option>New York</option>
								<option>North Carolina</option>
								<option>North Dakota</option>
								<option>Ohio</option>
								<option>Oklahoma</option>
								<option>Oregon</option>
								<option>Pennsylvania</option>
								<option>Rhode Island</option>
								<option>South Carolina</option>
								<option>South Dakota</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option> Uttah</option>
								<option>Vermont</option>
								<option>Virginia</option>
								<option >Washington</option>
								<option >West Virginia</option>
								<option>Wisconsin</option>
								<option >Wyoming</option>
							</select>
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">DEPT CODE</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input name="dept_code" placeholder="DEPT CODE" class="form-control"  type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">ADHAR NO</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input name="adhar_no" placeholder="ADHAR NO" class="form-control"  type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">PAN NO</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input name="pan_no" placeholder="PAN NO" class="form-control"  type="text">
						</div>
					</div>
				</div>

				<!-- Select Basic -->
				<div class="form-group"> 
					<label class="col-md-4 control-label">BANK</label>
					<div class="col-md-4 selectContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							<select name="bank" class="form-control selectpicker" >
								<option value=" " >Please select your bank</option>
								<option>Alabama</option>
								<option>Alaska</option>
								<option >Arizona</option>
								<option >Arkansas</option>
								<option >California</option>
								<option >Colorado</option>
								<option >Connecticut</option>
								<option >Delaware</option>
								<option >District of Columbia</option>
								<option> Florida</option>
								<option >Georgia</option>
								<option >Hawaii</option>
								<option >daho</option>
								<option >Illinois</option>
								<option >Indiana</option>
								<option >Iowa</option>
								<option> Kansas</option>
								<option >Kentucky</option>
								<option >Louisiana</option>
								<option>Maine</option>
								<option >Maryland</option>
								<option> Mass</option>
								<option >Michigan</option>
								<option >Minnesota</option>
								<option>Mississippi</option>
								<option>Missouri</option>
								<option>Montana</option>
								<option>Nebraska</option>
								<option>Nevada</option>
								<option>New Hampshire</option>
								<option>New Jersey</option>
								<option>New Mexico</option>
								<option>New York</option>
								<option>North Carolina</option>
								<option>North Dakota</option>
								<option>Ohio</option>
								<option>Oklahoma</option>
								<option>Oregon</option>
								<option>Pennsylvania</option>
								<option>Rhode Island</option>
								<option>South Carolina</option>
								<option>South Dakota</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option> Uttah</option>
								<option>Vermont</option>
								<option>Virginia</option>
								<option >Washington</option>
								<option >West Virginia</option>
								<option>Wisconsin</option>
								<option >Wyoming</option>
							</select>
						</div>
					</div>
				</div>


				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">ACC NO</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input name="acc_no" placeholder="ACC NO" class="form-control"  type="text">
						</div>
					</div>
				</div>

	<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">Ifsc code</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input name="ifsc" placeholder="ifsc" class="form-control"  type="text">
						</div>
					</div>
				</div>
				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">E-Mail</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
						</div>
					</div>
				</div>
					
					
				<!-- Text input-->
					<div class="form-group">
					<label class="col-md-4 control-label">bank area</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input name="area" placeholder="area" class="form-control"  type="text">
						</div>
					</div>
				</div>


				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">dob</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
							<input name="dob" placeholder="dd/mm/yyyy" class="form-control" type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">Phone #</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
							<input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">Address</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input name="address" placeholder="Address" class="form-control" type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">City</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input name="city" placeholder="city" class="form-control"  type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">Zip Code</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input name="zip" placeholder="Zip Code" class="form-control"  type="text">
						</div>
					</div>
				</div>

				<!-- Success message -->
				<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label"></label>
					<div class="col-md-4">
						<button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
					</div>
				</div>

			</fieldset>
		</form>
	</div>
</div><!-- /.container -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<script src="js/validation.js"></script>
</body>
</html>
