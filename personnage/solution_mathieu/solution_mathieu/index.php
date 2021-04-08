

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

require("class/Personnage.php");

// initialisation des objets
$bob = new Personnage("bob",rand(100,200),rand(15,30));
$tom = new Personnage("tom",rand(100,200),rand(15,30));


// temps que bob ou tom ont des points de vie la boucle continue
while($bob->pdv > 0 && $tom->pdv > 0){

    // tom se fait attaquer par bob
    $tom->seFaireAttaquer($bob->attaquerQuelquUn());
    var_dump("tom pdv: $tom->pdv<br>");
    
    // bob se fait attaquer par tom
    $bob->seFaireAttaquer($tom->attaquerQuelquUn());
    var_dump("bob pdv: $bob->pdv<br>");
}

// utilisation d'un ternaire, c'est une structure qui permet de faire une opération logique
// c'est plus rapide a écrire qu'un if else, ça fait la même chose
// $resultat = opération logique ? si vrais : si faux ; 
$gagnant = $bob->pdv > 0 ? $bob->nom : $tom->nom;
echo "vainqueur est  $gagnant";



?>

    
</body>
</html>