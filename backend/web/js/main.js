/**
 * Created by brigido.alejo on 8/31/2015.
 */
(function( $ ) {
	'use strict';

	$( document ).on( 'click', '.fc-day', function() {
		var date = $( this ).attr( 'data-date' );

		$.get( 'index.php?r=events/create', { 'date': date }, function( data ) {
			$( '#modal' ).modal( 'show' )
				.find( '#modalContent' )
				.html( data );
		} );
	} );

	// get the click of the create button
	$( '#modalButton' ).click( function() {
		$( '#modal' ).modal( 'show' )
			.find( '#modalContent' )
			.load( $( this ).attr( 'value' ) );
	} );
}( jQuery ));
