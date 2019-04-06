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
    <link href="chessboard/css/chessboard-0.3.0.min.css" rel="stylesheet">

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
                    <a class="nav-link" href="regles.php">Règles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ouvertures</a>
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
    <h1 class="my-4">Les ouvertures les plus jouées

    </h1>

    <!-- Project One -->
    <div class="row">
        <div class="col-md-7">
            <div id="board1" style="width:400px"></div>
            <input type="button" id="startPositionBtn" value="Start Position"/>
            <input type="button" id="moveBtn1" value=">"/>
        </div>
        <div class="col-md-5">
            <h3>Partie espagnole</h3>
            <p>La partie espagnole est une ouverture du jeu d'échecs.
                <br>Elle est également appelée Ruy Lopez en hommage à Ruy Lopez de Segura,
                <br>moine espagnol du XVIe siècle, considéré comme le joueur le plus brillant de son temps.
                <br>L'espagnole est constituée par les coups : </p>
            <ol><li>e4 e5</li>
                <li>Cf3 Cc6</li>
                <li>Fb5</li></ol>


        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
        <div class="col-md-7">
            <div id="board2" style="width:400px"></div>
            <input type="button" id="startPositionBtn2" value="Start Position"/>
            <input type="button" id="moveBtn2" value="1"/>

        </div>
        <div class="col-md-5">
            <h3>Partie ecossaise</h3>
            <p>La partie écossaise est une ouverture au jeu d'échecs débutant par les coups 1. e4 e5 2. Cf3 Cc6</p>
            <ol><li> e4 e5 2. Cf3 Cc6 3. d4 exd4 4. Cxd4</li>
                <li> e4 e5 2. Cf3 Cc6 3. d4 exd4 4. Fc5</li>
                <li> e4 e5 2. Cf3 Cc6 3. d4 exd4 4. Cf6</li></ol>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
        <div class="col-md-7">
            <div id="board3" style="width:400px"></div>
            <input type="button" id="startPositionBtn3" value="Start Position"/>
            <input type="button" id="moveBtn6" value=" >"/>


        </div>
        <div class="col-md-5">
            <h3>Partie italienne</h3>
            <p>Les Noirs y cherchent juste à maintenir l'équilibre,
                <br>contrairement à la défense des deux cavaliers (caractérisée par les coups 1. e4 e5 2. Cf3 Cc6 3. Fc4
                Cf6),
                <br>où ils contre-attaquent dès le troisième coup. La partie italienne compte parmi les ouvertures les
                plus anciennes;
                <br>elle fut déjà analysée par Pedro Damiano dans son livre publié à Rome en 1512.
                <br>Cette ouverture est très employée par les débutants, mais les grands maîtres lui préfèrent la
                Sicilienne (e4 c5). </p>

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row">

        <div class="col-md-7">
            <div id="board4" style="width:400px"></div>
            <input type="button" id="startPositionBtn4" value="Start Position"/>
            <input type="button" id="moveBtn7" value=" 1>"/>
            <input type="button" id="moveBtn8" value=" 2>"/>
            <input type="button" id="moveBtn9" value=" 3>"/>
            <input type="button" id="moveBtn10" value=" 4>"/>

        </div>
        <div class="col-md-5">
            <h3>Défense sicilienne</h3>
            <p>La défense sicilienne est une des ouvertures les plus jouées du jeu d'échecs. <br>
                Populaire auprès des joueurs de tous niveaux, elle s'obtient après les coups 1. e4 c5.<br>
                a) Avec les cavaliers noirs en c6 et f6 (Cc6 et Cf6), sans ...g6 et sans ...e5 :</p>
            <ul>
                <li><b>1</b> la sicilienne des quatre cavaliers (B45) : 1.e4 c5 2.Cf3 Cc6 (ou e6) 3.d4 cxd4 4.Cxd4 Cf6
                    5.Cc3 e6 (ou Cc6)
                </li>
                <li><b>2</b> la sicilienne classique (B56 à B69) : 1. e4 c5 2. Cf3 Cc6 (ou d6) 3. d4 cxd4 4. Cxd4 Cf6 5.
                    Cc3 d6 (ou Cc6)
                </li>
            </ul>
            <p>b) Avec ...g6, le pion e reste en e7 </p>
            <ul>
                <li><b>3</b> la variante du dragon (B70 à B79) : 1.e4 c5 2.Cf3 d6 3.d4 cxd4 4.Cxd4 Cf6 5.Cc3 g6.</li>
                <li><b>4</b> la variante du dragon accéléré (B34 à B39) : 1.e4 c5 2.Cf3 Cc6 3.d4 cxd4 4.Cxd4 g6</li>
            </ul>

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
            <a class="page-link" href="ouvertures2.php">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="ouvertures2.php" aria-label="Next">
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
<script src="chessboard/js/chessboard-0.3.0.min.js"></script>
<script>
    var i = 0;
    var board1 = ChessBoard('board1', 'start');
    $('#startPositionBtn').on('click', function () {
        board1.start();
        i = 0;
    });
    $('#moveBtn1').on('click', function () {

        i = i + 1;
        move1(i);
        return i;
    });

    function move1(i) {
        if (i == 1) {
            board1.move('e2-e4','e7-e5');
        }
        if(i==2){
            board1.move('g1-f3');
        }
        if(i==3){
            board1.move('b8-c6');
        }
        if(i==4){
            board1.move('f1-b5');
        }
    }
    var board2 = ChessBoard('board2', 'start');
    $('#startPositionBtn2').on('click', function () {
        board2.start();
        i = 0;
    });
    $('#moveBtn2').on('click', function () {

        i = i + 1;
        move2(i);
        return i;
    });
    function move2(i){
        if(i==1){
            board2.move('e2-e4','e7-e5');
        }
    }





</script>

</body>

</html>
