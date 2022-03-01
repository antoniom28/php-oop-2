<?php
require_once __DIR__.'/sala.php';
require_once __DIR__.'/sala4d.php';
require_once __DIR__.'/movies.php';
require_once __DIR__.'/cinema.php';

$tot_posti = 0;
$search_film = strtolower("spidermAN");
$search_day = "05/03/2022";
$finded_film = [];
$last_film = null;

function end_duration($start , $duration){
    $time = strtotime("{$start} +{$duration} minutes");
    return date("H:i" , $time);
}

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
                $tot_posti += $proiezione[sala]->num_posti;

                echo '<li>'
                    ."la sala : {$proiezione[sala]->getSala()} <br>"
                    ."<u> proietterà i seguenti film </u> : <br>"
                    .'<ul>';

                    foreach($proiezione[films] as $film){
                        if($film[day] == $search_day && strtolower($film[movie]->name) == $search_film){
                            $finded_film[] = $film[start];
                        }

                        if($film[day] == $search_day)
                            if($last_film == null)
                                $last_film = $film;
                            else
                                if(strtotime($last_film[start]) < strtotime($film[start]))
                                    $last_film = $film;

                        echo '<li>'
                        .$film[movie]->getMovie()
                        ."<br> alle ore : {$film[start]}"
                        ."<br> il giorno : {$film[day]}"
                        .'</li> <br>';
                    }

                    echo '</ul> <br>'
                . '</li>';
            }
            echo "totale posti in tutte le sale : {$tot_posti} <br><br>";

            echo "il giorno {$search_day}, il film {$search_film} è proiettato ".count($finded_film)." volte , ";
            echo "alle ore : <br>";
            foreach($finded_film as $film)
                echo $film."<br>";
            echo "<br>";

            echo "l'ultimo spettacolo del giorno: {$search_day} è : <br>"
            .$last_film[movie]->getMovie()
            ."<br> alle ore : {$last_film[start]} <br>"
            ."e termina alle : "
            .end_duration($last_film[start] , $last_film[movie]->duration);
        ?>
    </ul>
</body>
</html>

