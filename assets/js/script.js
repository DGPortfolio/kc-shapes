jQuery( document ).ready( function() {

	var winWidth = jQuery(window).width();
    var section = jQuery( '.dgtkcsh_shape_fullwidth' );
    
    if ( section[0] )
        var offset = section.offset().left;

    section.css({'width':winWidth, 'margin-left': -offset});

// window.addEventListener("resize", function() {}, false);

});

jQuery( window ).resize( function() {

	var winWidth = jQuery(window).width();
    var section = jQuery( '.dgtkcsh_shape_fullwidth' );
    
    if ( section[0] )
        var offset = section.offset().left;

    section.css({'width':winWidth, 'margin-left': -offset});

});