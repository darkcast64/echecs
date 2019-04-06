<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

</head>
<body>

<?php 

$emailErr=$mdpErr=$pseudoErr="";
$email=$mdp=$password_confirm=$pseudo="";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["email"])){
        $emailErr="un email est nécessaire";
    }else {
        $email=test_input($_POST["email"]);
       
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format"; 
        }

    }
    if (empty($_POST["mdp"])){
        $mdpErr="Un mot de passe est requis";
    }else{
        $mdp=test_input($_POST["mdp"]);
    }
    if (empty($_POST["pseudo"])){
        $pseudoErr="Un pseudo est requis";
    }else{
        $pseudo=test_input($_POST["pseudo"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  


 ?>






    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Inscrivez vous</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form method="POST"  action='inscription_reussi.php'>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Entrez votre email" name="email">
                  <span class="error">* <?php echo $emailErr;?></span>
                </div>
                
              </div>  
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Entrez votre pseudo" name="pseudo">
                  <span class="error">* <?php echo $pseudoErr;?></span>
                </div>
                
              </div>  
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0 mt-2">
                  <input type="password" class="form-control form-control-lg" placeholder="Entrez votre mot de passe" name="mdp" id="password">
                  <span class="error">* <?php echo $mdpErr;?></span>
                </div>
                <div class="col-12 col-md-9 mb-2 mb-md-0 mt-2">
                  <input type="password" class="form-control form-control-lg" placeholder="Confirmer votre mot de passe" nme="password_confirm" id="password_confirm">
                  <span class="error">* <?php echo $mdpErr;?></span>
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
    

</body>
</html>