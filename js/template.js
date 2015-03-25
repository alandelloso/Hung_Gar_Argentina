$(document).on('ready', mainFunctions);


function mainFunctions() {

//<<<<<<Navigation Material Effect Function START>>>>>
var parent, ink, d, x, y;
$(".mainnav__list__item a, .mobilenav__list__item a").click(function(e){
	parent = $(this).parent();
	//create .ink element if it doesn't exist
	if(parent.find(".ink").length == 0)
		parent.prepend("<span class='ink'></span>");

	ink = parent.find(".ink");
	//incase of quick double clicks stop the previous animation
	ink.removeClass("animate");
	
	//set size of .ink
	if(!ink.height() && !ink.width())
	{
		//use parent's width or height whichever is larger for the diameter to make a circle which can cover the entire element.
		d = Math.max(parent.outerWidth(), parent.outerHeight());
		ink.css({height: d, width: d});
	}
	
	//get click coordinates
	//logic = click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center;
	x = e.pageX - parent.offset().left - ink.width()/2;
	y = e.pageY - parent.offset().top - ink.height()/2;
	
	//set the position and add class .animate
	ink.css({top: y+'px', left: x+'px'}).addClass("animate");
})
//<<<<<<Navigation Material Effect Function END>>>>>

$('#menubutton').on('click', menuAction);

}

function menuAction() {
	var button = $('#menubutton a');
	var menu = $('#mobilenav');
	var wdow = $(document).height();
	var height = wdow - 109;

	if (button.hasClass('icon-menu')){
		menu.css({'left' : '0', 'height': height});
		button.css('transform','rotate(360deg)');
		button.removeClass('icon-menu');
		button.addClass('icon-left-arrow');
	} else {
		menu.css('left', '-16em');
		button.css('transform','rotate(-360deg)'); 
		button.removeClass('icon-left-arrow');
		button.addClass('icon-menu');
	}
}











