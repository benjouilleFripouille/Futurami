const menuIcon = document.querySelector(".hamburger-menu");
const navbar = document.querySelector(".navbar");

menuIcon.addEventListener("click", function(){
    navbar.classList.toggle("change");
});


// Fip card

const card = document.querySelector('.card_inner');
const card2 = document.querySelector('.card_inner2');

card.addEventListener('click', function () {
    card.classList.toggle('is-flipped');
});

card2.addEventListener('click', function () {
    card2.classList.toggle('is-flipped');
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

$(document).ready(function(){

    $(document).load()
    

})