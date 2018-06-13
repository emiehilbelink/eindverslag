
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
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">3.4 Deelvraag 4: Hoe kan model training worden gerealiseerd?
            </h2>
            <p>Voordat het daadwerkelijk prototype kan worden gerealiseerd moet het model eerst getraind worden: fase 1 uit dit onderzoek.De API kan getraind worden door het toevoegen van voldoende referentiemateriaal.  Bij het ontbreken van referentiemateriaal kan er geen correcte gezichtsherkenning plaatsvinden. Hoe meer referentiemateriaal, hoe beter de API de personen kan onderscheiden.
            </p>
            <p>Om een beeld hiervan te scheppen wordt het volgende voorbeeld gegeven:
            </p>

            <p>Je krijgt drie foto’s van drie verschillende personen, welke veel op elkaar lijken. Vervolgens worden de foto’s weggehaald en komen de drie personen voor je staan. Probeer nu maar met 100% zekerheid te zeggen wie wie is. Op het moment dat er 10 foto’s per persoon beschikbaar worden gesteld, heb je meer referentiemateriaal waardoor verschillen beter zichtbaar worden. Het wordt nu makkelijker de juiste naam te koppelen aan de juiste persoon. Hoe beter je getraind bent, hoe beter de herkenning gaat.
            </p>
            <div class="row animate-box" data-animate-effect="fadeInLeft">
                <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                    <a href="deelvraag4.1.php">
                        <img src="images/work_1.jpg"  class="img-responsive">
                        <h3 class="fh5co-work-title">Normalisering</h3>

                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                    <a href="deelvraag4.2.php">
                        <img src="images/work_2.jpg" class="img-responsive">
                        <h3 class="fh5co-work-title">Dataopslag</h3>
                    </a>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                    <a href="deelvraag4.3.php">
                        <img src="images/work_3.jpg"  class="img-responsive">
                        <h3 class="fh5co-work-title">Programmeertalen</h3>
                    </a>
                </div>

                <div class="clearfix visible-md-block"></div>

            </div>
        </div>







        <div class="fh5co-counters" style="background-image: url(images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
            <div class="fh5co-narrow-content animate-box">
                <div class="row" >
                    <div class="col-md-6 text-center">
                        <span class="fh5co-counter js-counter" data-from="0" data-to="2" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Completed Projects</span>
                    </div>
                    <div class="col-md-6 text-center">
                        <span class="fh5co-counter js-counter" data-from="0" data-to="27232" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Line of Codes</span>
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
 * Date: 13/05/2018
 * Time: 15:15
 */