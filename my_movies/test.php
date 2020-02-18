<?php
echo $_POST["login"];
$bdd = new PDO("mysql:host=localhost;dbname=my_movies", "aparize", "123456");
$req = $bdd -> prepare("SELECT * from users where login=?");
$req -> execute(array($_POST["login"]));
$res = $req -> fetchAll();

echo $res[0]["login"];


?>
