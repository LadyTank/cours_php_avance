<?php

namespace Debugage;

/**
 * Class de débug
 * @author KSVaz 
 * @version 1.0
 */

class Debug {

    //les caractères suivants (/** */) permet de saisir de la doc. Ici, cette doc apparait sur emmet au survol de la fonction monDebug ligne 11
    //on préfère inclure de la doc pour chaque méthode créée
    
    //ici, "@param any $truc_a_debugge" signifie que cette variable peut être n'importe quoi

    //"@return object" signifie que la fonction retournera un objet (on peut y indiquer toutes les sortes de données : string, int, object...)

    /**
     * Méthode static de débug
     * @param any $truc_a_debugge
     *
     */
    static function monDebug($truc_a_debugge){

        echo "<br><small class=\"bg-info\">... var_dump </small><pre class=\"alert alert-info w-75\">";
        var_dump($truc_a_debugge);
        echo "</pre>";
    }

    /**
     * Méthode static de débug
     * @param array $truc_a_debugge
     *
     */

    static function afficherTableau($truc_a_debugge){

        echo "<small class=\"bg-warning p-2\">print_r :</small><pre class=\"alert alert-warning w-75\">";
        print_r($truc_a_debugge);
        echo "</pre>";
    }

    //méthode pour stopper le script

    /**
     * Méthode static de débug avec arrêt du script
     * @param any $truc_a_debugge
     *
     */
    static function monDebugStop($truc_a_debugge) {

        echo "<br><small class=\"bg-info\">... var_dump </small><pre class=\"alert alert-info w-75\">";
        var_dump($truc_a_debugge);
        echo "</pre>";
        die(); 
    }

    //méthode pour retourner un tableau associatif des propriétés

    /**
     * Méthode static pour afficher les propriétés d'un objet
     * @param array $monObjet
     *
     */
    static function afficherPropriete($monObjet) {

        echo "<br><small class=\"bg-info\">... var_dump </small><pre class=\"alert alert-info w-75\">";
        print_r(get_object_vars($monObjet));
        echo "</pre>";
    }


}