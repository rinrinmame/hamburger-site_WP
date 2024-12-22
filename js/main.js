jQuery(document).ready( function( $ ) {
	$( ".js-menu__button" ).on( "click", function() {
		$( ".l-body" ).toggleClass( "is-fix" );
		$( ".l-sidebar" ).toggleClass( "is-open" );
		$( ".c-button__hamburger" ).toggleClass( "is-open" );
	} );

	$( ".js-hamburger__button" ).on( "click", function() {
		$( this ).removeClass( "is-open" );
		$( ".l-sidebar" ).removeClass( "is-open" );
		$( ".l-body" ).removeClass( "is-fix" );
	} );
	
	$(window).resize( function() {
		$( ".l-sidebar" ).removeClass( "is-open" );
		$( ".l-body" ).removeClass( "is-fix" );
		$( ".js-hamburger__button" ).removeClass( "is-open" );
	} );
} );