"use strict"

$(document).ready(function(){

    var clicCarte1 = 0;
    var clicCarte2 = 0;

    $('#carte1').on('click', function(){
        clicCarte1++;
        console.log(clicCarte1);
        $('#1').text("Vous a cliqué " +clicCarte1+ " fois sur la 1ère carte !");
    })

    $('#carte2').on('click', function(){
        clicCarte2++;
        console.log(clicCarte2);
        $('#2').text("Vous a cliqué " +clicCarte2+ " fois sur la 2ème carte !");
    })

})