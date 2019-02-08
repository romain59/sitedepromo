<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">


    <title>Contacts | Up To Fourmies</title>

    <link rel="stylesheet" href="Contacts.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="promo.css" type="text/css">
    <link rel="stylesheet" href="styleFooter.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<header id="retour">

    <nav class="navbar navbar-expand-lg" style="background-color: #29898F

">

        <a class="navbar-brand" href="index.html"><img src="image/logo_ecn.jpg" width="150" alt="Logo"></a>

        <button class="navbar-toggler" type="button" style="background-color: white" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

           <span id="color365" class="navbar-toggler-icon" style="color: #29898F

">-</span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="nav navbar-nav ml-auto">

                <li class="nav-item active">

                    <a class="nav-link btn btn-light mr-5 bouton11" href="index.html">Accueil</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link btn btn-light  mr-5 bouton11" href="Formation.html">Formation</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link btn btn-light mr-5 bouton11" href="Promo.html">Promotion</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link btn btn-light mr-5 bouton11" href="Candidater.html">Postuler</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link btn btn-light mr-5 bouton11" href="Actualite.html">Actualités</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link btn btn-light mr-5 bouton11" href="Contacts.php">Contacts</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link btn btn-light mr-5 bouton11" href="Remerciements.html">Remerciements</a>

                </li>
            </ul>

        </div>

    </nav>
</header>

<div class="container-fluid" id="groupe">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="container-titre">
                <div class="row">
                    <h1><i>#</i> CONTACTS </h1>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mb-5">
    <div class="row">

        <div class="col-sm-3 mb-4"></div>

        <!-- Div Titre Nous Contacter-->
        <div class="col-sm-6 text-center mb-4 mt-2 programme">

            <h2 class="color">NOUS CONTACTER</h2>

        </div>

        <div class="col-sm-3 mb-4"></div>

    </div>
</div>
<?php

if (empty($_POST['Nom']) && empty($_POST['emai1']) && empty($_POST['msg'])) {

    echo '<form class="col-sm-6" id="formulaire" method="post" action="Contacts.php">

    <div class="form-group">
        <label for="Nom">Nom et Prénom</label>
            <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Entrer ici votre nom et prénom">
        <label for="emai1">Adresse Email</label>
            <input type="email" class="form-control" id="emai1" name="emai1" placeholder="Entrer ici votre adresse mail">

        <label for="Objet">Objet</label>
            <input type="text" class="form-control" id="Objet" name="Objet" placeholder="Entrer ici l\'objet de votre message">
        <label for="msg" >Message</label>
            <textarea id="msg" name="msg" class="form-control" rows="3" placeholder="Entrer ici votre message"></textarea>

        <div class="col-sm-2" id="boutonEnvoi">
            <input type="submit" class="btn btn-primary" id="envoi" value="Envoyer">
        </div>
    </div>

</form>';
} else {
    require_once 'eMail.php';
    $mel = new eMail();
    $mel->nom($_POST['Nom']);
    $mel->destinataire($mel->expediteur());
    $mel->sujet($_POST['Objet']);
    $mel->message($_POST['msg']);
    echo '<p align="center">' . $mel->envoi(true) . '</p>';
}
?>

<hr class="separator3">

<div class="container mb-5">
    <div class="row">

        <div class="col-sm-3 mb-4"></div>

        <!-- Div Titre Nos Renseignements -->
        <div class="col-sm-6 text-center mb-4 mt-2 programme">

            <h2 class="color">NOS RENSEIGNEMENTS</h2>

        </div>

        <div class="col-sm-3 mb-4"></div>

    </div>
</div>

<div class="container" id="renseignements">

    <div id="contacter" class="row justify-content-center">

        <div id="adresse" class="col-sm-4"><h5><b>FACE Thierache</b></h5>
            <p>Siège sociale : Face Thiérache</p>
            <p> 2 Rue du Général Raymond Chomel</p>
            <p> 59610 FOURMIES</p>
            <p> Du lundi au vendredi de 9h à 17h </p>
            <p>Tel: 03 27 57 55 17 </p>
            <p> mail: contact@facethierache.fr</p>
        </div>

        <div class="col-sm-4 text-center" id="adresse2">
            <h5><b>UP TO FOURMIES</b></h5>
            <p>UpToFourmies </p>
            <p> 5 rue Arlette Corrente</p>
            <p> 59610 Fourmies</p>
        </div>

        <div id="map" class="col-sm-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.4942521083353!2d4.029901115636413!3d50.02083387941851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2747b555b139b%3A0x5a4cc7aaeb54bcc6!2s2+Rue+du+G%C3%A9n%C3%A9ral+Raymond+Chomel%2C+59610+Fourmies!5e0!3m2!1sfr!2sfr!4v1544432954053"
                    width="300" height="300" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
</div>

<footer>
    <div class="col-12" id="boutonRetour">
        <a href="#retour"><img src="image/b-up.png" alt="Bouton Retour" class="boutonRetour"></a>
    </div>
    <div class="containerFooter">
        <div class="row">
            <div class="col-sm-5">
                <img id="logoFup" src="image/logo_ecn.jpg" alt="Logo Fup">
            </div>
            <div class="col-sm-2">
                <a href="#"><span id="contactFooter" class="btn btn-default btn-lg btn-block">Contactez-nous!</span></a>
            </div>
            <div class="col-sm-5">
                <img id="logoFace" src="image/logoface.jpg" alt="Logo Face">
            </div>
            <div class="row" id="mentionlegale">
                <div class="col-12">© Copyright 2018 - UP TO FOURMIES - Tous droits réservés.</div>
                <div class="col-12">Site réalisé par la promotion number 1 d'Up To Fourmies.</div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>