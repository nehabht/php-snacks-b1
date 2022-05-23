<!-- ## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->


<?php 
$text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, possimus quas non dolor quod laudantium optio eum quasi odit iste inventore sapiente saepe sequi? Inventore eaque repellat temporibus quae veniam maiores cupiditate sed excepturi ex similique, at atque tempora officia libero. Harum distinctio aut maiores autem? Et, blanditiis fuga, reiciendis consequatur laborum laudantium odit rerum vero, tenetur molestias incidunt numquam ratione. Architecto mollitia, labore exercitationem ducimus inventore accusamus rem id numquam expedita. Incidunt deleniti natus atque aut. Mollitia officia autem, numquam voluptatum accusamus maxime sint voluptates fuga aut expedita officiis rerum iure, sit veritatis iusto quam vel debitis ipsa! Possimus.';

$paragraphs = explode(".", $text)

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

    <h1>Article</h1>

    <?php foreach ($paragraphs as $paragraph) : ?>

        <p>
            <?= $paragraph . '.';?>
        </p> 

    <?php endforeach; ?>




</body>
</html>