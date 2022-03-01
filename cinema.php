<?php

$all_movies = [
    new Movie('spiderman' , ['Tobey Maguire', 'Kirsten Dunst','Willem Dafoe'], 120),
    new Movie('Inception' , ['Leonardo DiCaprio', 'Cillian Murphy','Tom Hardy'], 150),
    new Movie('Annabelle' , ['Annabelle Wallis', 'Ward Horton'], 120),
];

$cinema = [
    [
        "sala" => new Sala("normal","A1",80,10),
        "films" => [
            [
                "movie" => $all_movies[1],
                "start" => '17:10',
                "day" => '06/03/2022'
            ],
            [
                "movie" => $all_movies[1],
                "start" => '19:35',
                "day" => '05/03/2022'
            ],
            [
                "movie" => $all_movies[2],
                "start" => '21:10',
                "day" => '06/03/2022'
            ],
        ],
     ], 
     [
        "sala" => new Sala("normal","A2",100,20),
        "films" => [
            [
                "movie" => $all_movies[0],
                "start" => '13:10',
                "day" => '05/03/2022'
            ],
            [
                "movie" => $all_movies[1],
                "start" => '15:10',
                "day" => '05/03/2022'
            ],
            [
                "movie" => $all_movies[2],
                "start" => '19:15',
                "day" => '05/03/2022'
            ],
        ],
     ], 
     [
        "sala" => new Sala4D("4D","A3",180,30,['vibrazione','acqua']),
        "films" => [
            [
                "movie" => $all_movies[1],
                "start" => '11:10',
                "day" => '05/03/2022'
            ],
            [
                "movie" => $all_movies[0],
                "start" => '13:10',
                "day" => '06/03/2022'
            ],
            [
                "movie" => $all_movies[0],
                "start" => '15:10',
                "day" => '05/03/2022'
            ],
        ],
     ]
];