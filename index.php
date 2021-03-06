<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil| Up To Fourmies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.css" rel="stylesheet"/>
    <link href="Accueil.css" rel="stylesheet"/>
    <link href="promo.css" rel="stylesheet"/>
    <link href="styleFooter.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="header.js"></script>
</head>
<body>

<?php include "header.php";?>


<!--<div id="simpleModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <div class="closeBtn" onclick="closeModal()">&times;</div>
        </div>
        <div class="modal-body">
            <p>Bienvenue sur notre site ! </p>
            <p>Bienvenue sur le site de la formation UP TO Fourmies ! Nous vous souhaitons une bonne visite et n'hésitez pas à nous contacter pour toute demande d'information complémentaire :) </p>
        </div>
        <div class="modal-footer">
            <h3> UP TO Formation</h3>
        </div>
    </div>
</div> -->


<!-- photo de groupe -->

<div class="container-fluid" id="groupe">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="container-groupe">
                <div class="row">
                    <h1><i>#</i> UP TO <BR><BR> PROMOTION 2018/2019</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="partages">
                <span class="twitter-share" data-js="twitter-share"><img src="image/twitter.png" height="60"
                                                                         width="60"/></span>

    <span class="facebook-share" data-js="facebook-share"><img src="image/facebook.png" height="60"
                                                               width="60"/></span>
</div>

<hr class="separator mb-5">


<!-- PRESENTATION -->

<div class="container">
    <div class="section-title-area">
        <h2 class="section-title">PRESENTATION</h2>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="container-presentation">Portée par FACE Thiérache, club d'entreprises situé à Fourmies, l'école du numérique <strong>"Up To"</strong>, labellisée Grande École du Numérique par l'Etat est ouverte depuis le 1er octobre 2018 <br><br>
                <strong>Up To</strong> intègre le réseau des fabriques du numérique de Simplon <br><br>
                <strong>Up To</strong> véhicule des valeurs de solidarité, d'entraide dans une démarche inclusive <br><br>
                L'objectif est de former des talents aux métiers du numérique et de répondre aux nouveaux besoins de compétences des entreprises<br><br>
                <strong>Up To</strong> est  parrainée par l'entreprise <i>Comm'uniq</i> de Fourmies<br><br>
                Une aventure humaine, intensive, gratuite et accessible à toutes et à tous sans condition de diplôme <br><br>
                Une formation dont la sélection se fait sur la motivation et l’envie de travailler en équipe <br><br>



            </div>
        </div>
    </div>
</div>

<hr class="separator mb-5">

<!-- PARTENARIAT -->

<div class="container">
    <div class="section-title-area">
        <h2 class="section-title">Nos Partenaires</h2>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="container-partenariats"></div>
        </div>
    </div>
</div>

<hr class="separator mb-5">

<!-- Chiffres -->

<div class="container">
    <div class="section-title-area">
        <h2 class="section-title">Quelques Chiffres</h2>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="container-chiffres"></div>
        </div>
    </div>
</div>

<!-- Compteurs -->

<section id="compteur">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="counter_item">
                    <div class="counter__number">
                        <span class="n counter">1</span>
                    </div>
                    <div class="counter_title">Promo</div>
                </div>
            </div>


            <div class="col-sm-6 col-md-3">
                <div class="counter_item">
                    <div class="counter__number">
                        <span class="n counter">20</span>
                    </div>
                    <div class="counter_title">Personnes formées</div>
                </div>
            </div>


            <div class="col-sm-6 col-md-3">
                <div class="counter_item">
                    <div class="counter__number">

                        <span class="n counter">Objectif 100 %</span>

                    </div>
                    <div class="counter_title"> de réussite</div>
                </div>
            </div>


            <div class="col-sm-6 col-md-3">
                <div class="counter_item">
                    <div class="counter__number">
                        <span class="n counter">8</span>
                    </div>
                    <div class="counter_title">Structures partenaires</div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- footer -->

<footer>
    <div class="col-12" id="boutonRetour" >

        <a href="#retour"><img src="image/b-up.png" width="40" alt="image fleche vers le haut"></a>

    </div>
    <div class="containerFooter">
        <div class="row">
            <div class="col-sm-5">

                <img id="logoFup" src="image/logo_ecn.jpg" height="100" alt="logo up to">

            </div>
            <div class="col-sm-2">
                <a href="Contacts.php"> <button id="contactFooter" type="button" class="btn btn-default btn-lg btn-block">Contactez-nous!</button></a>
            </div>
            <div class="col-sm-5">

                <img id="logoFace" src="image/logoface.jpg" height="100" alt="logo face thierache" >

            </div>
            <div class="row" id="mentionlegale">
                <div class="col-12">© Copyright 2018 - UP TO Fourmies - Tous droits réservés.</div>
                <div class="col-12">Site réalisé par la promotion number 1 d'Up To Fourmies.</div>
            </div>
        </div>
    </div>
</footer>

<!-- SCRIPT -->

<script type="text/javascript" src="responsive.js"></script>
<script src="Accueil.js"></script>

</body>
</html>