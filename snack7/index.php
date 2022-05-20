<!-- 
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->

<?php

   $someClass= [
       [
           "name" => "Fred",
           "surname" => "Plant",
           "grades" => [6,6,6]
       ],
       [
           "name" => "George",
           "surname" => "Bear",
           "grades" => [7,7,7,7,0]
       ],
       [
            "name" => "Rick",
            "surname" => "Clown",
            "grades" => [8,8,8]
        ],
    ];

    // $count = count($someClass);
    // var_dump($count);

    // $sum = array_sum($someClass[0]["grades"]);
    // var_dump($sum);

    // $average = $sum/$count;
    // var_dump($average);




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
        for ($i = 0; $i <= count($someClass) -1; $i++) { ?>
            <p>
                <?php echo 'Alunno: ' . $someClass[$i]["name"] . ' ' .
                $someClass[$i]["surname"] . ' <br> Media Voti: ' .
                array_sum($someClass[$i]["grades"]) / count($someClass[$i]["grades"])
                ?>

            </p>            
        <?php }
    ?>

</body>
</html>

