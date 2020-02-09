<?php

function puissance($nb, $exposant){
    $tmp = $nb;

    if($exposant == 0) return 1;

    else{

        for($i = 1; $i < $exposant; $i++){
            $tmp *= $nb;
        }

        return $tmp;
    }

}
?>
