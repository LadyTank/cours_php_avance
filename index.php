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
               
            </div><!-- fin col -->

        </div><!-- fin row -->

        <hr>

        <div class="row bg-light mt-4">

            <div class="col-sm-12 col-md-6">
                <h2><span>II.</span> Les classes</h2>
                <p>Permettent d'organiser et hiérarchiser son code. Une classe va être comme un sac contenant des propriétés et des méthodes (données et fonctions).</p>
                <p>"__construct" est une fonction qui va se lancer</p>
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
            <h2><span>IV.</span> Getter</h2>
            <div class="col-sm-12 col-md-6">
                
            </div><!-- fin col -->

            <h2><span>V.</span> Setter</h2>
            <div class="col-sm-12 col-md-6">
            
            </div><!-- fin col -->
        </div>


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
