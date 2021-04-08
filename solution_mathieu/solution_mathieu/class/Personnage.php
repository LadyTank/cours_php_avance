<?php
class Personnage
{
    public $nom;
    public $pdv;
    public $attaque;

    public function __construct($nom, $pdv, $attaque)
    {
        $this->nom = $nom;
        $this->pdv = $pdv;
        $this->attaque = $attaque;
    }

    public function set_pdv($pdv){
        $this->pdv = $pdv;
    }
    public function get_pdv(){
        return $this->pdv;
    }

    public function set_attaque($attaque){
        $this->attaque = $attaque;
    }
    public function get_attaque(){
        return $this->attaque;
    }



    // renvoie la valeur de l'attaque
    public function attaquerQuelquUn()
    {   
        return $this->get_attaque();
    }

    // soustrait l'attque aux point de vie
    public function seFaireAttaquer($valeur_dommages)
    {
        $this->set_pdv( $this->get_pdv() - $valeur_dommages);
    }

    // bonus
    // renvoie la valeur de l'attaque
    // prend une valeur de jet de dés
    // public function attaquerQuelquUn($lancer_de_des)
    // {   
    //     $bonus = ($lancer_de_des * 100) / 1000;
    //     return $this->get_attaque() * $bonus;
    // }

    // // soustrait l'attque aux point de vie
    // public function seFaireAttaquer($valeur_dommages)
    // {
    //     $this->set_pdv( $this->get_pdv() - $valeur_dommages);
    // }
}
