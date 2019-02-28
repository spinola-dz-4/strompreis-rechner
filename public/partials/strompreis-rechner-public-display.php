<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       www.dz-4.de
 * @since      1.0.0
 *
 * @package    Strompreis_Rechner
 * @subpackage Strompreis_Rechner/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<form id="str">


	<div class="frage frage-1">
	    <div class="">
	        <div class="">
	            <label for="plz" class="">
	                Wie lautet Ihre Postleitzahl?
	            </label><br>
	            <input id="plz" name="plz" type="text" required="required" class="underscore" autofocus />

	            <div class="errorcontainer" style="display: block; min-height: 40px; width: 100%">
	            	<label id="plz-error" class="error" for="plz" style="display: none;">Bitte die 5-stellige Postleitzahl eingeben</label>
	            </div>

	            <div class="hinweis">
	                Ihr Standort hilft uns bei der Berechnung, wie viel Solarstrom Sie erzeugen können.
	            </div>
	            <div class="button weiter weiter-1">Weiter</div>
	        </div>
	    </div>
	</div>



	<div class="frage frage-2">
	    <div class="">
	        <div class="">
	            <p for="consumption" class="">
	                Sind Sie Eigentümer Ihrer Immobilie, haben ein sonniges Dach mit mind. 30m<sup>2</sup> freier Fläche und möchten den über die Solaranlage produzierten Strom als ständiger Bewohner selbst nutzen?
	            </p>
	            <div class="">
	                <label class="eigentuemer-label">
	                    <input type="radio" name="sunny-roof" checked="checked" class="">
	                    <span class="Controls-indicator">Ja</span>
	                </label>
	                <label class="eigentuemer-label">
	                    <input type="radio" name="sunny-roof" class="">
	                    <span class="Controls-indicator">Nein</span>
	                </label>
	            </div> 
	            <div class="button weiter weiter-2">Weiter</div>
	            <div class="button back back-2">Zurück</div>
	        </div>
	    </div>
	</div>




	<div class= "frage frage-3">
	    <div class="">
	        <div class="">
	            <label for="consumption" class="">Wie hoch ist Ihr jährlicher Verbrauch in kWh?</label>
	            <span id="hidden-counter" style="display: none;">1500</span>
	            <input id="consumption" name="consumption" type="number" placeholder="kWh" required="required" pattern="[0-9]{5}" title="Bitte geben Sie Ihren Jahresverbrauch in kWh an." class="underscore">
	            <div class="consumption-label-wrap">
	                <label class="consumption-label consumption-label-1" kwh="1500">
	                    <input type="radio" name="typical-conumption" class="">
	                    <img src="<?= plugin_dir_url( dirname( __FILE__ ) ) . "img/01_gruen.png" ?>">
	                </label>
	                <label class="consumption-label consumption-label-2"  kwh="2500">
	                    <input type="radio" name="typical-conumption" class="">
	                    <img src="<?= plugin_dir_url( dirname( __FILE__ ) ) . "img/02_gruen.png" ?>">
	                </label>
	                <label class="consumption-label consumption-label-3"  kwh="4000">
	                    <input type="radio" name="typical-conumption" class="">
	                    <img src="<?= plugin_dir_url( dirname( __FILE__ ) ) . "img/03_gruen.png" ?>">
	                </label>
	                <label class="consumption-label consumption-label-4"  kwh="6000">
	                    <input type="radio" name="typical-conumption" class="">
	                    <img src="<?= plugin_dir_url( dirname( __FILE__ ) ) . "img/04_gruen.png" ?>">
	                </label>
	            </div>
	            <div class="button weiter weiter-ergebnis">Ergebnis</div>
	            <div class="button back back-ergebnis">Zurück</div>
	        </div>
	    </div>
	</div>


</form>