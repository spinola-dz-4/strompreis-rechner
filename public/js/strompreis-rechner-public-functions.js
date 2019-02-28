(function( $ ) {
	'use strict';

$(function() {
if ( !($("#str").length == 0) ){

			
	/*
	 * Initiales Hide/Show der Fragen
	 */

	$("div.frage.frage-1").show();
	$("div.frage.frage-2").hide();
	$("div.frage.frage-3").hide();

	// $("div.frage").show();

	/*
	 * Validation
	 */

	$('#str').validate({
	    // errorElement: 'span', //default input error message container
	    // errorClass: 'help-block', // default input error message class
	    focusInvalid: false, // do not focus the last invalid input
	    rules: {
	        plz: {
	        	required: true,
	        	minlength: 5,
	        	maxlength: 8,
	        	number: true
	        },
	        consumption: {
	        	required: true,
	        	minlength: 1,
	        	maxlength: 8,
	        	number: true
	        }
	    },
	    messages: {
            plz: "Bitte die 5-stellige Postleitzahl eingeben"
        }
	});

	/*
	 * Clicks auf weiter
	 */

	$('.weiter.weiter-1').on('click tap', function() {

		if ($("#plz").valid() == true ) {

	        $("div.frage.frage-1").hide();
			$("div.frage.frage-2").fadeIn();

	    } else {
	    	console.log("plz NOT valid");
	    }
		
	});

	$('.weiter.weiter-2').on('click tap', function() {
			$("div.frage.frage-2").hide();
			$("div.frage.frage-3").fadeIn();    
	});


	$('.back.back-2').on('click tap', function() {
		$("div.frage.frage-1").fadeIn();
		$("div.frage.frage-2").hide();
	});

	$('.back.back-ergebnis').on('click tap', function() {
		$("div.frage.frage-2").fadeIn();
		$("div.frage.frage-3").hide();
	});

	$('.weiter.weiter-ergebnis').on('click tap', function() {
		if ($("#consumption").valid() == true ) {
			$('form div.nf-form-content input[name="plz"]').val( $("#plz").val() );
			$('form div.nf-form-content input.consumption ').val( $("#consumption").val() );
		} else {
	    	console.log("kwh NOT valid");
	    }
	});



	/*
	 * Stromverbrauch Personen-click
	 */

	/* bind input field to value of hidden span field  */

	var factor = 50; // making counting function nicer to follow
	$( "#hidden-counter" ).on('DOMSubtreeModified', function () {
		
		$("#consumption").val(  Math.ceil( $( "#hidden-counter" ).html() * factor ) ) ;

	});
	
	/* Actual on Click function */

	$('label.consumption-label').on('click tap', function( evt ) {

		var start = ( $("#consumption").val() === "") ? 0 : $("#consumption").val();
		var end = $(this).attr("kwh");

		start = start / factor;
		end = end / factor;

		$('#hidden-counter')
			.prop('number', start)
			.animateNumber(
			{
		    	number: end,
		    	easing: 'easeOutCubic'
		  	},
		  	1000
		);

		/* stop jQuery from firing this function twice */
		$(this).find("input[type=radio]").prop('checked', true);
		evt.stopPropagation(); 
		evt.preventDefault(); 
		evt.stopImmediatePropagation();

	});


} // end if DOM #str exists
}); // end if DOM loaded
})( jQuery ); // end jQuery
