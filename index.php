<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Snack 1</h2>
<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->



<?php
    $arrMatch = [
        [   'squadracasa' => 'Milano',
            'squadraospite' => 'Roma',
            'punticasa' => 100,
            'puntiospite' => 76,
        ],
        [   'squadracasa' => 'Napoli',
            'squadraospite' => 'Torino',
            'punticasa' => 80,
            'puntiospite' => 74,
        ],
        [   'squadracasa' => 'Cesena',
            'squadraospite' => 'Bologna',
            'punticasa' => 35,
            'puntiospite' => 85,
        ],
        [   'squadracasa' => 'Treviso',
            'squadraospite' => 'Bari',
            'punticasa' => 100,
            'puntiospite' => 76,
        ],
    ];
 


    for ($i=0; $i < sizeof($arrMatch); $i++)
    echo $arrMatch[$i]['squadracasa'].' - '. $arrMatch[$i]['squadraospite'].'  |  '.$arrMatch[$i]['punticasa'].' - '. $arrMatch[$i]['puntiospite'].'<br>';
 

?>

<h2>Snack 2</h2>
<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
<?php

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) > 3 && (str_contains($mail, '@')) && is_int($age)) {
    echo $name.' Accesso riuscito'; 
    }
    else {
        echo 'Accesso negato';
    }   

?>


<h2>Snack 3</h2>

<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

    for ($i=0; $i < sizeof($posts); $i++)
        echo $posts[$i].
             $posts[$i]['title'].' - '. '<br>'.
             $posts[$i]['author'].' - '.'<br>'.
             $posts[$i]['text'].' - '.'<br>';

    ?>



<h2>Snack 4</h2>
<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->


<?php
    $iterazioni=15;
    $min=1;
    $max=20;

    for($i=0; $i<$iterazioni; $i++)
    echo rand($min,$max)." - ";


?>




<style>
    *{
        text-align:center;
        background-color: grey;
    }
</style>

</body>
</html>