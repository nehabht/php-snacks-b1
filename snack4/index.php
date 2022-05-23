<!-- 
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->

<?php

    $arrayRandom = [];

    while (count($arrayRandom) < 15) {
        $number = rand(0, 14);

        if (!in_array($number,$arrayRandom)){
            $arrayRandom[] = $number;
        }
    };

    var_dump($arrayRandom);

?>

