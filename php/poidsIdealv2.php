<html>
    <body>

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
        ?>

        <?php

            if(array_key_exists("age", $_POST)){

                $bonPoids = poidsIdeal($_POST["age"], $_POST["taille"], $_POST["sexe"]);

                if($bonPoids > 0){
                    echo "Votre poids idéal = $bonPoids Kg";
                }

                else{
                    echo "Votre poids ou taille n'est pas approprié pour ce calcul :(";
                }
            }

            else{

                 echo "<form method='post' action='poidsIdeal.php'>";
                         echo"<label>Votre âge : </label>";
                        echo"<input type='text' name='age'/>";
                        echo"<br/> <br/>";

                        echo"<label> Votre taille (en cm) : </label>";
                        echo"<input type='text' name='taille'/>";
                        echo"<br/> <br/>";

                        echo"<label for='homme'>Homme </label>";
                        echo"<input type='radio' name='sexe' id='homme' value='homme'/>";
                        echo"<label for='femme'>Femme </label>";
                        echo "<input type='radio' name='sexe' id='femme' value='femme'/>";
                        echo"<br/> <br/>";

                        echo"<input type='submit' value='Valider'/>";
                    echo"</form>";
            }

        ?>

    </body>
</html>
