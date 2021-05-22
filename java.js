const menuIcon = document.querySelector(".hamburger-menu");
const navbar = document.querySelector(".navbar");

menuIcon.addEventListener("click", function(){
    navbar.classList.toggle("change");
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