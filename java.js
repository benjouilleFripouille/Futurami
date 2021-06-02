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

// Paillette 
$(document).ready(function(){
    // instructions jQuery Paillettes Benji
$('.cardB').on('click', function () {
    $('.pailletteB').css('visibility', 'hidden');
})
$('.card_backB').on('click', function () {
    $('.pailletteB').css('visibility', 'visible');
})

// instructions jQuery Paillettes Marina
$('.cardM').on('click', function () {
    $('.pailletteM').css('visibility', 'hidden');
})
$('.card_backM').on('click', function () {
    $('.pailletteM').css('visibility', 'visible');
})

// instructions jQuery Paillettes Jules
$('.cardJ').on('click', function () {
    $('.pailletteJ').css('visibility', 'hidden');
})
$('.card_backJ').on('click', function () {
    $('.pailletteJ').css('visibility', 'visible');
})

// instructions jQuery Paillettes Léo
$('.cardL').on('click', function () {
    $('.pailletteL').css('visibility', 'hidden');
})
$('.card_backL').on('click', function () {
    $('.pailletteL').css('visibility', 'visible');
})
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