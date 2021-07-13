
// JS for each island page (Bali, Java, etc.)

import Splide from '@splidejs/splide';



document.addEventListener( 'DOMContentLoaded', function () {

	// ------ function for photo carousel on ISLAND page
 	
	new Splide( '#image-slider', {
 		'cover'      : true,
 		'heightRatio': 0.5,
 		'height' : '400px',
 		'width' : '100%',
 		type   : 'loop',
 		autoplay : 'true',
 		type  : 'fade',
		rewind: true,
	}).mount();


	// ------ function to drop down information inside tabs
		 
	function onClick() {
		// Récupération de l'élément .tab parent
		const tab = this.closest('.dropdown');
		// Récupération de l'élément "frère" suivant (ici .content)
		const content = tab.nextElementSibling;
		
		const contentDisplay = document.querySelector('.textcontent.display');
		if (contentDisplay && content != contentDisplay) {
			toggle(contentDisplay);
		}
		
		// Ajout/Suppression de la class display
			toggle(content);
	};
		
	function toggle(element){

			element.classList.toggle('display');
	};
		
	const btns = document.querySelectorAll('.dropdown .btn');
	btns.forEach(btn => {
		btn.addEventListener('click', onClick);
	});

})