<?php 

require('../class/Debug.php');

require('class/Autoloader.php');
Autoloader::register();
$vehicule = new Vehicule("4", "250", "peugeot", "trop");


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
        <h1 class="display-4">POO - Programmation Orientée Objet</h1>
        <p class="lead">PHP avancé</p>
    </div><!-- fin jumbotron -->

    <div class="container">

        <?php 

        echo($vehicule->unVehicule());
        Debug::monDebug($vehicule);

        ?>

    </div><!-- fin container principal -->
</body>
</html>