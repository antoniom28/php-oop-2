<?php
require_once __DIR__.'/sala.php';
require_once __DIR__.'/sala4d.php';
require_once __DIR__.'/movies.php';
require_once __DIR__.'/cinema.php';

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
    <ul>
        <?php
            foreach($cinema as $proiezione){
                echo '<li>'
                    ."la sala : {$proiezione[sala] ->getSala()} <br>"
                    ."<u> proietterà i seguenti film </u> : <br>"
                    .'<ul>';

                    foreach($proiezione[films] as $film){
                        echo '<li>'
                        .$film[movie]->getMovie()
                        ."<br> alle ore : {$film[start]}"
                        .'</li> <br>';
                    }

                    echo '</ul> <br>'
                . '</li>';
            }
        ?>
    </ul>
</body>
</html>

