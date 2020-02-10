<html>
    <body>
        <?php

            function checkNum($num){

                if(strlen($num) == 13 && ($num[0] == "1"||$num[0] == "2")){
                    return 1;
                }

                else return 0;
            }
        ?>

        <?php
            function affichageForm(){
                echo "<h1>Rentrez votre numéro INSEE svp </h1>";
                echo "<form method='POST' action='mesFonctions.php'> <label>Votre numéro : </label>";
                echo "<input type='text' name='num'/> <br><br>";
                echo "<input type='submit' value='Valider'/> </form>";
            }
        ?>

        <?php

            if(array_key_exists("num", $_POST)) {
                $num = $_POST["num"];
                
                if(checkNum($num)){
                    echo "<h1>Votre numéro est valide ! </h1>";
                }

                else{
                    affichageForm();
                }

            }

            else{
                affichageForm();
            }
        ?>
    </body>
</html>
