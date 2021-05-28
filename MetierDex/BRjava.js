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


    // Cartes(problèmes)
    var modalbg2 = document.querySelector('.modal-bg2');
    var carte = document.querySelector('.carteMetier');

    if(carte){

    carte.addEventListener('click', function(){
        console.log("carte cliquée");
        modalbg2.classList.add('modal-active');
    });
}
   
})





