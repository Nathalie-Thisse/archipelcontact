import Splide from '@splidejs/splide';

window.addEventListener('DOMContentLoaded',() => {

    new Splide( '.splide' ).mount();

	document.addEventListener( 'DOMContentLoaded', function () {
		new Splide( '#image-slider', {
			'cover'      : true,
			'heightRatio': 0.5,
			'height' : '20vh',
			type   : 'loop',
		} ).mount();
	} );
	
});



