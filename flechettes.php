<html>

    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>JEU DE FLECHETTES </h1>
        <h2> 3 flechettes par joueur; 10 points maxi par tir </h2>

        <form method="POST" action="process_flechettes.php">
            <label>Votre prénom : </label>
            <input type="text" name="prenom">
            <br> <br>

            <?php

            for($i = 1; $i < 4; $i++)
            {
                echo "Tir numéro $i - points : ";
                echo "<input type=text name=tir" .$i ." size=3> <br><br>" ;
            }
             ?>

            <input type=submit value=Valider>
        </form>

    </body>
</html>
