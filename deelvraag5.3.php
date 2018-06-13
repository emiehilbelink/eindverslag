<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php

include '/head.php';

?>
<body>

<div id="fh5co-page">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <?php

    include '/menu.php';

    ?>


    <div id="fh5co-main">



        <div class="fh5co-narrow-content">
            <div class="row">

                <div class="col-md-12 col-md-offset-0 animate-box" data-animate-effect="fadeInLeft">

                    <div class="col-md-9 col-md-push-2">
                        <h1>3.5.3 Gepersonaliseerde berichten </h1>
                      <p>De laatste stap is de juiste data uit het file-based data systeem filteren en deze vertalen naar een gepersonaliseerd bericht. </p>
                        <p>Vanuit de server wordt een response ontvangen, welke het unieke ID van de zojuist herkende persoon bevat (in JSON-formaat). Dit unieke ID wordt gebruikt om een request te doen op het file-based data systeem. Pas wanneer de server een response geeft, wordt het request daadwerkelijk uitgevoerd. Dit wordt via een asynchrone call gedaan, zodat het process in gang blijft en niet tussendoor stopt.</p>
                        <p>David Mills (2017) concludeert dat JSON gebruik maakt van tekst in de vorm van data-objecten. Die bestaan uit een of meerdere attributen met waarden.
                            Het onderstaande voorbeeld is een JSON-weergave van een lijst met drie objecten, waarvan ieder object drie attributen met waarden bevat.
                        </p>
                        <p>Het onderstaande voorbeeld is een JSON-weergave van een lijst met drie objecten.
                        </p>
                        <i>var employees = [ <br>
                            {"name":"John", "age":"23", "city":"Almelo"}, <br>
                            {"name":"Steve", "age":"28", "city":"Enschede"}, <br>
                            {"name":"Peter", "age":"32", "city":"Hengelo"} <br>
                            ]};
                        </i>
                        <p><br>Een object start met <b>{</b> (accolade) en eindigt met <b>}</b> (accolade).  </p>
                        <p>Een request sturen naar een database of file-based systeem kan met allerlei talen. Om vervolgens de response te tonen zonder dat de pagina hiervoor hoeft te herladen kan volgens W3Schools(z.j) gedaan worden met Ajax. Voorbeelden van veelgebruikte websites/applicaties die gebruik maken van Ajax zijn:
                        </p>
                        <ul>
                            <li>Google Maps</li>
                            <li>YouTube</li>
                            <li>Gmail</li>
                            <li>Facebook</li>
                        </ul>
                        <h4><br>3.5.3.1 Ajax call</h4>
                        <p>Volgens w3Schools(z.j) is het hoofddoel van Ajax:
                        </p>
                        <ul>
                            <li>laden van data op de achtergrond;
                            </li>
                            <li>weergeven hiervan op de webpagina;</li>
                            <li>zonder dat de pagina hiervoor hoeft te herladen.</li>
                        </ul>
                        <p>JQuery komt met een standaard aantal Ajax gerelateerde functies welke gebruikt kunnen worden bij het opvragen(request), versturen(send) en manipuleren van JSON data (De Rosa, 2015).
                        </p>
                        <p>In 2016 onderzochten Carnaghan en Rappi hoe aan de hand van jQuery, gegevens uit een JSON-bestand gehaald kunnen worden.
                        </p>
                        <p><b>1. Schrijven van JSON bestand.</b><br>
                        <b>2. Schrijven van JavaScrip</b>, zodat de response netjes op de webpagina getoont kan worden. JQuery heeft een aantal behulpzame bibliotheken die de Ajax oproep naar het JSON-bestand relatief eenvoudig maken.
                       <br> <b>3. Het schrijven van de HTML pagina</b>, welke de onderdelen bevat wat getriggerd wordt door het JavaScript, waarbij de opgehaalde data getoond wordt.</p>
                        <h4>3.5.3.2 De begroeting</h4>
                        <p>Naast het ophalen van de juiste data, moet deze ook getoond worden. Licht-geluid (2014) en Dudok (2016) onderzochten de invloed van kleuren op onze gemoedstoestand. In tabel 26 zijn gegevens uit deze onderzoeken verwerkt.
                        </p>
                        <img src="images/tabel26.png">
                        <br>
                        <p>Het doel van het prototype is de gemoedstoestand van de voorbijganger positief beïnvloeden. Ensie (2016) concludeert dat het hebben van energie en het vrolijk zijn een positief effect hebben op de gemoedstoestand. Vandaar dat kleuren die vrolijkheid stimuleren en kleuren die het energielevel omhoog halen worden gebruikt, voor het positief beïnvloeden van de gemoedstoestand.
                        </p>
                        <b>Energierijke en vrolijke kleuren:
                        </b>
                        <ul>
                            <li>geel
                            </li>
                            <li>oranje</li>
                        </ul>
                        <br>
                        <p>Naast deze kleuren worden kleuren die een rustgevend effect hebben ook in acht genomen. MindTuning (2016) concludeert dat stress een negatief effect heeft op de gemoedstoestand, te veel stress kan zelfs zorgen voor een burn-out. Door rustgevende kleuren te gebruiken, verminder je het stressgehalte van voorbijganger, wat een positief effect heeft op de gemoedstoestand.
                        </p>
                        <b>Rustgevende kleuren:
                        </b>
                        <ul>
                            <li>blauw
                            </li>
                            <li>roze</li>
                        </ul>
                        <br>
                        <p>Interieur Designer (z.j.) deed onderzoek naar kleurencombinaties en gaf aan de hand van dit onderzoek kleuradvies.
                        </p>
                        <ul>
                            <li>Kleuren die tegenover elkaar liggen in de kleurencirkel (complementaire kleuren), versterken elkaar. De meest voorkomende combinaties zijn groen-rood, geel-blauw, blauw-rood en paars-oranje.
                            </li>
                            <li>Door naastliggende kleuren in de kleurencirkel te combineren, krijg je harmonieuze kleurencombinaties.
                            </li>
                        </ul>
                        <br>
                        <img src="images/afbeelding11.png">
                        <p>De combinatie die vanuit de adviezen van Interieur Designer (z.j.) gemaakt kunnen worden zijn: </p>
                        <ul>
                            <li>Blauw en oranje (complementaire).
                            </li>
                            <li>Geel en oranje (harmonieus).
                            </li>
                        </ul>
                        <br>
                        <p>Deze kleurencombinaties zullen in acht genomen worden bij het kiezen naar de juiste kleur. De juiste kleur combinatie wordt gekozen door collega’s van Adwise te betrekken bij deze keuze en groepsgesprekken te houden met Jeroen Kolkman.</p>
                        <p>Naast het kiezen van kleur wordt er ook gekeken naar een eventuele animatie welke de voorbijganger begroet. Adwise gaf aan dat de begroeting uit meer dan alleen tekst moet bestaan. Er moet “iets” zijn wie deze begroeting uitspreekt.
                        </p>
                        <p>De gevonden informatie (zie Bijlage J) toont aan dat mensen tegenwoordig meer tijd spenderen dan ooit kijkend naar schattige dingen op het internet. De eigenschappen van schattigheid (zie bijlage J) worden daarom verwerkt in het maken van een animatie die de voorbijganger begroet.
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Counters -->
<script src="js/jquery.countTo.js"></script>


<!-- MAIN JS -->
<script src="js/main.js"></script>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Emie
 * Date: 08/05/2018
 * Time: 23:21
 */