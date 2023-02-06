<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Movie {
    public $title;
    public $durata;
    public $regista;
    public $lingua;
    public $availableOn;
    public $genre;

    function __construct($_tile, $_durata, $_regista, $_lingua, $_availableOn, Genre $_genre){
        $this->title = $_tile;
        $this->durata = $_durata;
        $this->regista = $_regista;
        $this->lingua = $_lingua;
        $this->availableOn = $_availableOn;
        $this->genre = $_genre;
    }

    public function getAvailabilityOnPlatform($platform){
        $isAvailable = in_array($platform, $this->availableOn);
        if($isAvailable){
            return 'Disponibile su '.$platform;
        }
        return 'Non disponibile su '.$platform;
    }
}

class Genre {
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}

$movie_1 = new Movie('Pulp Fiction', '2h 34m', 'Quentin Tarantino', 'Inglese', ['Netflix', 'Prime'], new Genre('Indipendente'));
$movie_2 = new Movie('Interstellar', '2h 49m', 'Christopher Nolan','Americano', ['Disney'], new Genre('Fantascienza'));
$movie_3 = new Movie('American Pie', '1h 35m', 'Paul Weitz', 'Inglese', ['Netflix', 'Prime'], new Genre('Commedia'));
$movie_4 = new Movie('Invictus', '2h 14m', 'Clint Eastwood', 'Inglese',['Netflix', 'Prime'], new Genre('Sportivo'));

$movieArray = [$movie_1, $movie_2, $movie_3, $movie_4]

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Primo Esercizio OOP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>

        <div class="container-fluid">
            <div class"row">
                <div class="col h-100vh d-flex justify-content-center align-items-center">
                    <ul class="list-unstyled w-75 d-flex gap-3">
                        <?php foreach($movieArray as $element) { ?>
                            <li class="card w-4">
                                <div class="card-header">
                                    <h1><?php echo $element->title; ?></h1>
                                </div>
                                <div class="card-body ">
                                    <span><strong><p>Durata:</p></strong><p><?php echo $element->durata; ?></p></span>
                                    <span><strong><p>Regista:</p></strong><p><?php echo $element->regista; ?></p></span>
                                    <span><strong><p>Lingua:</p></strong><p><?php echo $element->lingua; ?></p></span>
                                    <span><strong><p>Genere:</p></strong><p><?php echo $element->genre->name; ?></p></span>
                                </div>
                                <div class="card-footer">
                                    <?php echo $element->getAvailabilityOnPlatform('Netflix'); ?>
                                </div>
                            </li>
                        <?php } ?> 
                    </ul>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>