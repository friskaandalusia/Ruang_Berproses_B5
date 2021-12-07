( function( $ ) {
    $( document ).ready(function() {
    $('#dropdown li.has-sub>a').on('click', function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    
        $('#dropdown>ul>li.has-sub>a').append('<span class="holder"></span>');
    });
    } )( jQuery );
    