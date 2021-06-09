
// fonctions Toggle for hide/show activities information on Island Pages
function onClick() {
	// Récupération de l'élément .tab parent
    const tab = this.closest('.tab');
	// Récupération de l'élément "frère" suivant (ici .content)
	const content = tab.nextElementSibling;

	const contentDisplay = document.querySelector('.content.display');
	if (contentDisplay && content != contentDisplay) {
		toggle(contentDisplay);
	}

	// Ajout/Suppression de la class display
	toggle(content);
}

function toggle(element)
{
	element.classList.toggle('display');
}

const btns = document.querySelectorAll('.tab .btn');
btns.forEach(btn => {
	btn.addEventListener('click', onClick);
});



/*
function onClick()
{
	document.querySelectorAll('.content.display').forEach(item => {
		toggleClassDisplay(item);
	})
	
	toggleClassDisplay(this.closest('.tab').nextElementSibling);
}


function toggleClassDisplay(node)
{
	node.classList.toggle('display');
}


const btns = document.querySelectorAll('.tab .btn');
btns.forEach(btn => {
	btn.addEventListener('click', onClick);
})
*/