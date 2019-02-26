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

<div id="str">

<div class="frage frage-1">
    <div class="">
        <div class="">
            <label for="plz" class="">
                Wie lautet Ihre Postleitzahl?
            </label><br>
            <input id="plz" name="plz" type="text" placeholder="PLZ" required="required" pattern="[0-9]{5}" title="Bitte die 5-stellige Postleitzahl eingeben" class="underscore">
            <div class="">
                Ihr Standort hilft uns bei der Berechnung, wie viel Solarstrom Sie erzeugen können.
            </div>
            <div class="">
            	<a href="button" class="">
            		<span class="weiter weiter-1">Weiter</span>
            	</a>
            </div>
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
                <label class="">
                    <input type="radio" name="sunny-roof" checked="checked" class="">
                    <span class="Controls-indicator">Ja</span>
                </label>
                <label class="">
                    <input type="radio" name="sunny-roof" class="">
                    <span class="Controls-indicator">Nein</span>
                </label>
            </div>
            <div class="">
            	<a href="" class="button">
            		<span class="weiter weiter-2">Weiter</span>
            	</a>
            </div>
        </div>
    </div>
</div>




<div class= "frage frage-3">
    <div class="">
        <div class="">
            <label for="consumption" class="">Wie hoch ist Ihr jährlicher Verbrauch in kWh?</label>
            <input id="consumption" name="consumption" type="number" placeholder="kWh" required="required" pattern="[0-9]{5}" title="Bitte geben Sie Ihren Jahresverbrauch in kWh an." class="underscore">
            <div class="">
                <label class="">
                    <input type="radio" name="typical-conumption" class="">
                    <div role="img" title="1 Person" class="">
                    	1 Person Bild
                    </div>
                </label>
                <label class="">
                    <input type="radio" name="typical-conumption" class="">
                    <div title="2 Personen" class="">
                        2 Person Bild
                    </div>
                </label>
                <label class="Controls-item is-active">
                    <input type="radio" name="typical-conumption" class="">
                    <div title="Familie mit 2 Kindern" class="">
                        3 Person Bild
                    </div>
                </label>
                <label class="Controls-item">
                    <input type="radio" name="typical-conumption" class="">
                    <div title="Mehr als 4 personen" class="">
                        4 Person Bild
                    </div>
                </label>
            </div>
            <div class="">
            	<a href=""  class="button">
            		<span class="weiter weiter-ergebnis">Ergebnis</span>
            	</a>
            </div>
        </div>
    </div>
</div>

</div>