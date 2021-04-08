<?php

class Personnage{

    public $nomPerso; 
    public $stats;
    public $pointsDeVie;

    public function __construct($nomPerso,$stats,$pointsDeVie) {
        $this->nomPerso = $nomPerso;
        $this->stats = $stats;
        $this->pointsDeVie = $pointsDeVie;
    }

    public function seFaireAttaquer($stats){
        $this->pointsDeVie = $this->pointsDeVie - $stats;
    }

}