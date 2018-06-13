
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
                        <h1>3.2 Deelvraag 2: Hoe werkt gezichtsherkenning?</h1>
                        <h4>3.2.1 Gezichtsdetectie</h4>
                        <p>Uit onderzoek (Qi, z.j) blijkt dat de eerste stap van gezichtsherkenning, gezichtsdetectie is. Deze techniek herkent wanneer er een gezicht in beeld is. Op moment van detecteren worden gezichten gemarkeerd met vierkanten. Vervolgens wordt er een analyse gedaan waarbij gezichtskenmerken zoals neus, ogen, en mond apart worden gemarkeerd (Microsoft, 2017).
                        </p>
                        <img src="images/afbeelding3.png"><br>
                        <img src="images/afbeelding4.png">

                        <h4>3.2.2 Gezichtsherkenning</h4>
                      <p>Qi (z.j) concludeert dat de tweede stap het herkennen van het gezicht is. Gezichtsherkenningssoftware onderzoekt kenmerken van het gezicht van een persoon in een poging om een persoon uniek te onderscheiden van alle anderen. Deze unieke kenmerken noemen we: biometrische gezichtskenmerken (Wetenschap infonu, z.j.). Voorbeelden van deze kenmerken zijn:
                      </p>
                        <ul>
                           <li>Breedte van de mond</li>
                            <li>afstand tussen de oren
                            </li>
                            <li>afstand tussen de ogen
                            </li>
                            <li>diepte van de oogkassen
                            </li>
                            <li>dikte van de lippen
                            </li>
                            <li>breedte van de neus
                            </li>
                        </ul>
                        <br>
                        <p>Uit onderzoek Wetenschap infonu (z.j), SRI (2012) en Chao (z.j.)) blijkt dat om gebruik te maken van gezichtsherkenning, eerst een database gevuld dient te worden met referentiemateriaal. Wetenschappers infonu (z.j), SRI (2012) en Chao (z.j.) stellen vast dat aan de hand van de volgende vier stappen het referentiemateriaal klaargemaakt en opgeslagen wordt.
                        </p>
                        <p> <b>1. Input leveren: </b>de computer bekijkt met behulp van een algoritme of er een gezicht op de aangeleverde afbeelding te vinden is.</p>
                        <p> <b>2. Normalisatie: </b>de computer gaat het beeld normaliseren, dit kan betekenen dat kleuren aangepast moeten worden, of dat de afbeelding gedraaid moet worden.
                        </p>
                        <p><b>3. Onttrekken van kenmerken: </b>de unieke kenmerken worden als informatie uit het gezicht gehaald.
                        </p>
                        <p><b>4. Het sjabloon (template) maken: </b>de laatste stap is het maken van een template uit de gegevens van stap 3 met behulp van een algoritme.</p>
                        <img src="images/afbeelding5.png"><br>
                        <p><b> De herkenning:</b></p>
                        <p>Aan de hand van machine learning* controleert de API of het gezicht overeenkomt met een al eerder gemaakte sjabloon. Mocht dit het geval zijn, dan spreken we over gezichtsherkenning.
                        </p>
                        <i>“Machine learning komt in principe neer op het vermogen om zich aan te passen aan nieuwe situaties. Iedere situatie brengt informatie voort en machine learning wordt gebruikt om hier patronen in te ontdekken en te gebruiken. “</i>
                        <p><i>- Maessen (2015)
                            </i></p>
                        <img src="images/afbeelding6.png">
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