<!-- 
    ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->

<?php


$partiteMilano = [
    [
        "squadraCasa" => "Milano",
        "squadraOspite" => "Cantù",
        "punteggioCasa" => 55,
        "punteggioOspite" => 60,
    ],
    [
        "squadraCasa" => "Milano",
        "squadraOspite" => "Biella",
        "punteggioCasa" => 62,
        "punteggioOspite" => 77,
    ],
    [
        "squadraCasa" => "Milano",
        "squadraOspite" => "Brescia",
        "punteggioCasa" => 65,
        "punteggioOspite" => 66,
    ],

];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    for ($i = 0; $i <= count($partiteMilano) -1; $i++) { ?>
        <p>
            <?php echo $partiteMilano[$i]["squadraCasa"] . ' - ' . $partiteMilano[$i]["squadraOspite"] . ' | ' . 
            $partiteMilano[$i]["punteggioCasa"] . '-' . $partiteMilano[$i]["punteggioOspite"]
            ?>
        </p>

        
    <?php }
    ?>
    
</body>
</html>