/*jQuery( function( $ ) {
	var timer = false;
		$(window).resize(function() {
		if (timer !== false) {
			clearTimeout(timer);
		}
		timer = setTimeout(function() {
		location.reload();
		}, 50);
	} );
} );*/

jQuery( function( $ ) {
	if (window.matchMedia( '(max-width: 1203px)' ).matches) {
		$( ".js-menu__button" ).on( "click", function() {
			$( ".l-body" ).toggleClass( "is-fix" );
			$( ".l-sidebar" ).toggleClass( "is-open" );
			$( ".c-button__hamburger" ).toggleClass( "is-open" );
		} );
	}
} );

jQuery( function( $ ) {
	if (window.matchMedia( '(max-width: 1203px)' ).matches) {
		$( ".js-hamburger__button" ).on( "click", function() {
			$( this ).removeClass( "is-open" );
			$( ".l-sidebar" ).removeClass( "is-open" );
			$( ".l-body" ).removeClass( "is-fix" );
		} );
	}
} );