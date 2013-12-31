var app = angular.module('app',[]).config(function($interpolateProvider){
	$interpolateProvider.startSymbol('{|');
	$interpolateProvider.endSymbol('|}');
}).directive('ngReady', function(){
	return{
		restrict: 'A',
		link: function(scope,element,attr) {
			element.addClass('fade-hide');
			element.addClass('fade');
			angular.element(document).ready(function(){
				window.setTimeout(function(){
					element.removeClass('fade-hide');
					element.addClass('fade-show');
					jQuery(".upper-layer").mouseover();
					jQuery(".lower-layer").mouseover();
				}, 1000);				
			});
		}
	}
}).directive('ngLoading', function(){
	return{
		restrict: 'A',
		link: function(scope,element,attr) {
			element.addClass('fade-show');
			element.addClass('fade');
			angular.element(document).ready(function(){
				element.removeClass('fade-show');
				element.addClass('fade-hide');
				window.setTimeout(function(){
					element.addClass('display-none');
				},500);
			});
		}
	}
});

var mainCtrl = function($scope) {

};

app.controller('mainCtrl', mainCtrl);