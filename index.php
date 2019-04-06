<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container col-auto">

        <a class="btn btn-primary" href="inscription.php">Inscription</a>

    </div>
</nav>

<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 class="mb-5">Bienvenue </h1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form method="post" action="connexion.php">
                    <div class="form-row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input type="email" class="form-control form-control-lg" placeholder="Entrez votre email..."
                                   name="email">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0 mt-2">
                            <input type="password" class="form-control form-control-lg"
                                   placeholder="Entrez votre mot de passe" name="mdp">
                        </div>
                        <div class="col-12 col-md-9 mb-2 mb-md-0 mt-2">
                            <input type="text" class="form-control form-control-lg" placeholder="Entrez votre pseudo"
                                   name="pseudo">
                        </div>
                        <div class="col-12 col-md-3 mt-2">
                            <button type="submit" class="btn btn-block btn-lg btn-primary">Connexion</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</header>

<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="fas fa-chess m-auto "></i>
                    </div>
                    <h3>Les règles</h3>
                    <p class="lead mb-0">Apprenez à jouer grâce aux règles de deplacement</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="fas fa-chess-king m-auto"></i>
                    </div>
                    <h3>Des exemples d'ouvertures</h3>
                    <p class="lead mb-0">Découvrer des ouvertures pour débuter</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="fas fa-chess-knight m-auto"></i>
                    </div>
                    <h3>Des exercices</h3>
                    <p class="lead mb-0">Entrainez vous grâce à des exercices</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="fas fa-chess-bishop m-auto"></i>
                    </div>
                    <h3>Des Stratégies</h3>
                    <p class="lead mb-0">Utilisez es propriétés stratégiques des pièces</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcases -->
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row no-gutters">

            <div class="col-lg-6 order-lg-2 text-white showcase-img"
                 style="background-image: url('img/regles_echecs.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Les règles de déplacement</h2>
                <p class="lead mb-0">Apprenez à jouer avec des schémas pour bien conprendre les règles de
                    déplacements</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/ouvertures.jpg');"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>Des exemples d'ouvertures</h2>
                <p class="lead mb-0">Découvrez des ouvertures et améliorer votre début de jeu. Je ne monterez pas toutes
                    les ouvertures qui existent mais celles les plus jouées</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img"
                 style="background-image: url('img/exercices.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Exercices</h2>
                <p class="lead mb-0">Pratiquez votre skill en résolvant des exercices tels que des mat en 1 ou en 2</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6  text-white showcase-img"
                 style="background-image: url('img/strategie.jpeg');"></div>
            <div class="col-lg-6  my-auto showcase-text">
                <h2>Stratégies</h2>
                <p class="lead mb-0">Apprenez à vous servir de vos pièces grâce à leurs propriétés stratégiques</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->


<!-- Call to Action -->
<section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h2 class="mb-4">Pret à vous entrainez? Inscrivez vous!</h2>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

                <div class="form-row">
                    <div class="col-12 col-md-3 mb-2 mb-md-0 offset-md-3">
                        <a class="btn btn-primary" href="inscription.php">Inscription</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                        <a href="#">About</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Contact</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fab fa-facebook fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-instagram fa-2x fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
