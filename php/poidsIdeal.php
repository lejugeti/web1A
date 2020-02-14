<?php
    function poidsIdeal($age, $taille, $sexe){
        if(is_numeric($age) && is_numeric($taille) && $age >=20 &&
            $age<=60 && $taille >= 150 && $taille <=190) {

                if($sexe == "homme"){
                    return $taille - 110 + ($age * 0.17);
                }

                else if($sexe == "femme"){
                    return $taille - 112 + ($age * 0.15);
                }
            }
        else{
            return -1;
        }
    }

    $bonPoids = poidsIdeal($_POST["age"], $_POST["taille"], $_POST["sexe"]);

    if($bonPoids > 0){
        echo "Votre poids idéal = $bonPoids Kg";
    }

    else{
        echo "Votre poids ou taille n'est pas approprié pour ce calcul :(";
    }
?>
