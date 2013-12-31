<!DOCTYPE html>
<html>
	<head>
	<!-- Links -->
	<link rel="stylesheet" type="text/css" href="Portfolio/Gumby/css/gumby.css">
	</head>
	<body ng-app="app" >

		<center>
			<img src="Portfolio/MEDIA/IMG/loading.gif" class="splash" ng-loading>
		</center>

		<!-- Main Middle Content -->
		<div class="main" ng-controller="mainCtrl">		
		
			<div class="container fade-hide" ng-controller="containerCtrl" ng-ready>
					
					<div class="upper-layer">
						&nbsp;
					</div>
					<div class="lower-layer">
						&nbsp;
					</div>
			</div>
		</div>
		<!-- End of Main Middle Content -->

		<!-- Scripts -->
		<script src="Portfolio/bower_components/jquery/jquery.min.js"></script>
		<script src="Portfolio/bower_components/angular/angular.min.js"></script>
		
		<!-- LIB -->
		<script src="Portfolio/JS/LIB/Transition/scripts/jquery-ui-1.8.22.custom.min.js"></script>
		<script src="Portfolio/JS/LIB/Transition/scripts/jquery.hover-transitions-1.0.min.js"></script>

		<!-- Import jQuery -->
		<script src="Portfolio/JS/JQUERY/jquery.taylor.checkers-one.js"></script>

		<!-- Import Angular -->
		<script src="Portfolio/JS/ANGULARJS/app.js"></script>
		<script src="Portfolio/JS/ANGULARJS/CONTROLLERS/container.js"></script>
	</body>
</html>