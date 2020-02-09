<?php

$somme = 0;
$triche = false;

for($i = 1; $i < 4; $i++)
{
    $somme += $_POST["tir" .$i];

    if($_POST["tir" .$i] > 10) $triche = true;
}

echo "<h2>Votre score " .$_POST["prenom"] ." est : $somme <br> <br>";

if($triche)
{
    echo "T'as triché batard";
}

else
{
    if($somme > 20)
    {
        echo "Bravoooo </h2>";
    }

    else
    {
        echo "rejoue bg </h2>";
    }
}

?>
