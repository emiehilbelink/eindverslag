
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
                        <h1>5.1 Fase 1: Model training</h1>
                        <h4>5.1.1 Requirements
                        </h4>
                        <p>De requirements waaraan fase 1 moet voldoen:
                        </p>
                        <ul>
                            <li>aanmaken van de groep Adwise in het model;
                            </li>
                            <li>aanmaken van collega's in het model;</li>
                            <li>toevoegen van collega's met bijbehorend referentiemateriaal in het model;
                            </li>
                            <li>trainen van het model;
                            </li>
                            <li>identificeren van collega’s die in het model zijn toegevoegd.
                            </li>
                        </ul>

                       <h4>5.1.2 Ontwerp</h4>
                        <p>In het ontwerp is gewerkt aan de architectuur van fase 1. De architectuur is opgebouwd uit de volgende verschillende lagen:
                        </p>
                        <ul>
                            <li>presentatielaag</li>
                            <li>businesslaag</li>
                            <li>datalaag</li>
                        </ul>
                        <h4><br>5.1.3 Presentatielaag</h4>
                        <p>De presentatielaag is verantwoordelijk voor de interactie tussen de gebruiker en de applicatie.
                        </p>
                        <p>Voor de architectuur van de presentatielaag is gekozen voor het MVC-pattern (Model,View en  Control). Dit is door jaren heen een volwassen architectuur geworden en bestaat uit drie onderdelen:
                        </p>
                        <p>
                            <b>1.</b> Model<br>
                            <b>2.</b> View<br>
                            <b>3.</b> Control<br>
                        </p>
                        <img src="images/afbeelding28.png">
                       <p><br>Het voordeel van MVC is dat er een scheiding wordt gemaakt tussen de data, de view en de applicatie logica. Hierdoor is het makkelijker om de verschillende componenten her te gebruiken of een andere view te koppelen aan de data.
                        </p>
                        <p>Volgens Hummer(2013) is het model verantwoordelijk voor de businesslaag, het proces van ophalen van gegevens uit een database.
                            De view is verantwoordelijk voor de presentatie van de data die wordt ontvangen uit het model.
                            De controller vraagt gegevens aan bij een model en verstuurd data naar de view. POST, GET en HTTPs request zijn hier voorbeelden van.
                        </p>
                        <img src="images/afbeelding29.png">
                       <p><br>Het view deel wordt vertegenwoordigd door een cshtml pagina. Wanneer er een request komt vanuit de gebruiker wordt deze verwerkt in de controller(ValuesController) aan de hand van Postman. Vervolgens is het mogelijk om met Postman (controller) connectie te maken met de businesslaag (Model). De datalaag is opgenomen in bovenstaande afbeelding, echter heeft de datalaag bij fase 1 nog geen verdere functie dan het aanmaken van deze laag. De verbinding met de datalaag wordt pas in fase 2 gerealiseerd. Dit omdat deze fase gericht is op modeltraining en niet op het begroeten van voorbijgangers.

                       </p>
                        <p>Postman maakt het mogelijk om een HTTP request uit te voeren (Getpostman, z.d). Dankzij Postman hoeft er geen eigen interface geschreven, hiermee versnelt Postman proces van fase 1.</p>
                        <img src="images/afbeelding30.png">
                        <p><br>In ValuesController wordt eenmaal FaceService faceServiceClient gezet. Elk request op faceServiceClient moet authorized worden, waarbij een key de vereiste is. De class FaceServiceClient bevat de methoden voor het realiseren van fase 1 en 2.
                        </p>
                        <i>FaceServiceClient faceServiceClient = new FaceServiceClient("<Subscription Key>");
                        </i>
                        <p><br>Deze key wordt aan de hand van een constructor meegegeven.</p>
                        <i>protected FaceServiceClient faceServiceClient = newFaceServiceClient ("key","apiRoot");
                        </i>
                        <p><br>Voor informatie over FaceServiceClient zie Bijlage 1.</p>
                        <h4>8.1.4 Businesslaag</h4>
                        <p>De businesslaag is verantwoordelijk voor het grootste deel van de logica. De businesslaag verwerkt de informatie die afkomstig is van de presentatielaag. Daarnaast verwerkt en speelt de businesslaag informatie door vanuit de  dataopslag. De businesslaag is opgebouwd uit een aantal verschillende services die onafhankelijk van elkaar gegevens verwerken. De services worden als C# classes gepresenteerd.  </p>
                         <p>Elke class heeft toegang nodig tot de FaceServiceClient uit de controller. Zonder FaceServiceClient met vereiste Key kan er geen request worden gedaan op de API. Aangezien de businesslaag  vooral bedoeld is voor het verwerken en doorspelen van data, wordt de FaceServiceClient hier niet nogmaals gezet.</p>
                        <p>Door elke class een constructor mee te geven met als argument:</p>
                        <i>FaceServiceClient faceserviceClient
                        </i>
                        <p>wordt de gebruiker verplicht om bij het aanmaken van een class uit de businesslaag de FaceServiceClient gegevens mee te geven. Op deze manier kunnen de verschillende classe toch bij FaceServiceClient, zonder dat deze classe de data zelf bevat.
                        </p>
                        <i>private readonly FaceServiceClient _faceServiceClient <br>
                            <br>
                            public nameOfClass (FaceServiceClient faceServiceClient){ <br>
                            _faceServiceClient = faceServiceClient; <br>
                            }
                        </i>
                        <img src="images/tabel28.png">
                        <p><br>Voor meer informatie over de werking van deze classes zie Bijlage 2. </p>
                        <p>Microsoft maakt gebruik van await Async methoden. Om hier correct gebruik van te kunnen maken, moet de aanroep methode ook als async gemarkeerd worden. Mocht dit niet gebeuren, kan “await” niet correct worden uitgevoerd.
                        </p>
                        <p>Een async-methode wordt synchroon uitgevoerd totdat de eerste await-expressie wordt bereikt, waarna de methode wordt onderbroken totdat de verwachte taak voltooid is. Bij een await wordt er gewacht totdat de await-expressie klaar is en deze data heeft teruggegeven (Docs Microsoft, z.d). Vervolgens kan de aanroep methode doorgaan met deze verkregen data.
                        </p>
                        <img src="images/afbeelding31.png">
                        <h4><br>5.1.5 Datalaag</h4>
                        <p>De datalaag is verantwoordelijk voor de opslag van de gegevens. De vorm van dataopslag is voortgekomen uit het literatuuronderzoek, waarbij er gekozen voor: file-based in JSON formaat.
                        </p>
                        <p>De datalaag wordt aangemaakt in fase 1, waarbij de persoonlijke gegevens worden toegevoegd in het JSON bestand en de bijbehorende afbeeldingen in een aparte map worden geplaatst. Verder heeft de datalaag hier nog geen verdere functie.
                        </p>
                        <p>Pas bij fase 2 wordt aan de hand van het personId,het JSON bestand doorzocht waarbij de juiste data wordt teruggegeven.
                        </p>
                        <h4>5.1.6 Testen</h4>
                        <p>Na het schrijven van de code is er getest of de code voldoet aan alle eisen. Bij het testen is er gekeken of de code werkt en of deze aan de vooropgestelde eisen voldoet. Om dit te testen is gebruik gemaakt van straattests.</p>
                        <p>Met een straattest, wordt het volledig doorlopen van alle functies bedoeld. Voordat er begonnen wordt aan een nieuwe functie, moet er een succesvolle straattest gedaan zijn. Hierbij wordt er geen gebruik gemaakt van unit testen, waarbij het systeem automatisch getest wordt. De reden hiervan is dat het innovatieteam zich richt op het realiseren van nieuwe technologieën, het automatisch testen wordt pas later in acht genomen. Dit geldt voor zowel fase 1 als 2.  </p>
                        <p>Er zitten verder geen resultaten aan de straattest verbonden, het werkt of het werkt niet. Het zijn dus in principe kleine acceptatietests.</p>
                        <h4>5.1.7 Acceptatie</h4>
                        <p>Ten slotte heeft Adwise nog een laatste review gedaan <a href="http://verslag.localhost/requirements.php">(Paragraaf 4.2)</a>. Hier zijn naast de verbeterpunten die te vinden zijn in <a href="http://verslag.localhost/fase1ombouwen.php">Paragraaf 5.2</a> geen verdere resultaten aan verbonden. Fase 1 is door Adwise goedgekeurd, de requirements van deze fase zijn werkend opgeleverd, waardoor er aan fase 2 kan worden begonnen. </p>
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

