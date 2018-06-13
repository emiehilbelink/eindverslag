
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
                        <h1>5.3 Fase 2 : Realiseren van prototype
                        </h1>
                        <h4>5.3.1 Requirements
                        </h4>
                        <p>De requirements waaraan fase 2 moet voldoen:</p>
                        <ul>
                            <li>Interface waarop een camera zichtbaar is, waarbij gedetecteerde gezichten een rood vierkant om het gezicht krijgen.
                            </li>
                            <li>Interface waarop een camera zichtbaar is, waarbij de beweging van de persoon duidelijk zichtbaar is met bijbehorende score.
                            </li>
                            <li>Interface met animatie die geïdentificeerde gezichten begroet.
                            </li>
                            <li>Begroeting moet weer verdwijnen en opnieuw geladen worden.</li>
                            <li>Identificatie en begroeting moeten in 75% van de gevallen werken bij zowel vrouw als man.
                            </li>
                            <li>Identificatie en begroeting moet in 75% van de gevallen werken bij zowel ochtend, middag en avond.
                            </li>
                            <li>Moet positief bijdragen aan de gemoedstoestand van voorbijgangers.
                            </li>
                            <li>Interessante interface.</li>
                        </ul>
                        <p><br> Hierbij wilt Adwise dat deze requirements optimaal werken wanneer de voorbijgangers recht voor de client (scherm) staan. Pas nadat deze requirements zijn gerealiseerd en goedgekeurd, worden de “could-have”, “should-have” en “would-have”  requirements opgesteld, uitgewerkt en gerealiseerd.
                        </p>
                        <h4>5.3.2 Ontwerp
                        </h4>
                        <p>Voor het ontwerp is dezelfde architectuur gebruikt als <a href="http://verslag.localhost/fase1.php"> fase 1</a>.
                        <h4>5.3.3 Presentatielaag
                        </h4>
                        <p>De presentatielaag is verantwoordelijk voor de interactie tussen de gebruiker en de applicatie.
                        </p>
                        <p>Voor de architectuur van de presentatielaag is wederom gekozen voor het MVC-pattern (Model,View en  Control). Voor meer informatie zie <a href="http://verslag.localhost/fase1.php">Paragraaf 5.1.3 Presentatielaag</a>. </p>
                        <img src="images/afbeelding33.png">
                        <p><br>Het view deel vertegenwoordigd een cshtml pagina. Deze pagina toont de content aan de gebruiker (voorbijganger). Wanneer er een request komt vanuit de view door middel van een Ajax call, wordt deze verwerkt in de controller (HomeController). Vervolgens is het mogelijk om met HomeController connectie te maken met de businesslaag (Model). De Model staat in verbinding met de datalaag. Op deze manier kan het model een request doen op de dataopslag en de response hiervan terugsturen naar de presentatielaag.  </p>
<p>Tijdens deze fase wordt net zoals bij <a href="http://verslag.localhost/fase1.php"> fase 1</a> de FaceServiceClient gezet in de controller (HomeController). Voor meer informatie over FaceServiceClient zie <a href="http://verslag.localhost/fase1.php">Paragraaf 5.1.3 Presentatielaag</a> en Bijlage 1. Voor meer informatie over de opbouw van de presentatielaag zie Bijlage 3.
</p>
                        <h4>5.3.4 Businesslaag
                        </h4>
                        <p>Voor meer informatie over de logica achter de businesslaag zie <a href="http://verslag.localhost/fase1.php">Paragraaf 5.1.4</a>.</p>
                        <img src="images/tabel29.png">
                        <p><br>Naast de verschillende await-methoden die nodig zijn voor de herkenning van de voorbijganger staat het model ook in verbinding met de datalaag. Aan de hand van het persoonlijke personID in het getrainde model wordt er door de datalaag gezocht naar bijbehorende informatie.
                        <p>Hiervoor zijn in de IdentifyFaceServices twee extra classes aangemaakt:
                        </p>
                        <p><b>PersonObj</b> welke de informatie bevat die overeenkomt met het JSON-bestand, zoals: naam, personid en geboortedatum. Gegevens van een enkel persoon.
                        </p>
                        <p><b>JsonWrapper</b> welke een lijst bevat van alle personen (PersonObj). Vervolgens kan door deze lijst worden gezocht naar extra informatie over de zojuist herkende voorbijganger aan de hand van de verkregen personID uit GetPersonAsync.
                        </p>
                        <h4>5.3.5 Datalaag
                        </h4>
                        <p>De datalaag is verantwoordelijk voor de opslag van de gegevens. De vorm van dataopslag is voortgekomen uit het literatuuronderzoek, waarbij er gekozen voor: file-based in JSON formaat.
                        </p>
                        <p>Bij het aanmaken van de datalaag in fase 1 wordt het persoonlijke PersonId welk elke toegevoegde persoon krijgt vanuit het model gekoppeld aan de persoon in het JSON bestand.
                        </p>
                        <i>{<br>
                            "persons":[ <br>
                            {<br>
                            "name":"Emie Hilbelink",<br>
                            "personID" : "c632d640-778c-4a65-81a8-af1c1bb3c893",<br>
                            "birthday": "1994-04-14"<br>
                            }<br>
                            ]<br></i>
                        <p>Aan de hand van PersonID wordt het JSON bestand doorzocht.
                        </p>
                        <h4>5.3.6 Testen</h4>
                        <p>Na het schrijven van de code is er getest of de code voldoet aan alle eisen. De methoden van testen is terug te vinden in <a href="http://verslag.localhost/methoden2.php">Paragraaf 6</a>. De resultaten zijn terug te vinden in <a href="http://verslag.localhost/resultaten.php">Paragraaf 7</a>.</p>
                        <h4>5.3.7 Acceptatie
                        </h4>
                        <p>Wanneer fase 2 alle testen uit <a href="http://verslag.localhost/methoden2.php">Paragraaf 6</a> heeft doorlopen, wordt er nog eenmaal getest. Dit is gedaan in de vorm van review met de opdrachtgever <a href="http://verslag.localhost/requirements.php">(Paragraaf 4.2)</a>. </p>
                        <p>De uitkomst van deze test was dat de applicatie aan alle vooraf vastgestelde gewenste requirements voldoet. </p>
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

