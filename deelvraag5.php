
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
            <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">3.5 Deelvraag 5: Hoe kan het protoype worden gerealiseerd?
            </h2>

            <p>Als het model getraind is, kan het prototype worden gerealiseerd, fase 2 in dit onderzoek.</p>
            <p>De cliënt (monitor met camera) stuurt een request naar de server(API), welke bij het voldoen van gezichtsherkenning een response teruggeeft. De response wordt gebruikt om een  request in de file-based data te kunnen uitvoeren. De response vanuit dit request wordt verstuurd naar de cliënt (monitor).
            </p>
            <img src="images/afbeelding10.png" style="margin-left: 30%;">
            <p>In afbeelding 10 is het normaliseren van de afbeelding buiten beschouwing gehouden. Echter laten de nog nader te bepalen resultaten zien dat het normaliseren van afbeeldingen voorafgaand de detectie een positief effect heeft, wordt dit opgenomen in fase 2.
            </p>
            <p>Bij het realiseren van het prototype komen twee nieuwe aspecten kijken: kiezen van de juiste camera en het maken van gepersonaliseerde begroetingen.
            </p>
            <div class="row animate-box" data-animate-effect="fadeInLeft">
                <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                    <a href="deelvraag5.1.php">
                        <img src="images/work_1.jpg"  class="img-responsive">
                        <h3 class="fh5co-work-title">Camera</h3>

                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                    <a href="deelvraag5.2.php">
                        <img src="images/work_2.jpg" class="img-responsive">
                        <h3 class="fh5co-work-title">Interessante interface</h3>
                    </a>
                </div>


                <div class="clearfix visible-md-block"></div>
                <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                    <a href="deelvraag5.3.php">
                        <img src="images/work_2.jpg" class="img-responsive">
                        <h3 class="fh5co-work-title">Gepersonaliseerde berichten</h3>
                    </a>
                </div>

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