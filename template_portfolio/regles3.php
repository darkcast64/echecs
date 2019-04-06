<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Echecs</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Les échecs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index2.php">Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Règles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ouvertures.php">Ouvertures</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Exercices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Stratégies</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Les règles du jeu

    </h1>

    <!-- Project One -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="../img/petit_roque/petit_roque.png" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Le petit roque</h3>
            <p>C'est une opération qui vise à mettre à l'abri le roi.</b></p>
            <p><b>Les conditions du roque :</b></p>
            <ul><li>toutes les cases entre le roi et la tour sont libres</li>
                <li>la tour ne doit jamais avoir bougé(mais elle peut être en prise)</li>
                <li>le roi ne doit jamais avoir bougé</li>
                <li>le roi ne doit pas être en échec (mais il peut l'avoir été)</li>
                <li>le roi ne doit pas arriver sur une case ou il serait en échec </li>
                <li>le roi ne doit pas passer par une case ou il serait en échec</li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="../img/grand_roque/grand_roque.png" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Le grand roque</h3>
            <p>Il se réalise sur le coté opposé du petit roque. Les mêmes règles lui sont appliquées.</p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="../img/pat.png" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Le Pat</h3>
            <p>Le Pat a lieu lorsque le joueur ayant le trait ne peut pas jouer son roi sans le mettre en échec, comme sur l'exemple (trait au noir)
            </p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row justify-content-center">


        <div class="col-md-5 ">
            <h3>Partie nulle</h3>
            <p>partie terminée qui ne se solde ni par la victoire des blancs sur les noirs ni par celle des noirs sur les blancs. Il y a six cas où une partie se solde par la nulle :</p>
            <ol><li>le consentement mutuel des joueurs</li>
                <li>l'insuffisance de matériel</li>
                <li>le pat</li>
                <li>l'echec perpétuel</li>
                <li>la triple répétition de la position</li>
                <li>la règle des cinquante coups</li></ol>

        </div>

    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3>Insuffisance de matériel :</h3>
            <p>cas où aucun des joueurs ne dispose d'assez de matériel pour mater le roi adverse. Remarque : les finales roi contre roi, roi et cavalier ou roi et fou contre roi, ainsi que roi et fou contre roi et fou de même couleur sont nulles par insuffisance de matériel.</p>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="../img/echec_perpetuel.png" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Echec perpétuel</h3>
            <p>série ininterrompue d'échecs, qui ne parvient pas au mat, à laquelle l'adversaire ne peut réussir à se soustraire, et qui rend automatiquement la partie nulle.</p>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3>Triple répétition de la position</h3>
            <p>cas de nullité qui se produit : 1)
                lorsque la même position vient de se présenter une troisième fois au cours de la même partie,
                consécutivement ou non, et que le joueur au trait réclame la nulle ; ou 2)
                lorsque le joueur au trait peut jouer un coup qui reproduit la même position une troisième fois,
                mais réclame la nulle en mentionnant ce coup, sans le jouer. S'il joue ce coup,
                il donne le trait à son adversaire qui peut alors accepter ou refuser la nulle.
                Remarque : les positions sont considérées comme différentes si, de l'une à l'autre,
                les possibilités de roque et de prise en passant ne sont pas les mêmes. </p>
        </div>
    </div>

    <hr>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3>Règle des cinquante coups</h3>
            <p>lorsque 50 coups consécutifs des blancs et des noirs ne comportent ni coup de pion ni capture,
                le joueur au trait peut réclamer la nulle. Remarque : si le joueur au trait joue un coup au lieu de réclamer la nulle,
                il passe le trait à son adversaire et perd ce droit jusqu'au prochain coup.  </p>
        </div>
    </div>
    <hr>

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="regles.php" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="regles.php">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="regles3.php">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="regles3.php" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>