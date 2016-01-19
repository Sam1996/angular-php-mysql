<!doctype HTML>
<html ng-app="opa">
<head>
	<title>selectCity</title>
	<link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/bootstrap/flatly.min.css">
    <link rel="stylesheet" href="assets/jquery.timepicker.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="assets/bootstrap/bootstrap/jquery/jquery-2.1.0.min.js"></script>
    <script src="assets/bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="angular/angular.min.js"></script>
    <script type="text/javascript" src="controller.js"></script>
</head>
<body>
	<div class="col-sm-12">
		<div class="row">
			<div class="alert alert-success">Enter New City</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<form class="form form-group" method="POST" action="insert.php">
					<span class="input-group">
						<span class="input-group-addon">Your City</span>
						<input type="text" class="form-control" name="city">
					</span><br>
					<span class="input-group">
						<span class="input-group-addon">Your Location</span>
						<input type="text" class="form-control" name="location">
					</span><br>
					<input type="submit" name="submit" value="Add Location" class="btn btn-primary btn-md">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">

			</div>
		</div>
	</div>
</body>