$(document).on("ready", startRunning);

function startRunning() {
	$('.button').on('click', unHideMe);
}

function unHideMe() {
	$(this).prevAll('.hide p').slideToggle();
	if($(this).hasClass('bshow')) {
		$(this).removeClass('bshow');
		$(this).addClass('bhide');
	} else if ($(this).hasClass('bhide')) {
		$(this).removeClass('bhide');
		$(this).addClass('bshow');
	}
}
