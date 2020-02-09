<html>
    <?php include "functions.php";?>
    <?php
    if(is_numeric($_POST["a"]) && is_numeric($_POST["b"]))
    {
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo "$a à la puissance $b = " .puissance($a, $b);
    }
     ?>

</html>
