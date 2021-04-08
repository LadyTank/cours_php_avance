<?php 

require('class/Humain.php');
require('class/Professionnel.php');
require('class/Vehicule.php');
require('class/Personnage.php');
require('inc/functions.php');

$moi = new Humain("Semedo", "Katia", "1989-06-18", "Développeuse web");
$vehicule = new Vehicule("4", "250", "peugeot", "trop");
$perso1 = new Personnage("Nono", "1", "5");
$perso2 = new Personnage("Gigi", "1", "3");

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

        <div>
            <h2><span>I.</span> Les classes</h2>
            <p>Permettent d'organiser et hiérarchiser son code. Une classe va être comme un sac contenant des propriétés et des méthodes (données et fonctions).</p>
            <p>"__construct" est une fonction qui va se lancer</p>
        </div>

        <?php 
        
        jevar_dump($moi);
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

        echo($vehicule->unVehicule());

        ?>

        <div>
            <h2><span>II.</span> Exercice</h2>

            <div class="mx-auto my-5 p-4 w-50 alert alert-warning">
                <?php

                    $tour = 0;
                    while($perso2->pointsDeVie > 0 && $perso1->pointsDeVie > 0) {
                        $tour++;
                        echo "<strong>Tour numéro $tour <br></strong>";
                        $perso1->seFaireAttaquer($perso2->stats);
                        echo " - Il reste $perso1->pointsDeVie vies à $perso1->nomPerso<br>";
                        $perso2->seFaireAttaquer($perso1->stats);
                        echo " - Il reste $perso2->pointsDeVie vies à $perso2->nomPerso<br><br>";
                        // $perso2->seFaireAttaquer($valeur_dommages);
                        if ($perso1->pointsDeVie <= 0 ){
                            echo "<p class=\"alert alert-danger mx-auto w-75 text-center\">$perso1->nomPerso n'a plus de vie ! Game Over</p>";
                        } else if ($perso2->pointsDeVie <= 0 ){
                            echo "<p class=\"alert alert-danger mx-auto w-75 text-center\">$perso2->nomPerso n'a plus de vie ! Game Over</p>";
                        }
                    }

                ?>
            </div><!-- fin exercice -->

            <p>Généralement quand on va avoir besoin de récupérer ou modifier une valeur dans un objet on va avoir un système de méthode appelé "getter/setter" getters pour les méthodes qui vont retourner une valeur et setters pour celle qui vont les changer.</p>
            <p>Ici, la classe Personnage avec des getters/setters vides : <br>
                <code> class Personnage{</code><br>
                <code>public $nom;</code><br>
                <code>public $pdv;</code><br>
                <code>public $attaque;</code><br>
                <code>public function __construct($nom, $pdv, $attaque){</code><br>
                <code>$this->nom = $nom;</code><br>
                <code>$this->pdv = $pdv;</code><br>
                <code>$this->attaque = $attaque;</code><br>
                <code>}</code><br>
                <code>public function set_pdv(){}</code><br>
                <code>public function get_pdv(){}</code><br>
                <code>public function set_attaque(){}</code><br>
                <code>public function get_attaque(){}</code><br>
                <code>}</code>
            
            </p>

            <p>Les méthodes <code>get_</code> retournent la donnée <code>get_pdv</code> qui retourne les pdv</p>
            <p>Les méthodes <code>set_</code> modifie :<br>

                <code>public function set_pdv($pdv){</code><br>
                <code>$this->pdv = $pdv;</code><br>
                <code>}</code><br>
                <code>public function get_pdv(){</code><br>
                <code>return $this->pdv;</code><br>
                <code>}</code>
            </p>

            <p>On peut alors changer la méthode <code>seFaireAttaquer()</code> :<br>
                <code>public function seFaireAttaquer($valeur_dommages)</code><br>
                <code>{</code><br>
                <code>$this->set_pdv( $this->get_pdv() - $valeur_dommages);</code><br>
                <code>}</code>
            </p>

            <p>Ajout des getters/setters pour <code>attaque()</code> : <br>
                <code>public function set_attaque($attaque){</code><br>
                <code>$this->attaque = $attaque;</code><br>
                <code>}</code><br>
                <code>public function get_attaque(){</code><br>
                <code>return $this->attaque;</code><br>
                <code>}</code><br>
                <code>// renvoie la valeur de l'attaque public function attaquerQuelquUn( {</code><br>
                <code>return $this->get_attaque();</code><br>  
                <code>}</code>
            </p>


        </div><!-- fin exo -->
    </div><!-- fin container principal -->
</body>
</html>