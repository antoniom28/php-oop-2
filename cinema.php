<?php

$all_movies = [
    new Movie('spiderman' , ['Tobey Maguire, Kirsten Dunst','Willem Dafoe']),
    new Movie('Inception' , ['Leonardo DiCaprio, Cillian Murphy','Tom Hardy']),
    new Movie('Annabelle' , ['Annabelle Wallis, Ward Horton']),
];

$cinema = [
    [
        "sala" => new Sala("normal","A1",80,10),
        "films" => [
            [
                "movie" => $all_movies[1],
                "start" => '17:10',
            ],
            [
                "movie" => $all_movies[1],
                "start" => '19:10',
            ],
            [
                "movie" => $all_movies[2],
                "start" => '21:10',
            ],
        ],
     ], 
     [
        "sala" => new Sala("normal","A2",100,20),
        "films" => [
            [
                "movie" => $all_movies[0],
                "start" => '13:10',
            ],
            [
                "movie" => $all_movies[1],
                "start" => '15:10',
            ],
            [
                "movie" => $all_movies[2],
                "start" => '17:10',
            ],
        ],
     ], 
     [
        "sala" => new Sala4D("4D","A3",180,30,['vibrazione','acqua']),
        "films" => [
            [
                "movie" => $all_movies[1],
                "start" => '11:10',
            ],
            [
                "movie" => $all_movies[0],
                "start" => '13:10',
            ],
            [
                "movie" => $all_movies[0],
                "start" => '15:10',
            ],
        ],
     ]
];