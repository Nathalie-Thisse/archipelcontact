// ------------------------------- tabs for activities in ISLAND PAGE

var tabLinks = document.querySelectorAll(".tablinks");
var tabContent = document.querySelectorAll(".tabcontent");


tabLinks.forEach(function(el) {
   el.addEventListener("click", openTabs);
});


function openTabs(el) {
   var btnTarget = el.currentTarget;
   var country = btnTarget.dataset.country;

   tabContent.forEach(function(el) {
      el.classList.remove("active");
   });

   tabLinks.forEach(function(el) {
      el.classList.remove("active");
   });

   document.querySelector("#" + country).classList.add("active");
   
   btnTarget.classList.add("active");
}

// ------------------------------- sidebar for INFORMATION PAGE

window.addEventListener('DOMContentLoaded', () => {

	const observer = new IntersectionObserver(entries => {
		entries.forEach(entry => {
			const id = entry.target.getAttribute('id');
			if (entry.intersectionRatio > 0) {
				document.querySelector(`nav li a[href="#${id}"]`).parentElement.classList.add('active');
			} else {
				document.querySelector(`nav li a[href="#${id}"]`).parentElement.classList.remove('active');
			}
		});
	});

	// Track all sections that have an `id` applied
	document.querySelectorAll('section[id]').forEach((section) => {
		observer.observe(section);
	});
	
});