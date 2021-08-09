/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
/* import './styles/app.scss'; */
require('./styles/app.scss');
import '@splidejs/splide';
import '../node_modules/@splidejs/splide/dist/css/splide.min.css';

// start the Stimulus application
import './bootstrap';


/// ****** MAIN JS FILE : ******  

/// Hamburger Menu Navigation

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}


/* Transparent navbar when scrolling on tablet or phone */

let mediaQueryList = window.matchMedia('(max-width: 1112px)');
const navbar = document.querySelector('.nav-bar');
let topOfNav = navbar.offsetTop;

if (mediaQueryList.matches) {

   
    
    function transparentNav(){
        if (window.scrollY >= topOfNav) {
            navbar.style.backgroundColor = "#41216442"; 
        }
        else{
            navbar.style.backgroundColor = "#7867D0";
        }

    }

    window.addEventListener('scroll', transparentNav);

}



/// Cookies

    /* common functions */
    function el(selector) { return document.querySelector(selector) }
    function els(selector) { return document.querySelectorAll(selector) }
    function on(selector, event, action) { els(selector).forEach(e => e.addEventListener(event, action)) }
    function cookie(name) { 
    let c = document.cookie.split('; ').find(cookie => cookie && cookie.startsWith(name+'='))
    return c ? c.split('=')[1] : false; 
    }


    /* pop up button handler */
    on('.cookie-popup button', 'click', () => {
    el('.cookie-popup').classList.add('cookie-popup--accepted');
    document.cookie = `cookie-accepted=true`
    });

    /* pop up init handler */
    if (cookie('cookie-accepted') !== "true") {
    el('.cookie-popup').classList.add('cookie-popup--not-accepted');
    }
