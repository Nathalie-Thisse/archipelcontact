
// JS for each island page (Bali, Java, etc.)

import Splide from '@splidejs/splide';

// ------ function for photo carousel on HOME page

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
     })