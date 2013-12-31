<!DOCTYPE html>
<html>
	<head>
	<!-- Links -->
	<link rel="stylesheet" type="text/css" href="Portfolio/Gumby/css/gumby.css">
	</head>
	<body ng-app="app" >

		<!-- Main Middle Content -->
		<div class="main" ng-controller="mainCtrl">

			<img src="Portfolio/MEDIA/IMG/loading.gif" class="splash center fade" ng-loading>		
		
			<div class="container fade fade-hide" ng-controller="containerCtrl" ng-ready>
					<div>
						<img src="Portfolio/MEDIA/IMG/blank.png" class="taylor center">
						<img src="Portfolio/MEDIA/IMG/blank.png" class="scroll_text">
						<img src="Portfolio/MEDIA/IMG/blank.png" class="city_float_bottom">
					</div>
					<div>
						<img src="Portfolio/MEDIA/IMG/blank.png" class="city_float_upper">
						<img src="Portfolio/MEDIA/IMG/blank.png" class="down">
					</div>
			</div>
		</div>
		<!-- End of Main Middle Content -->

		<!-- Scripts -->
		<script src="Portfolio/bower_components/jquery/jquery.min.js"></script>
		<script src="Portfolio/bower_components/angular/angular.min.js"></script>
		
		<!-- LIB -->
		<script src="Portfolio/JS/LIB/Transition/scripts/jquery.hover-transitions-1.0.min.js"></script>

		<!-- Import Angular -->
		<script src="Portfolio/JS/ANGULARJS/app.js"></script>
		<script src="Portfolio/JS/ANGULARJS/CONTROLLERS/container.js"></script>
	</body>
</html>