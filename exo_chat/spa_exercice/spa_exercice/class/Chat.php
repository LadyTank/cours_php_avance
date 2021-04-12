<?php

class Chat
{

    private ?string $prenom;
    private ?int $age;
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

    private function set_prenom($prenom)
    {
        // le nom doit etre une chaine
        // faire entre 3 et 20 caracter
        if (
            is_string($prenom) &&
            strlen($prenom) <= 20 &&
            strlen($prenom) >= 3
        ) {
            $this->prenom = $prenom;
        } else {
            // permet de levé une execption php ( créé un message d'érreur )
            throw new Exception ("la propieter prenom est invalide");
        }
    }
    public function get_prenom()
    {
        return $this->prenom;
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
            throw new Exception ("la propieter age est invalide");
        }
    }
    public function get_age()
    {
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
            throw new Exception ("la propieté couleur est invalide");
        }
    }
    public function get_couleur()
    {
        return $this->couleur;
    }


    private function set_sexe($sexe)
    {
        // le sexe ne peut etre que male ou femelle
        if ($sexe === "male" || $sexe === "femelle") {
            $this->sexe = $sexe;
        } else {
            throw new Exception ("la propieté sexe est invalide");
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
            throw new Exception ("la propieté race est invalide");
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

        // permet de retourné un tableau des propriété de l'objet 
        return get_object_vars($this);
    }
}
