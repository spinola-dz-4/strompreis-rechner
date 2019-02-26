(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$(function() {

		/*
		 * Initiales Hide/Show der Fragen
		 */

		$("div.frage.frage-1").show();
		$("div.frage.frage-2").hide();
		$("div.frage.frage-3").hide();
		

		/*
		 * Clicks auf weiter
		 */

		$('.weiter.weiter-1').on('click tap', function() {
			$("div.frage.frage-1").hide();
			$("div.frage.frage-2").show();
		});

		$('.weiter.weiter-2').on('click tap', function() {
			$("div.frage.frage-2").hide();
			$("div.frage.frage-3").show();
		});
	 
	});
})( jQuery );
