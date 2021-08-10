
// import Splide for carousel photos, the installation has been done with npm install @splidejs/splide 
// more info: https://splidejs.com/
import Splide from '@splidejs/splide';

// function for photo carousel on AGENCY page

	document.addEventListener( 'DOMContentLoaded', function () {

		new Splide('#image-slideragency', {
			'cover'      : true,
			'heightRatio': 0.5,
			'height' : '200px',
			'width' : '100%',
			//responsive slider: 
			perPage: 4,
				breakpoints: {
					640: {
						perPage: 1,
					},
				},
			
			perMove: 1,
			'gap' : '1rem',
			autoplay : 'true',
			type   : 'loop',
		} ).mount();

		
} );
	


