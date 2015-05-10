$(document).on('ready', script);

function script() {

	$('.galery__pic').on('click', picAction);
	$('.screen--black').on('click', picOut);
	$('#china-2012').on('click', china2012);
	$('#china-2011').on('click', china2011);
	$('#sede-central').on('click', sedeCentral);
	$('#seminario-uruguay').on('click', seminarioUruguay);
	
}

function picAction(event) {

	//Element Vars
	var pic = $(this);
	var pics = $('.galery__pic');
	var caption = $(this).find('.galery__pic__caption');
	var captions = $('.galery__pic__caption');
	var screenwidth = $(window).width();
	var blackscreen = $('.screen--black');
	//Element Attributes Vars
	var width = pic.width();
	var height = pic.height();
	//JSON String vars
	var normalJSON = '{"width":"200px","height":"200px", "position":"static", "z-index":"0", "cursor":"pointer", "transition":"none"}';
	var selectedJSON = '{"z-index":"2","width":"500px","height":"500px", "position":"fixed", "top":"5%", "left":"30%", "cursor":"auto", "transition":"all .5s ease-in"}';
	//JSON Vars
	var normal = JSON.parse(normalJSON);
	var selected = JSON.parse(selectedJSON);


	//Actions
	if(width != 500 && height != 500 && screenwidth > 845){
		pics.css(normal);
		captions.fadeOut();
		blackscreen.fadeIn();
		pic.css(selected);
		caption.fadeIn();
	} else if(width == 500 && height == 500){
		captions.css('display', 'none');
		pics.css(normal);
		blackscreen.fadeOut();
	};
	
}

function picOut() {

	var pics = $('.galery__pic');
	var captions = $('.galery__pic__caption');
	var screenwidth = $(window).width();
	var blackscreen = $('.screen--black');
	var normalJSON = '{"width":"200px","height":"200px", "position":"static", "z-index":"0", "cursor":"pointer", "transition":"none"}';
	var normal = JSON.parse(normalJSON);

	captions.css('display', 'none');
	pics.css(normal);
	blackscreen.fadeOut();	
}

function china2012() {
	document.location.href = 'galery/china-2012';
}

function china2011() {
	document.location.href = 'galery/china-2011';
}

function sedeCentral() {
	document.location.href = 'galery/sede-central';
}

function seminarioUruguay() {
	document.location.href = 'galery/seminario-interdisciplinario-uruguay';
}