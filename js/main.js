jQuery(document).ready( function( $ ) {
	//if (window.matchMedia( '(max-width: 1203px)' ).matches) {
		$( ".js-menu__button" ).on( "click", function() {
			$( ".l-body" ).toggleClass( "is-fix" );
			$( ".l-sidebar" ).toggleClass( "is-open" );
			$( ".c-button__hamburger" ).toggleClass( "is-open" );
		} );
	//}
//);

//jQuery(document).ready( function( $ ) {
	//if (window.matchMedia( '(max-width: 1203px)' ).matches) {
		$( ".js-hamburger__button" ).on( "click", function() {
			$( this ).removeClass( "is-open" );
			$( ".l-sidebar" ).removeClass( "is-open" );
			$( ".l-body" ).removeClass( "is-fix" );
		} );
	//}
//} );

//jQuery(document).ready( function( $ ) {
	$(window).resize( function() {
		$( ".l-sidebar" ).removeClass( "is-open" );
		$( ".l-body" ).removeClass( "is-fix" );
		$( ".js-hamburger__button" ).removeClass( "is-open" );
	} );
} );