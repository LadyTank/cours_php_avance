<?php
/**
 * Classe de Debug
 * @author Justine Périnel
 * @version 1
 */

class Debug
{

    /**
     * Méthode static de debug
     * @param any $mavariable 
     *
     */
    static function jedebug($mavariable)
    {
        echo "<br><small class=\"bg-warning text-white\">... var_dump </small><pre class=\"alert alert-warning w-75\">";
        var_dump($mavariable);
        echo "</pre>";
    }

    /**
     * Méthode static de debug
     * @param any $mavariable 
     *
     */
    static function jedebug2($mavariable)
    {
        echo "<br><small class=\"bg-success text-white\">... print_r </small><pre class=\"alert alert-success w-75\">";
        print_r($mavariable);
        echo "</pre>";
    }

    /**
     * Méthode static de debug
     * @param any $mavariable 
     *
     */
    static function debugetstop($mavariable)
    {
        echo "<br><small class=\"bg-danger text-white\">... var_dump </small><pre class=\"alert alert-danger w-75\">";
        print_r($mavariable);
        echo "</pre>";
        die();
    }

     /**
     *  Méthode static pour afficher un tableau
     * @param array $mavariable
     * 
     */
    static function afficherTableau($mavariable)
    {
        echo "<br><small class=\"bg-danger text-white\">... print_r </small><pre class=\"alert alert-danger w-75\">";
        print_r($mavariable);
        echo "</pre>";
    }

    /**
     * Méthode static pour afficher les propriétés d'un objet
     * @param object $monObjet 
     *
     */
    static function afficherProprietes($monObjet) {
        //prend un objet en paramètre et retourne un tableau associatif des propriétés
        echo "<br><small class=\"bg-success text-white\">... print_r </small><pre class=\"alert alert-success w-75\">";
        print_r(get_object_vars($monObjet));
        echo "</pre>";
    }


    

}
