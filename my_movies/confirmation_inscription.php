<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/inscription.css"/>


</head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <nav class="navbar navbar-expand-md bg-light border d-flex flex-row justify-content-around">
            <div>
                <a class="navbar-brand text-secondary" href="site.php">MyMovies</a>
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="inscription.php">S'inscrire</a>
                    <a class="dropdown-item" href="connexion.php">Se connecter</a>
                </div>
                </button>
            </div>
    </nav>

    <div class="contenant">
        <br/><br/><br/>
        <h1> INSCRIPTION REUSSIE ! </h1>
        <img src="images/brent_rambo.gif" title="brent rambooooo" />
    </div>


    <?php
        $bdd = new PDO("mysql:dbname=my_movies;host=localhost", "aparize", "123456");
        $req = $bdd -> prepare("INSERT INTO users (login, password) VALUE(?, ?)");
        $login = $_POST["login"];
        $password = $_POST["password"];
        $req -> execute(array($login, $password));

     ?>


</body>
</html>
