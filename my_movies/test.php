<?php

$servername = "localhost";
$bdd = new PDO("mysql:dbname=my_movies;host=$servername", "aparize", "123456");

$req = $bdd -> query("SELECT realisateur FROM films");
// $res = $req->execute();

$ligne = $req->fetch();
echo $ligne["realisateur"];

 ?>
