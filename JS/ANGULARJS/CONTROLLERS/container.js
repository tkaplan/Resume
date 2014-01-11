var containerCtrl = function($scope) {
	$scope.templateContent = { url: 'Mobile/HTML/content.html' };
	$scope.templateResume = { url: 'Mobile/HTML/resume.html' };

	$scope.scrollToContent = function(input)
	{

		// open up our main content all the way
		jQuery('div.content-holder').animate({
			height: jQuery('div#content-height').css('height')},
			'slow'
		);

		if(input == "modal")
		{
			// Pop modal here
			return;
		}

		var scroll = $(input).offset().top - 20;

		// Go to our content
		jQuery('html,body').animate({ 
			scrollTop: scroll},
        	'slow'
        );
	}
};

app.controller('containerCtrl',containerCtrl);