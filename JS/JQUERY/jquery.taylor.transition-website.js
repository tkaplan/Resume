
$(document).on('mousewheel',function(event){

	var marginTop = parseInt($('.lower-layer').css('margin-top'));

	if(event.deltaY < 0)
		marginTop = (marginTop + 10) + "px";
	else if(marginTop > -10)
		marginTop = (marginTop - 10) + "px";

	$('.lower-layer').css('margin-top', marginTop);
});