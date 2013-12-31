var app = angular.module('app',[]).config(function($interpolateProvider){
	$interpolateProvider.startSymbol('{|');
	$interpolateProvider.endSymbol('|}');
}).directive('ngReady', function(){
	return{
		restrict: 'A',
		link: function(scope,element,attr) {
			element.addClass('fade-hide');
			angular.element(document).ready(function(){
				window.setTimeout(function(){
					element.removeClass('fade-hide');
					element.addClass('fade-show');
				},3000);
			});
		}
	}
}).directive('ngLoading', function(){
	return{
		restrict: 'A',
		link: function(scope,element,attr) {
			element.addClass('fade-show');
			angular.element(document).ready(function(){
				window.setTimeout(function(){
					element.removeClass('fade-show');
					element.addClass('fade-hide');
				},2000);
				window.setTimeout(function(){
					element.addClass('display-none');
				},3000);
			});
		}
	}
}).directive('ngCheckers', function(){
	return{
		restrict: 'A',
		link: function(scope,element,attr) {
			element.addClass('fade-show');
			angular.element(document).ready(function(){
				window.setTimeout(function(){
					element.removeClass('fade-show');
					element.addClass('fade-hide');
				},2000);
				window.setTimeout(function(){
					element.addClass('display-none');
				},3000);
			});
		}
	}
});

var mainCtrl = function($scope) {

};

app.controller('mainCtrl', mainCtrl);