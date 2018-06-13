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
                        <h1>3.4.2 Dataopslag </h1>
                        <p>Nadat er mogelijk een filter is toegepast op het referentiemateriaal, wordt deze naar de detectie API (server) gestuurd. De tweede stap is het opslaan van deze response buiten de servers om. Op deze manier zijn de APIs alleen makkelijke interfaces om tegenaan te praten en behouden ze zelf geen data. </p>
                        <p>De nog te nader bepalen vorm van dataopslag bevat naast de response ook overige data. Het gescheiden houden van deze data geeft een stuk zekerheid, bij een hack in de API voorkom je dat persoonlijke gegevens openbaar worden. Daarnaast beschik je over een eigen back-up, waardoor er makkelijker veranderd kan worden tussen servers. De enige informatie die de APIs uiteindelijk mogen bevatten is het referentiemateriaal en de bijbehorende namen. Op deze manier kan er een correcte herkenning plaatsvinden, zonder dat de APIs over overige persoonlijke informatie beschikt. </p>
                        <p>Voor het kiezen van dataopslag wordt zowel een file based systeem als een online database behandeld. Volgens W3Schools is MySQL het populairste databasesysteem. Naast deze database wordt MSSQL, de database van Microsoft behandeld, dit omdat de API van Microsoft gebruikt wordt. De volgende drie mogelijkheden van dataopslag worden behandeld:
                        </p>
                        <ul>
                            <li>file-based JSON
                            </li>
                            <li>MySQL</li>
                            <li>MSSQL</li>
                        </ul>
                        <br>
                       <p>Voor extra informatie over de drie vormen van dataopslag zie Bijlage E.
                       </p>
                        <h4><br>3.4.2.1 Vergelijking en keuze
                        </h4>
                        <img src="images/tabel14.png">
                        <img src="images/tabel15.png">
                        <p>Uit bovenstaande tabel is op de maken dat File-based het beste voldoet aan de vooropgestelde eisen. Voor extra informatie over deze keuze zie Bijlage F.</p>

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