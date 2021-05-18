<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <title>Cours PHP avancé - POO</title>

</head>

<body class="bg-dark">
    <div class="container-fluid p-0 m-0">
        <!-- ========================================= -->
        <!-- Navbar -->
        <!-- ========================================= -->
        <?php require("inc/nav.inc.php"); ?>

    </div><!-- fin du container fluid -->

    <!-- ========================================= -->
    <!-- Contenu principal -->
    <!-- ========================================= -->

    <div class="container bg-white p-5">
        <div class="row jumbotron bg-light">
            <div class="col-sm-12">
                <h1 class="text-center">Cours PHP avancé - POO</h1>
                <p class="lead text-center mt-4">Programmation Orientée Objet</p>
            </div>
        </div><!-- fin row -->
        <!-- fin du jumbotron -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-12">
                <h2><span>I.</span> L'objet</h2>
                <p>Alors que la programmation procédurale permet d'agir sur les données par l'intermédiaires de fonctions/opérations, la Programmation Orientée Objet (POO) permet de créer des objets qui contiennent à la fois des données et des fonctions.</p>
                <p>La POO favorise une structure de code clair, moins répétitif.</p>
                <p>Un objet est l'instance d'une classe. <code>cf.II. Les classes</code></p>
                <p>Lorsqu'un objet est créé il hérite de toutes les propriétés et comportements de la class.</p>
                <p>Ci-dessous 2 tableaux pour mieux comprendre :</p>
            </div><!-- fin col -->
        </div><!-- fin row -->

        <div class="row bg-light mt-4 pt-3">
            <div class="col-6">
                <table class="table table-info table-striped  text-center">
                    <thead>
                        <th>
                        <td>Class</td>
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">Fruit</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- fin col -->

            <div class="col-6">
                <table class="table table-info table-striped  text-center">
                    <thead>
                        <th>
                        <td>Objets</td>
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">Pomme</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2">Banane</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2">Mangue</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- fin row -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>II.</span> Les classes</h2>
                <p>Permettent d'organiser et hiérarchiser son code. Une classe va être comme un sac contenant des propriétés et des méthodes (données et fonctions).</p>
                <p>"__construct" est une fonction qui va se lancer.</p>
                <p>Une classe peut hériter des propriétés d'une classe parente.</p>
                <p class="alert alert-warning">Voir <a href="humain/class/Professionnel.php"></a>la classe Professionnel.</p>
            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
                <h2><span>III.</span> Autoloader</h2>
                <p>L'utilisation des classes nécessite qu'elles soient appelées systématiquement par le require. Pour éviter de le répéter pour chaque classes dont on a besoin on peut utiliser la fonction <code>autoloader</code>.</p>
                <p>Un autoloader est une fonction qui va charger les classes nécessaires au fonctionnement du code en cours d'exécution</p>

                <p> Ici : la fonction pour les versions PHP antérieures à 7.4 :<br>
                    <code>function __autoload($class){</code>
                    <code>require("class/$class.php");</code><br>
                    <code>}</code>
                </p>

                <p> Ici : la fonction pour les versions à partir de PHP 7.4 <br>
                    <code>function mon_loader($class){</code>
                    <code>require("class/$class.php");</code><br>
                    <code>}</code>
                </p>

                <p>Appel de fonction :
                    <code>spl_autoload_register('mon_loader');</code>
                </p>
                <p>Cette méthode permet de gagner en productivité.</p>
            </div><!-- fin col -->

        </div><!-- fin row -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-12">
                <h2><span>IV.</span> Getter et Setter</h2>
                <p>La programmation orientée objet permet de spécifier la visibilité des méthodes et propriétés d'une classe. Dans le cas des propriétés, il est très peu recommandable de leur donner une visiblité publique car de cette manière il devient possible de les modifier sans qu'aucun contrôle ne soit effectué sur les valeurs.</p>
                <p>Il est donc préférable de leur accorder une visiblité limitée : private ou protected.</p>
                <p>Pour avoir accès à ces propriétés et ainsi pouvoir leur attribuer des valeurs, on utilise les méthodes get et set.</p>
                <p>Get va donner l'accès à la propriété tandis que set va permettre de lui attribuer une valeur. Par exemple :</p>
                <p><code>getMaFonction($titre){<br>
                        return $this->titre; <br>
                        }</code></p>
                <p><code>setMaFonction($titre){<br>
                        $this->titre = $titre; <br>
                        }</code></p>
                <p class="alert alert-warning">Pour plus de détails, voir l'exercice Chat ou cours PHP Orienté Objet de Régis, article.php</p>
            </div><!-- fin col -->


        </div><!-- fin row -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-12">
                <h2><span>V.</span> Les namespaces / espaces de noms</h2>
            </div> <!-- fin col -->
            <div class="col-sm-12 col-md-6">

                <p>Les classes, bien que très pratiques, peuvent poser problème dans le cadre d'une collaboration en groupe ou de l'utilisation de librairies externes. En effet, il peut y avoir conflit si 2 classes ont été nommées de la même façon.</p>
                <p>Pour pallier ce problème, a été mis en place des "namespaces". Utilisable dans de nombreux langages, un namespace permet d'indiquer qu'une classe fait partie d'un package. Plus précisémment, on sépare des éléments du code en les plaçant dans des "espaces" (ou répertoires) différents afin d'éviter les conflits.</p>
                <p>Les namespaces ont aussi un autre rôle qui consiste à créer des alias (des noms alternatifs) plus simples pour les éléments qui ont des noms trop longs ou trop compliqués.</p>
            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
                <p>Pour définir un namespace on utilise le mot-clé namespace suivi du nom de celui-ci. Le nom peut être choisi de la même façon qu'une fonction (lettres, chiffres et caractères souligné).</p>
                <p>Exemple : <code>namespace monEspaceDeNom;</code></p>
                <p>Pour appeler la class : <code>use monEspaceDeNom\maClasse;</code> </p>
            </div><!-- fin col -->

        </div><!-- fin row -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-12">
                <h2><span>VI.</span> Les traits</h2>
                <p class="alert alert-warning w-50">
                    <a href="https://grafikart.fr/tutoriels/traits-php-530#autoplay" target="blank">Cours sur les traits</a>
                </p>
            </div> <!-- fin col -->
            <div class="col-sm-12 col-md-6">

                <p>Les traits permettent de pallier les défauts du système d'héritage.</p>
                <p>En effet, l'héritage des classes se fait uniquement de manière verticale, de l'enfant vers le parent. Ce mode de fonctionnement peut avoir ses limites dans le cas où on veut ajouter des fonctionnalités communes à d'autres classes sans avoir à répéter le code.</p>
                <p>Prenons l'exemple d'une classe Parente qu'on appelle <code>Vehicule</code>.</p>
                <p>Cette classe a deux classes enfants <code>Moto</code> et <code>Voiture</code>. Ces classes enfants vont hériter des propriétés de <code>Vehicule</code> et auront elles même des propriétés qui leurs seront propres par ex: <code>$roue = 4;</code></p>
                <p>Dans le cas où nous voulons implémenter un système de véhicule électrique, on se retrouve face à un problème puisque les voitures comme les motos peuvent être électriques. Pour éviter de répéter des propriétés et comme la classe <code>Vehicule</code> n'a pas la propriété électrique. Nous créons un <code>trait</code>.</p>
                <p>Le trait sont des sous-classes abstraites qui permettent de greffer des méthodes (fonctions) et propriétés à des classes.</p>

            </div><!-- fin col -->

            <div class="col-sm-12 col-md-6">
                <p>Un trait se déclare comme suit :<br>
                    <code>trait Rechargeable {<br>
                        public $energy = 100;<br>
                        public function recharger {<br>
                        $this->energy = 100;<br>
                        }<br>
                        }<br></code>
                </p>
                <p>Un trait va définir un comportement.</p>
                <p>Il suffit ensuite de greffer le trait dans la ou les classes qui ont besoin de cette fonctionnalité : <br>
                    <code>use Rechargeable;</code>
                </p>
            </div><!-- fin col -->

        </div><!-- fin row -->

    </div> <!-- fin du container -->

    <?php require("inc/footer.inc.php"); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>