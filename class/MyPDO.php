<?php

class MyPDO {

    public $baseDeDonnees;
    

    public function __construct($dbh, $utilisateur, $motdepasse){ //dbh = database host
        $this->baseDeDonnees = new PDO($dbh, $utilisateur = '', $motdepasse = '');
    }
   
    public function requeteSelect($sql){

        $request = $this->baseDeDonnees->prepare($sql);

        if ($request->execute()) {
            $res = $request->fetchAll();
        } else {
            $res = ["error" => "unknown error"];
        }
        
        return $res;
    }

    public function requeteUpdate($sql){
        
        $update = $this->baseDeDonnees->prepare($sql);

        if ($update->execute()) {
            $res = $update->fetchAll();
        } else {
            $res = ["error" => "unknown error"];
        }
        
        return $res;
    }

    public function requeteDelete($sql){
        
    }

    public function requeteInsert($sql){
        
    }

    
}