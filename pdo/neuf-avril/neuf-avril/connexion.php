<?php
require('class/Autoloader.php');
Autoloader::register();
$mypdo = new myPDO('mysql:host=localhost;dbname=site;charset=utf8', 'root', '');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>POO - PHP Orienté Objet - Connexion PDO</title>
</head>

<body>
    <div class="container">
        <h1>class myPDO : <code>SELECT / INSERT INTO / UPDATE / DELETE</code></h1>
        <h2>Je sélectionne et j'affiche les données de ma table <code>produit</code> dans un tableau</h2>
        <p class="alert alert-success">FAIT - VOIR LE CODE</p>
        <table class="table table-stripped">
            <tr>
                <th scope=col>Id_produit</th>
                <th scope=col>Référence</th>
                <th scope=col>Catégorie</th>
                <th scope=col>Titre</th>
                <th scope=col>Description</th>
                <th scope=col>Couleur</th>
                <th scope=col>Taille</th>
                <th scope=col>Public</th>
                <th scope=col>Photo</th>
                <th scope=col>Prix</th>
                <th scope=col>Stock</th>
            </tr>
            <?php

            $requete = $mypdo->requeteSelect("produit");
            // var_dump($mypdo);
            // Debug::afficherTableau($requete);

            foreach ($requete as $ligne) {
                echo "<tr><td>" . $ligne['id_produit'] . "</td>";
                echo "<td>" . $ligne['reference'] . "</td>";
                echo "<td>" . $ligne['categorie'] . "</td>";
                echo "<td>" . $ligne['titre'] . "</td>";
                echo "<td>" . $ligne['description'] . "</td>";
                echo "<td>" . $ligne['couleur'] . "</td>";
                echo "<td>" . $ligne['taille'] . "</td>";
                echo "<td>" . $ligne['public'] . "</td>";
                echo "<td>" . $ligne['photo'] . "</td>";
                echo "<td>" . $ligne['prix'] . "</td>";
                echo "<td>" . $ligne['stock'] . "</td></tr>";
            }
            ?>
        </table>

        <h2>Je fais un UPDATE de ma table <code>produit</code></h2>
        <p class="alert alert-success">FAIT - VOIR LE CODE</p>
        <br><br><br>

        <?php
        // $requeteUpdate = $mypdo->requeteUpdate("UPDATE produit SET public = 'f' WHERE id_produit = 18");
        // Debug::jedebug2($requeteUpdate);

        ?>

        <h2>Je fais un INSERT INTO de ma table <code>produit</code></h2>
        <p class="alert alert-success">FAIT - VOIR LE CODE</p>
        <br><br><br>

        <?php
        // $requeteInsert = $mypdo->requeteInsert("INSERT INTO `produit` (`id_produit`, `reference`, `categorie`, `titre`, `description`, `couleur`, `taille`, `public`, `photo`, `prix`, `stock`) VALUES (NULL, '456794', 'Chemise', 'Chemise rose', 'Une chemise rose parfaite pour faire une petite pause.', 'rose', 'L', 'f', 'photos/chemise2.jpg', '75', '45');");

        // Debug::jedebug2($requeteInsert);

        ?>


        <h2>Je fais un DELETE de ma table <code>produit</code></h2>
        <p class="alert alert-success">FAIT - VOIR LE CODE</p>
        <br><br><br>
        <!-- <p class="alert alert-success">FAIT - VOIR LE CODE</p> -->
        <?php
        // $requeteDelete = $mypdo->requeteDelete("DELETE FROM `produit` WHERE `produit`.`id_produit` = 29");

        // Debug::jedebug2($requeteDelete);
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>