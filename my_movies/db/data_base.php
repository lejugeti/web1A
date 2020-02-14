<?php

$servername = "localhost";
$conn = new PDO("mysql:host=$servername", "aparize", "123456");

$req = "CREATE DATABASE my_movies";

$conn -> exec($req);
echo "database created successfully <br>";


?>


<?php
$servername = "localhost";
$conn = new PDO("mysql:dbname=my_movies;host=$servername", "aparize", "123456");
$req = "CREATE TABLE films(
    id PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(40),
    description_courte VARCHAR(200),
    description_longue VARCHAR(1000),
    realisateur VARCHAR(60),
    annee_sortie VARCHAR(4),
    image VARCHAR(60)
    )";


if($conn->query($req)) echo("table created successfully");

$conn = null;
?>
