$(document).ready(function(){

    console.log("document prêt mamen");
    
    // Informations
    var modalbg = document.querySelector('.modal-bg');
    var PI = document.querySelector('.PI');
    var modalclose = document.querySelector('.modal-close');
    

    PI.addEventListener('click', function () {
        modalbg.classList.add('modal-active');
    });

    modalclose.addEventListener('click', function(){
        modalbg.classList.remove('modal-active');
    });
   
})





    // Cartes(problèmes)
    var modalbg2 = document.querySelector('.modal-bg2');


    $('.carteMetier').on('click', function(){
        console.log("carte cliquée");
        $('.modal-bg2').addClass('modal-active2');
    });
