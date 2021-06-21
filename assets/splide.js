import Splide from '@splidejs/splide';

	document.addEventListener( 'DOMContentLoaded', function () {
		new Splide( '#image-slider', {
			'cover'      : true,
			'heightRatio': 0.5,
			'height' : '400px',
			'width' : '70%',
			type   : 'loop',
			autoplay : 'true',
			type  : 'fade',
			rewind: true,
		} ).mount();
	} );
	



