
$(document).ready(function(){

    $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();

        var hash = $(this.hash);

        $('body').stop().animate( {
            'scrollTop' : hash.offset().top
        }, 900, function(){
            window.location.hash = hash;
        })
    });


}); // Fin raccouçis jQuery