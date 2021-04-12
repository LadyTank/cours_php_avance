<?php

class myPDO
{

    public $baseDeDonnes;

    public function __construct($dbh, $user, $pwd)
    {
        $this->baseDeDonnes = new PDO($dbh, $user, $pwd);
        $this->baseDeDonnes->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function requeteSelect($table)
    {
        $marequete = "SELECT * FROM `$table`";

        $request = $this->baseDeDonnes->prepare($marequete);

        if ($request->execute()) {
            $res = $request->fetchAll();
        } else {
            $res = ["error" => "unknown error"];
        }
        return $res;
    }

    public function requeteUpdate($marequete)
    {
        $request = $this->baseDeDonnes->prepare($marequete);

        $res = $request->execute();
        return $res;
    }

    public function requeteDelete($marequete)
    {
        $request = $this->baseDeDonnes->prepare($marequete);

        $res = $request->execute();
        return $res;
    }

    public function requeteInsert($marequete)
    {
        $request = $this->baseDeDonnes->prepare($marequete);

        $res = $request->execute();
        return $res;
    }
}
