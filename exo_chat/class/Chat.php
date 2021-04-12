<?php

class Chat
{

    //initialisation des propriétés. Ici privées.
    private ?string $prenom; //?string permet de s'assurer que la variable contienne une string ( = isset -> assure-toi que la valeur soit bien une string)
    private ?int $age; // ?int permet de s'assurer que la variable contienne un integer
    private ?string $couleur;
    private ?string $sexe;
    private ?string $race;


    public function __construct($prenom, $age, $couleur, $sexe, $race)
    {
        $this->set_prenom($prenom);
        $this->set_age($age);
        $this->set_couleur($couleur);
        $this->set_sexe($sexe);
        $this->set_race($race);
    }

    private function set_prenom($prenom) // set_prenom et __prenom = même chose
    {
        // le nom doit être une chaine
        // entre 3 et 20 caractères
        if (
            is_string($prenom) && //si la valeur est une string
            strlen($prenom) <= 20 && // et si la valeur est inférieure ou égale à 20
            strlen($prenom) >= 3 // et si la valeur est supérieure ou égale à 3
        ) {
            $this->prenom = $prenom; //si les conditions sont remplies, on affecte la valeur de $prenom à prenom. prenom étant une sorte de 'boîte' contenant la variable $prenom
        } else {
            // permet de lever une exception php ( Lance un message d'erreur )
            throw new Exception ("la propieter prenom est invalide"); //sinon, on lance le message d'erreur
        }
    }
    public function get_prenom(){ //get_prenom = récupération de la valeur de prenom
        return $this->prenom; // affiche le résultat sur la page
    }


    private function set_age($age)
    {
        // age doit etre un int
        // et faire moins de 30
        if (
            is_int($age) &&
            $age < 30

        ) {
            $this->age = $age;
        } else {
            throw new Exception ("la proprieté age est invalide");
        }
    }
    public function get_age(){
        return $this->age;
    }


    private function set_couleur($couleur)
    {
        // même idée que pour prenom
        if (
            is_string($couleur) &&
            strlen($couleur) <= 10 &&
            strlen($couleur) >= 3
        ) {
            $this->couleur = $couleur;
        } else {
            throw new Exception ("la proprieté couleur est invalide");
        }
    }
    public function get_couleur(){
        return $this->couleur;
    }


    private function set_sexe($sexe)
    {
        // le sexe ne peut etre que male ou femelle
        if ($sexe === "male" || $sexe === "femelle") {
            $this->sexe = $sexe;
        } else {
            throw new Exception ("la proprieté sexe est invalide");
        }
    }
    public function get_sexe()
    {
        return $this->sexe;
    }


    private function set_race($race)
    {

        if (
            is_string($race) &&
            strlen($race) <= 10 &&
            strlen($race) >= 3 &&
            !empty($race)
        ) {
            $this->race = $race;
        } else {
            throw new Exception ("la proprieté race est invalide");
        }
    }
    public function get_race()
    {
        return $this->race;
    }


    public function getInfo()
    {
        // return [
        //     "prenom"    => $this->prenom,
        //     "age"       => $this->age,
        //     "couleur"   => $this->couleur,
        //     "sexe"      => $this->sexe,
        //     "race"      => $this->race,
        // ];

        // permet de retourner un tableau des propriétés de l'objet 
        return get_object_vars($this);
    }
}
