//$(document).ready(function(){

// Burger

const menuIcon = document.querySelector(".hamburger-menu");
const navbar = document.querySelector(".navbar");

menuIcon.addEventListener("click", function(){
    navbar.classList.toggle("change");
});


// Fip card

const card = document.querySelector('.ciB');
const card2 = document.querySelector('.ciM');
const card3 = document.querySelector('.ciJ');
const card4 = document.querySelector('.ciL');

card.addEventListener('click', function () {
    card.classList.toggle('is-flipped');
});

card2.addEventListener('click', function () {
    card2.classList.toggle('is-flipped');
});

card3.addEventListener('click', function () {
    card3.classList.toggle('is-flipped');
});

card4.addEventListener('click', function () {
    card4.classList.toggle('is-flipped');
});

// Formulaire

var modalBtn = document.querySelector('.modal-btn');
var modalBg = document.querySelector('.modal-bg');
var modalClose = document.querySelector('.modal-close');


modalBtn.addEventListener('click', function () {
    modalBg.classList.add('bg-active');
});

modalClose.addEventListener('click', function () {
    modalBg.classList.remove('bg-active');
});

//})