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


// Cartes

    $('.carteMetier').on('click', function(){
        console.log("carte cliquée");
        $('.modal-bg2').addClass('modal-active2');
    });

    $('.modal-close2').on('click', function(){
        $('.modal-bg2').removeClass('modal-active2');
    });


    $(document).ready(function(){
        $(".parceQue").on("click", function(){
            var ids = $(this).data('id');
             $.ajax({
                 url:"upload.php",
                 method:'POST',
                 data:{id:ids},
                 success:function(data){
                     $('#load_data').html(data);
                 }
             })
        })

})