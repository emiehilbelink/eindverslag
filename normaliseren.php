
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
                        <h1>5 Heeft het voorafgaand normaliseren een positief effect op het detecteren van gezichten?</h1>
                      <h4>5.1 Experimenteel onderzoek</h4>
                        <p>De volgende filters worden onderzocht aan de hand van experimenteel onderzoek. Voor de onderbouwing van deze filters, zie Bijlage K.
                        </p>

                        <ul>
                            <li>grijswaarden</li>
                            <li>-BT 709</li>
                            <li>-RMY</li>
                            <li>-Y</li>
                            <li>helderheid</li>
                            <li>Gabor</li>
                            <li>gaussian Sharpen</li>
                            <li>sharpen</li>
                        </ul>
                        <p><br>Bij experimenteel onderzoek wordt een variabele gemanipuleerd om te kijken of dit effect heeft op een ander variabele. Het onderzoek wordt in een gecontroleerde omgeving uitgevoerd, zodat een of meerdere variabelen gemanipuleerd kunnen worden en het effect hiervan kan worden onderzocht. Tubbing (2014) concludeert dat door in dezelfde controleerbare ruimte te onderzoeken, oorzaak verband getest kan worden. Mocht de omgeving niet constant en oncontroleerbaar zijn, kunnen andere factoren invloed hebben op de uitkomst. Het is daarom van belang, om in een constante controleerbare ruimte te experimenteren, zodat dezelfde uitkomst wordt verkregen mocht het experiment opnieuw gedaan worden.
                        </p>
                        <h4>5.2 Keuze kwantitatief onderzoek</h4>
                        <p>Om een representatief beeld te krijgen, is het plan om deze filters in kwantitatieve hoeveelheden af te nemen. Volgens Swaen (2013) is kwantitatief onderzoek gericht voor het verzamelen van data die kunnen worden gecategoriseerd of gerangschikt. Dankzij de filters beschikbaar vanuit Accord.NET is dit experimenteel goed in kwantitatieve hoeveelheden af te nemen. Dit omdat er weinig code geschreven hoeft te worden, op deze manier kan in korte tijd een X aantal onderzoeken gedaan worden. </p>
                        <h4>Beschrijving onderzoeksprocedure</h4>
                        <p><b>1.</b> Accord.Imaging wordt via NuGet Packages gedownload in Microsoft Visual Studio. De verschillende filters zijn nu te bereiken door het aanmaken van een filter klasse. De documentatie over deze filters zijn te vinden via de volgende url : http://accord-framework.net/docs/html/N_Accord_Imaging_Filters.htm.
                        <br>
                            <b>2.</b> Vervolgens worden vijf afbeeldingen door het aangemaakte filter gehaald. Hierbij is gekozen voor een afbeelding met 1 gezicht, en vier afbeeldingen met meerdere gezichten. Hiermee wordt gecontroleerd, of het detecteren zowel met één als meerdere personen werkt. Daarnaast wordt er gewerkt met personen met zowel donkere als lichte huidskleuren. Op deze manier kan worden gecontroleerd of de huidskleur nog invloed heeft op het detecteren. Vervolgens wordt er gekeken naar afbeeldingen met zowel een lichte, als een donkere omgeving. Op deze manier kan de invloed van de omgeving worden gecontroleerd.
                            <br>
                           <b>3.</b>  De filter klassen worden aangeroepen met verschillende waardes. Op deze manier kan worden onderzocht wat het effect van de verschillende waardes heeft op de afbeelding. De waardes zijn bepaald aan de hand van de informatie te vinden op: http://accord-framework.net/docs/html/N_Accord_Imaging_Filters.htm.
                            <br>
                        <b>4.</b> Ten slotte wordt er een request gedaan op de detectie API met de gemanipuleerde afbeeldingen. De response toont of het detecteren wel of niet gelukt is, en in hoeverre het goed gelukt is. Op deze manier kan worden gekeken welke filter met bijbehorende waardes het meest geschikt is voor gezichtsdetectie. </p>
                        <img src="images/afbeelding12.png">
                        <br>
                     <button> <a href="resultnormalisering.php">Resultaten</a></button>

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

