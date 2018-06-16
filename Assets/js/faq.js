
$('.faq-question').on('click', function(e) {
	console.log(this);
	$(this).toggleClass('faq-question-active');
});

$(document).ready(function() {
	$('#faq-section').removeClass('preload-hide');
});