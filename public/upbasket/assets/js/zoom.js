
// -----------zoom-effect--

if ($(window).width() >= 992) {
	var paneContainer = document.querySelector('.zoom');
	$(".swiper-slide").each(function () {
		new Drift($(this).find("a > img")[0], {
			paneContainer: paneContainer,
			inlinePane: false,
		});
	});
}

// ----resposnive-zoom-effect--
if ($(window).width() <= 991) {
	$('img[data-enlargable]').addClass('img-enlargable').click(function () {
		var src = $(this).attr('src');
		$('<div>').css({
			background: 'RGBA(255,255,255,1) url(' + src + ') no-repeat center',
			backgroundSize: 'contain',
			width: '100%', height: '100%',
			position: 'fixed',
			zIndex: '10000',
			top: '0', left: '0',
			cursor: 'zoom-out'
		}).click(function () {
			$(this).remove();
		}).appendTo('body');
	});
}




