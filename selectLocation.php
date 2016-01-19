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

		<div class="alert alert-success selectCity">
			<h4>
				<span class="span2"><b>Select Area</b></span>
			</h4>
		</div>
	</div>

		<form class="form-group">
			<div class="input-group">
				<span class="input-group-addon span1"><span class="glyphicon glyphicon-map-marker"></span></span>
				<input type="text" ng-model="query" name="search" class="form-control input-md search" placeholder="Location">
				<span class="input-group-addon">@&nbsp Coimbatore</span>	
			</div>
		</form>

<div ng-controller="locationController">
		<ul class="list-group cities">
			<li class="list-group-item" ng-if="results.length==0">
				<span class="text-danger"><b>No locations matched</b></span>
			</li>
			<li class="list-group-item" ng-repeat="location in $parent.results =( cities | filter:{location:query} )| orderBy:'location'">
				<a href="#/details/{{cities.indexOf(city)}}">{{location.location}}</a>
			</li>
			
		</ul>
</div>


</div>

</body>
</html>