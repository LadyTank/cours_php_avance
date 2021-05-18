<?php

use Outils\Debug;

require('../class/Autoloader.php');
Autoloader::register();

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
        <h1 class="display-4">Class - PDO</h1>
        <!-- <p class="lead">PHP avancé</p> -->
    </div><!-- fin jumbotron -->

    <div class="container">

        <?php

        //requête SELECT
        $mypdo = new myPDO('mysql:host=localhost;dbname=entreprise', 'root', '');
        // $request = $mypdo->requeteSelect( "SELECT * FROM employes");
        $requete = $mypdo->requeteSelect("employes");
        Debug::afficherTableau($requete);

        //requête UPDATE
        //Debug::afficherTableau($request);
        //$requestUpdate = $mypdo->requeteUpdate("UPDATE employes SET prenom = 'Jean-mi' WHERE id_employes = 350 ");
        // $requeteUpdate = $mypdo->requeteUpdate('employes',['prenom' => 'Jean-Mi'], 'id_employes', 350);

        //requête DELETE
        // $requestDelete = $mypdo->requeteDelete("DELETE FROM employes WHERE id_employes = 998 ");
        // Debug::afficherTableau($request);
        //$requeteUpdate = $mypdo->requeteDelete('employes', 'id_employes', 997);

        //requête INSERT 
        // $requestInsert = $mypdo->requeteInsert( " INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Julie', 'Sanches', 'f', 'secretariat', NOW(), 2000) " );
        // Debug::afficherTableau($request);
        //$requeteInsert = $mypdo->requeteInsert('employes', ['prenom' => 'Justine', 'nom' => 'Périnel', 'sexe' => 'f', 'service'=> 'informatique', 'date_embauche' => '2021-04-12', 'salaire' => '4000']);

        ?>


    </div><!-- fin container principal -->
</body>

</html>