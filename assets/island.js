
// import Splide for carousel photos, the installation has been done with npm install @splidejs/splide 
// more info: https://splidejs.com/

import Splide from '@splidejs/splide';

// function for photo carousel on ISLAND page

	document.addEventListener( 'DOMContentLoaded', function () {

		new Splide( '#image-sliderisland', {
			'cover'      : true,
			'heightRatio': 0.5,
			'height' : '200px',
			'width' : '100%',
			perPage: 4,
			perMove: 1,
			'gap' : '1rem',
			autoplay : 'true',
			type   : 'loop',
		} ).mount();




	} ); 
	