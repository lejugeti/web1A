<?php
    echo "<table><tr><th>Associations clé/valeur </th> </tr>";
    foreach($_GET as $key => $value){
        echo "<tr> <td> la valeur de $key est $value </tr> </td>";
    }
    echo "</table>";

?>
