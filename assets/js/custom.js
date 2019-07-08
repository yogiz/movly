$ = jQuery;

// menghilangkan views di plugin hit post
$('.hit-count').each(function() {
	var text = $(this).text();
	$(this).text(text.replace('Views: ',''));
});


// rasioIframe
vid_iframe = $('.post-video iframe');
vid_width = vid_iframe.attr('width');
vid_height = vid_iframe.attr('height');


if (vid_width == '100%') {
	vid_width = 700;
}

if (vid_height == '100%') {
	vid_height = 400;
}

function rasioIframe () {
	if (vid_iframe.length) {
		if (vid_width != '' && vid_height !='' && vid_width != '0' && vid_height !='0' ) {
			rasio_perubahan = vid_iframe.width() / vid_width;
			console.log(vid_iframe.width());
			height_baru = rasio_perubahan * vid_height;
			vid_iframe.attr('height', height_baru);

		} else {
			console.log('tidak ada');
		}
	}
}
rasioIframe();



$( window ).resize(function() {
	rasioIframe();
});