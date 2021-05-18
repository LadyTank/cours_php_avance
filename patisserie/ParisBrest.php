<?php

class ParisBrest
{
    public function __construct()
    {
        echo "Le gateau est bien gras !";
    }

    public function cuire()
    {
        echo "Nous allons cuire le gâteau pendant $this->tempsDeCuisson minutes."; // ici on interpole la variable, on l'intègre à la chaîne de caractère ($this->tempsDeCuisson veut dire : dans ma classe il existe une propriété tempsDeCuisson). PHP va comprendre que dans cette chaîne il doit interroger une variable. 
        //Sans cela, il faudra concaténer et déclarer la variable avant la foction
    }

    /* Différence entre public private et protected */
    //public : accessible partout
    //private : accessible uniquement par la propriété elle-même / Peut être accessible par getters et setters
    //protected : accessible par les desncendants de la classe / par les héritiers

    /* PUBLIC PRIVATE ET PROTECTED */
    // public : accessible partout (ne protège pas les propriétés)
    // private : accessible uniquement par la propriété elle-même / Peut être accessible par getters et setters
    // protected : accessible par les descendants de la classe / par les héritiers / Peut être accessible par getters et setters
    ////////////////////// par défaut les function() sont public
    ////////////////////// souvent toutes les propriétés sont en private

    /* UTILISATION DES GETTERS ET DES SETTERS */
    // Permet de contrôler l'accès à la propriété
    // On les utilise pour des raisons d'architecture, pour protéger nos propriétés 
    // utiliser pour celles que l'on veut protéger sinon utilisation de $this->etc 

    /* CAMEL ET SNAKE CASE */
    // camel case : premier mot en minuscule et après toutes les premières lettres des mots suivants accrochées en majuscule
    // snake case : mots en minuscule séparés par des underscores
    // kebab case : mots séparés par un tiret ex: btn-success

    private $tempsDeCuisson = 60; // camel case
    private $temps_de_preparation = 120; // snake case
    private $formatBouton = 'btn-success'; // kebab case

}
