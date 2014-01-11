<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<!-- Links -->
	<link rel="stylesheet" type="text/css" href="Mobile/Gumby/css/gumby.css">
	<script src="Mobile/Gumby/js/libs/modernizr-2.6.2.min.js"></script>
	</head>
	<body ng-app="app" >

		<center>
			<img src="Mobile/MEDIA/IMG/loading.gif" class="splash" ng-loading>
		</center>

		<!-- Main Middle Content -->
		<div class="main" ng-controller="mainCtrl">
			<div ng-controller="containerCtrl">
			<div class="container fade-hide delete" ng-ready>
					
					<div id="grid-upper" class="upper-layer">
						&nbsp;
					</div>
					<div class="content-holder">
						<div ng-include src="templateContent.url">
						</div>
					</div>
					<div id="grid-lower" class="lower-layer">
						&nbsp;
					</div>
			</div>
			<div id="container" class="container display-none" >
					<div class="upper-layer">
						<img src='Mobile/MEDIA/IMG/blank.png' class='taylor'>
						<img src='Mobile/MEDIA/IMG/blank.png' class='scroll_text'>
						<img src='Mobile/MEDIA/IMG/point_down.png' class='center'>
						<img src='Mobile/MEDIA/IMG/blank.png' class='city_float_bottom'>
					</div>
					<div class="content-holder">
						<div ng-include src="templateContent.url">
						</div>
					</div>
					<div class="lower-layer">
						<img src='Mobile/MEDIA/IMG/blank.png' class='city_float_upper'>
					</div>
			</div>
			</div>
		</div>
		<!-- End of Main Middle Content -->

		<!-- Scripts -->
		<script src="Mobile/bower_components/jquery/jquery.min.js"></script>
		<script src="Mobile/bower_components/angular/angular.min.js"></script>
		<script src="Mobile/Gumby/js/libs/gumby.min.js"></script>
		<script src="Mobile/bower_components/gumby-parallax/gumby.parallax.js"></script>
		
		<!-- LIB -->
		<script src="Mobile/JS/LIB/Transition/scripts/jquery-ui-1.8.22.custom.min.js"></script>
		<script src="Mobile/JS/LIB/Transition/scripts/jquery.hover-transitions-1.0.min.js"></script>
		<script src="Mobile/JS/LIB/MouseWheel/jquery.mousewheel.js"></script>

		<!-- Import jQuery -->
		<script src="Mobile/JS/JQUERY/jquery.taylor.checkers.js"></script>
		<script src="Mobile/JS/JQUERY/jquery.taylor.transition-website.js"></script>

		<!-- Import Angular -->
		<script src="Mobile/JS/ANGULARJS/app.js"></script>
		<script src="Mobile/JS/ANGULARJS/CONTROLLERS/container.js"></script>
	</body>
</html>