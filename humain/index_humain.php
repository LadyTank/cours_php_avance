<?php 

require('../class/Debug.php');

require('class/Autoloader.php');
Autoloader::register();

$moi = new Humain("Semedo", "Katia", "1989-06-18", "Développeuse web");

?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>POO - PHP Orienté Objet</title>
</head>
<body>

    <div class="jumbotron">
        <h1 class="display-4">Class - Humain</h1>
        <!-- <p class="lead">PHP avancé</p> -->
    </div><!-- fin jumbotron -->

    <div class="container">

        <?php 
        
        Debug::monDebug($moi);
        Debug::afficherTableau($moi);
        Debug::afficherPropriete($moi);
        // jevar_dump($moi->nom);
        // jevar_dump($moi->prenom);
        // jevar_dump($moi->dateNaissance);
        // jevar_dump($moi->profession);

        echo($moi->sePresenter());
        
        //autre mot clé pour les méthodes des objets "static". 
        echo ($moi->direBonjour());

        //Particularité : ellles peuvent être appelées sans que l'objet ne soit instancié 
        echo(Professionnel::direBonjour());

        //les méthodes static n'ont du coup pas accès à $this ou aux méthodes propriété de la classe

        $salutation = $moi->sePresenter();
        echo($salutation);

        ?>

      
            
    </div><!-- fin container principal -->
</body>
</html>