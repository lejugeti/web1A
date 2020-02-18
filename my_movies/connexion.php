<!DOCTYPE html>

<?php



?>

<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/connexion.css"/>


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

        <form method="POST" action="#">
            <h2> Connexion </h2>

            <div class="form-group">
                <label for="login">Votre login :</label>
                <input type="text" class="form-control" name="login" id="login" aria-describedby="emailHelp" placeholder="Entrez votre login">
            </div>

            <div class="form-group">
                <label for="password">Votre mot de passe :</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Votre mdp (40 caractères max)">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>

            </form>
    </div>


</body>
</html>
