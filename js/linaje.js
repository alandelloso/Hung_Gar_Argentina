$(document).on("ready", startRunning);

function startRunning() {

	$('[data-function="unhide"]').on('click', unHide);
}

function unHide() {
	$(this).prevAll('.hide p').slideToggle();

}