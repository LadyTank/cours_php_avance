<?php

class Vehicule{

    
    public $nombre_roue;
    public $vitesse_max;
    public $marque;
    public $bruit;

    //déclaration d'une méthode
    public function __construct($nombre_roue, $vitesse_max, $marque, $bruit) {

        $this->nombre_roue = $nombre_roue;
        $this->vitesse_max = $vitesse_max;
        $this->marque = $marque;
        $this->bruit = $bruit;
    }

    public function unVehicule(){
        return "<p>Bonjour, ce véhicule contient <span class=\"text-info\">$this->nombre_roue</span> roues, a une vitesse maximum de <span class=\"text-info\">$this->vitesse_max</span> km/h, est de marque <span class=\"text-info\">$this->marque</span> et fait <span class=\"text-info\">$this->bruit</span> de bruit.</p>";
    }

}

//code de Mathieu
// class Vehicule {


//     public int $nombre_roue;
//     public int $vitesse_max;
//     public string $marque;
//     public string $bruit;

//     public function __construct($nombre_roue, $vitesse_max, $marque, $bruit)
//     {

//         $this->nombre_roue = $nombre_roue;
//         $this->vitesse_max = $vitesse_max;
//         $this->marque = $marque;
//         $this->bruit = $bruit;
        
//     }

//     public function demarrage(){
//         return $this->bruit;
//     }

//     public function rouler(){
//         return strtoupper($this->bruit);
//     }
// }