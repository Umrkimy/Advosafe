import './bootstrap';
import 'flowbite';

const navEl= document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    if(window.scrollY >= 56){
        navEl.classList.add('navbar-scrolled')
    }  else if (window.scrollY < 56) {
        navEl.classList.remove('navbar-scrolled')
    }
});

const words = ["Hello!", "Welcome to SafeSphere Dynamics!", "This is SafeSphere Dynamics"];
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

