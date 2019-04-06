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
                <img class="img-fluid rounded mb-3 mb-md-0" src="../img/echec.png" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>L'échec</h3>
            <p>L'échec du roi a lieu lorsque celui ci est attaqué par une pièce adverse. Le joueur en échec doit soit
                déplacer son roi ou interposer une pièce entre son roi et la pièce qui attaque ou prendre la pièce qui
                attaque.<br><b>Ici la tour attaque le roi</b></p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="../img/mat.png" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Le MAT</h3>
            <p>Lorsque le roi est mis en échec et qu'il ne peux pas se déplacer ou interposer une pièce.<b>Il est Mat,
                    la partie est gagnée</b></p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="../img/pion/deplacement_pion.png" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Déplacement du pion</h3>
            <p>Si vous jouez pour la première fois un pion vous avez le choix entre le déplacer de 2 cases ou de 1
                case</p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row">

        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="../img/cavalier/cavalier.png" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Déplacement du cavalier</h3>
            <p>Les cases en vert représentent les cases que peut occuper le cavalier si il se déplace.</p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="regles2.php">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="regles2.php" aria-label="Next">
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
