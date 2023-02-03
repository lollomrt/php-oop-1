<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Movie {
    public $title;
    public $durata;
    public $regista;
    public $lingua;

    function __construct($_tile, $_durata, $_regista, $_lingua){
        $this->title = $_tile;
        $this->durata = $_durata;
        $this->regista = $_regista;
        $this->lingua = $_lingua;
    }

    public setLenguage($_lingua){
        if($_lingua == inglese){
            
        }
    }
}

$movie_1 = new Movie('Pulp Fiction', '2h 34m', 'Quentin Tarantino', 'inglese');
$movie_2 = new Movie('Interstellar', '2h 49m', 'Christopher Nolan','inglese');
$movie_3 = new Movie('American Pie', '1h 35m', 'Paul Weitz', 'americano');
$movie_3 = new Movie('Invictus', '2h 14m', 'Clint Eastwood', 'inglese');



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Primo Esercizio OOP</title>
    </head>
    <body>
        <?php
         echo $movie_1->title;
        ?>
    </body>
</html>