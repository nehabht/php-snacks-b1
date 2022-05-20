<!-- 
   ## Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto 
e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
altrimenti “Accesso negato”
 -->

<?php

    var_dump($_GET['name']); //più di 3 caratteri
    var_dump($_GET['mail']); //contenga punto e choicciola
    var_dump($_GET['age']); // sia un numero

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) > 3 &&
        (strpos($mail, '.') && strpos($mail, '@')) &&
        (is_numeric($age))
        ) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    };


?>

