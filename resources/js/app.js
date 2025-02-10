import './bootstrap';
import 'flowbite';

const navEl= document.querySelector('.navbar');

// Navbar scroll effect
window.addEventListener('scroll', () => {
    if(window.scrollY >= 56){
        navEl.classList.add('navbar-scrolled')
    }  else if (window.scrollY < 56) {
        navEl.classList.remove('navbar-scrolled')
    }
});

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

