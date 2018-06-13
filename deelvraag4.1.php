
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
                        <h1>3.4.1 Normalisering </h1>

                        <p>Voor model training moet de API dus over genoeg referentiemateriaal beschikken.
                            De meeste gezichtsdetectie APIs normaliseren dit referentiemateriaal voorafgaand aan het detecteren.
                        </p>
                        <img src="images/afbeelding7">
                      <p>Adwise wil weten of dit process positief te beïnvloeden is. Hiervoor moet de afbeelding voorafgaand detecteren handmatig worden genormaliseerd. Op deze manier kan onderzocht worden of gezichten beter worden gedetecteerd als er voorafgaand normalisering is geweest. Dit omdat de afbeeldingen met en zonder voorafgaand normaliseren nu met elkaar kunnen worden vergeleken. Het normaliseren moet voorafgaand gebeuren, omdat achteraf de gezichten al zijn gedetecteerd, waarmee het effect niet meer kan worden onderzocht.
                      </p>
                        <p>In 2015 onderzochten Abhishree, Latha, Manikantan, en Ramachandran een voorbeeld van normalisering, hierbij spraken ze over:
                        </p>
                        <ul>
                            <li>Gabor filter
                            </li>
                        </ul>
                        <br>
                        <p>Een behoorlijk aantal wetenschappelijke scripties zijn gepubliceerd over het Gabor filter. Zo deden Bhuiyan en Hong Liu (2007) en Barbu (2010) onderzoek naar dit filter.
                        </p>
                        <h4>3.4.1.1 Gabor filters
                        </h4>
                        <p>Volgens Bhuiyan en Hong Liu bestaat dit filter uit een aantal ingewikkelde algoritmes, welke het mogelijk maken om te reageren op rand en textuur verandering.
                        </p>
                        <img src="images/afbeelding8">
                        <p>Naast het Gabor filter, was er voldoende informatie beschikbaar over de invloed van grijstinten. Kanan en Cottrell deden in 2012 onderzoek naar het effect van grijstinten op normalisering.
                        </p>
                        <h4>3.4.1.2 Grayscale filters
                        </h4>
                        <p>Volgens Kanan en Cottrell vereenvoudigen grijstinten algoritmes. In veel gevallen is kleur van beperkt nut en het introduceren van deze onnodige informatie kan de hoeveelheid trainingsgegevens verhogen die nodig zijn om goede prestaties te bereiken. Het algoritme werkt sneller als het minder stappen moet doorlopen, het verlagen van de benodigde trainingsgegevens versneld volgens Kanen en Cottrell het model trainen.
                        </p>
                        <p>Volgens Tanner Helland maken alle grijswaarden algoritmen gebruik van hetzelfde standaardproces:
                        </p>
                        <p><b>1: </b>De rode, groene en blauwe kleuren krijgen de waarde van een pixel. <br>

                        <b>2: </b>Gebruik wiskunde om die getallen om te zetten naar enkele grijswaarde. <br>
                        <b>3: </b>Uit onderzoek van Tanner komt de volgende grijstint algoritmen als beste naar voren:
                        </p>
                        <ul>
                            <li>BT.709 Grijs = (Rood * 0.2126 + Groen * 0.7152 + blauw * 0.0722)

                            </li>
                        </ul>
                        <h4><br>3.4.1.3 Voor-en nadelen preprocessing
                        </h4>
                        <img src="images/tabel10.png">

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