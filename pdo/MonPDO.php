<?php

namespace BaseDonnee;

class MonPDO
{

    protected $baseDeDonnes;

    public function __construct(string $dbh, string  $user, string  $pwd)
    {
        $this->baseDeDonnes = new \PDO($dbh, $user, $pwd);
        $this->baseDeDonnes->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }


    /**
     * requeteSelect recupéré les donnée
     * 
     * @param string $table - table cible
     * @param array $champs - champs a séléctioner dans la base de données
     * 
     */

    public function requeteSelect(string $table, array $champs_selectioner = ["*"])
    {
        // array_key_last retourne la derniere cle du tableau
        $dernierCle = array_key_last($champs_selectioner);

        $champs = "";
        foreach ($champs_selectioner as $cle => $valeur) {
            $champs .= "`" . $valeur . "`";
            if ($dernierCle !== $cle) {
                $champs .= ',';
            }
        }

        $sql = "SELECT $champs FROM `$table`";
        $requete = $this->baseDeDonnes->prepare($sql);

        if ($requete->execute()) {
            return $requete->fetchAll();
        }
    }


    /**
     * requeteUpdate permet de faire les requete de mise a jours
     * 
     * @param string $table - table cible
     * @param array $donnees - champs et données
     * @param int $id - id pour la clause WHERE
     * @param string $nom_champs_id - nom du champs dans la base de données pour la clause WHERE
     */

    public function requeteUpdate(string $table, array $donnees, int $id, string $nom_champs_id = "id")
    {
        // array_key_last retourne la derniere cle du tableau
        $dernierCle = array_key_last($donnees);

        $champs = '';
        foreach ($donnees as $cle => $valeur) {

            // on ajoute la cle et la donnée associer
            $champs .= " `$cle` = '" . htmlspecialchars($valeur) . "'";

            // array_key_last retourne la derniere cle du tableau
            // si elle est diférente de $cle alors ce n'est pas la derniere cle
            if ($dernierCle !== $cle) {
                // ont ajoute des virgules
                $champs .= ',';
            }
        }

        // base de la requete
        // la requetes est casiment prete il ne faut pas oublier la clause WHERE
        $sql = "UPDATE `$table` SET $champs WHERE $nom_champs_id  = $id";

        $requete = $this->baseDeDonnes->prepare($sql);
        return $requete->execute();
    }


    /**
     * requeteDelete supprimer dans la bose données
     * 
     * @param string $table - table cible
     * @param array $ids - liste des éléments a supprimer  
     * @param string $nom_du_champ_id - nom du champs id
     * 
     */

    public function requeteDelete(string $table, array $ids, string $nom_du_champ_id = "id")
    {
        $dernierCle = array_key_last($ids);
        $listes = '';

        for ($i = 0; $i < count($ids); $i++) {

            $index = $ids[$i];

            $listes .= "`$nom_du_champ_id` = '$index'";

            // array_key_last retourne la derniere cle du tableau
            // si elle est diférente de $cle alors ce n'est pas la derniere cle
            if ($dernierCle !== $i) {
                // ont ajoute des la clause OR
                $listes .= " OR ";
            }
        }

        $sql = "DELETE FROM `$table` WHERE $listes";

        $requete = $this->baseDeDonnes->prepare($sql);
        return $requete->execute();
    }


    /**
     * requeteInsert insert en base de données
     * 
     * @param string $table - table cible
     * @param array[$cle => $valeur] $donnes - nom des champs et valeurs
     * 
     */

    public function requeteInsert(string $table, array $donnes)
    {
        // array_key_last retourne la derniere cle du tableau
        $dernierCle = array_key_last($donnes);

        // $cles et $valeurs sauvegarderont respectivement les cles et les valeurs
        // puis seront concatener dans la requete $sql
        $cles = '';
        $valeurs = '';

        foreach ($donnes as $cle => $valeur) {

            // on concataine les chaines avec les données a chaque tour de boucle
            $cles .= " `$cle` ";
            $valeurs .= "'" . htmlspecialchars($valeur) . "'";

            // array_key_last retourne la derniere cle du tableau
            // si elle est diférente de $cle alors ce n'est pas la derniere cle
            if ($dernierCle !== $cle) {
                // ont ajoute des virgules
                $cles .= ',';
                $valeurs .= ',';
            }
        }

        // base de la requete
        $sql = "INSERT INTO `$table` ($cles) VALUES ($valeurs)";

        $requete = $this->baseDeDonnes->prepare($sql);
        return $requete->execute();
    }
}
