<?php 

//Une classe va servir à organiser/hiérarchiser le code. Une class va être comme un sac avec des propriétés et des méthodes (données et fonctions).
//ici on déclare une class Humain
class Humain{

    //déclaration des variables noms ayant un statut "public" donc à portée globale (disponible sur tout le code). 
    // les autres statuts : "private" et "protected"
    public $nom;
    public $prenom;
    public $dateNaissance;

    //déclaration d'une méthode
    public function __construct($nom, $prenom, $dateNaissance, $profession) {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->profession = $profession;
    }
    //La fonction va se lancer quand on lancera $moi = new Humain($nom, $prenom, $dateNaissance);

    public function sePresenter() {
        return "<p>Bonjour, je suis $this->prenom et je suis $this->profession.</p>";
    }

    //la méthode va pouvoir passer les données à l'objet

    //autre mot clé pour les méthodes des objets "static". Particularité : ellles peuvent être appelée sans que l'objet ne soit instancié 

    static function direBonjour(){
        return "<br>Bonjour</br>";
    }
}

//Une classe peut hériter d'une autre classe cf. Professionnel.php