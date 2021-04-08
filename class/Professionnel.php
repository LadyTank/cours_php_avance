<?php

class Professionnel extends Humain{ //la class Professionnelle hérite des variables et méthodes de ma class Humain
    public $profession;

    public function __construct($nom, $prenom, $dateNaissance, $profession)
    {

        parent::__construct($nom, $prenom, $dateNaissance, $profession); //fait référence à Humain, on lui passe les valeur de façon static. Donc Humain a seulement accès à Humain et pas à professionnel
        $this->profession = $profession;
        
    }

    public function sePresenter() {
        return "<p>Bonjour, je suis $this->prenom et je suis $this->profession.</p>";
    }

    //NB : écrire une méthode qui existe déjà dans la class parent c'est un surchargement ou un overloading
}