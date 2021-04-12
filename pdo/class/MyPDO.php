<?php

// class MyPDO {

//     public $baseDeDonnees;
    

//     public function __construct($dbh, $utilisateur, $motdepasse){ //dbh = database host
//         $this->baseDeDonnees = new PDO($dbh, $utilisateur, $motdepasse);
//         $this->baseDeDonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     }
   
//     // public function requeteSelect($sql){

//     //     $request = $this->baseDeDonnees->prepare($sql);

//     //     if ($request->execute()) {
//     //         $res = $request->fetchAll();
//     //     } else {
//     //         $res = ["error" => "unknown error"];
//     //     }
        
//     //     return $res;
//     // }

//     //ou

//     // $request = $this->baseDeDonnes->prepare($sql);

//     // if ($request->execute()) {
//     //     try {
//     //         $res = $request->fetchAll();
//     //         return $res;
//     //     } catch (PDOException $e) {
//     //         echo new PDOException($e->getMessage(), $e->getCode());
//     //     }
//     // }

//     // ou on peut également gérer les requêtes directement dans l'objet avec par exemple une propriété pour la table (ici, employes) et passer plus de paramètres sur les méthodes pour l'id ou les différents champs :
    
//     public function requeteSelect($table)
//     {
//         $marequete = "SELECT * FROM `$table`";

//         $request = $this->baseDeDonnees->prepare($marequete);

//         if ($request->execute()) {
//             $res = $request->fetchAll();
//         } else {
//             $res = ["error" => "unknown error"];
//         }
//         return $res;
//     }

//     public function requeteUpdate($sql){
        
//         $requestUpdate = $this->baseDeDonnees->prepare($sql);

//         return $requestUpdate->execute();
       
//     }

//     public function requeteDelete($sql){

//         $requestDelete = $this->baseDeDonnees->prepare($sql);

//         return $requestDelete->execute();
//     }

//     public function requeteInsert($sql){

//         $requestInsert = $this->baseDeDonnees->prepare($sql);

//         return $requestInsert->execute();
//     }

    
// }

// code Mathieu

class MyPDO
{

    public $baseDeDonnees;

    public $table;

    public function __construct($dbh, $user, $pwd)
    {
        $this->baseDeDonnees = new PDO($dbh, $user, $pwd);

        $this->baseDeDonnees->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function requeteSelect($table)
    {

        $sql = "SELECT * FROM `$table`";

        $request = $this->baseDeDonnees->prepare($sql);

        if ($request->execute()) {
            return $request->fetchAll();
        }
    }

    /**
     * TODO 
     * mieux que de passé une query il faudrait passé un tableau et 
     * préparé la requête dans la méthode
     * le paramètre a passé serais un tableau associatif
     */
    
    public function requeteUpdate($table, $data, $id_field, $id)
    {

        // base de la requete
        $sql = "UPDATE `$table` SET";

        // pour compté le nombre de passage fait
        $currentCount = 1;

        foreach ($data as $key => $value) {

            // on ajoute la cle et la donnée associer
            $sql .= " `$key` = '" . htmlspecialchars($value) . "'";

            // si le nombre de passage effectuer est inferieur au nombre d'élément dans $data
            if ($currentCount <= count($data) - 1) {
                // ont ajoute des virgules
                $sql .= ',';
            }
            // on n'oublie pas d'incrémenté notre compteur
            $currentCount++;
        }

        // la requetes est quasiment prete il ne faut pas oublier la clause WHERE

        // $id_key = array_keys($id_field);
        $sql .= " WHERE $id_field  = $id";
        
        $req = $this->baseDeDonnees->prepare($sql);
        return $req->execute();
    }
    


    /**
     * TODO
     * on pourrait ici imaginer passer le nom de table et l'id ( pour la clause WHERE)
     * de ce qu'il faut supprimer
     */
    public function requeteDelete($table, $id_field, $id)
    {
        $requete = "DELETE FROM `$table` WHERE `$table`.`$id_field` = $id";

        // la requête peut aussi se faire en idiquant un autre champ dans la condition WHERE. Attention, bien penser à mettre la variable entre quote puisqu'on attend une string '$id' par exemple
        // $requete = "DELETE FROM `$table` WHERE `$table`.`$id_field` = $id";

        $req = $this->baseDeDonnees->prepare($requete);
        return $req->execute();
    }

    /**
     * TODO
     * pour celle ci on pourrait avoir un tableau associatif pour les champs et les données
     * et un id pour la clause WHERE
     * 
     */
    public function requeteInsert($table, $data)
    {

        $dernierCle = array_key_last($data);

        $cles = '';
        $valeurs = '';
        foreach ($data as $cle => $valeur) {

            $cles .= $cle;
            $valeurs .= "'" . htmlspecialchars($valeur) . "'";

            // si le nombre de passage effectué est inferieur au nombre d'élément dans $data
            if ($dernierCle !== $cle) {
                // on ajoute des virgules
                $cles .= ' , ';
                $valeurs .= ' , ';
            }
        }

        $sql = "INSERT INTO $table ($cles) VALUES ($valeurs)";

        $req = $this->baseDeDonnees->prepare($sql);
        return $req->execute();
    }
}