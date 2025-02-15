import './bootstrap';
import 'flowbite';
import Swiper from 'swiper/bundle';

const navEl= document.querySelector('.navbar');

// Typewriter effect
const words = ["Hello!", "Welcome to Advosafe!", "This is Advosafe"];
let i = 0;
let j = 0;
let currentWord = "";
let isDeleting = false;

function type() {
  currentWord = words[i];
  if (isDeleting) {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j-1);
    j--;
    if (j == 0) {
      isDeleting = false;
      i++;
      if (i == words.length) {
        i = 0;
      }
    }
  } else {
    document.getElementById("typewriter").textContent = currentWord.substring(0, j+1);
    j++;
    if (j == currentWord.length) {
      isDeleting = true;
    }
  }
  setTimeout(type, 90);
}

type();

// Navbar scroll effect
window.addEventListener('scroll', () => {
    if(window.scrollY >= 56){
        navEl.classList.add('navbar-scrolled')
    }  else if (window.scrollY < 56) {
        navEl.classList.remove('navbar-scrolled')
    }
});

// Swiper
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  initialSlide: Math.floor(document.querySelectorAll('.swiper-slide').length / 2),
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 3,
  spaceBetween: 30,
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  loop: true,
});



