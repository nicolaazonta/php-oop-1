<?php

class Genre
{
    //definizione variabili d'istanza
    public $bho;

    //definizione costruttore
    public function __construct(string $_bho)
    {
        $this->bho = $_bho;
    }
}
class Movie
{
    //definizione variabili d'istanza
    public $title;
    public $description;
    public $main_actor;
    public $poster;
    public $Genre = 'adventure'; //has a

    //definizione costruttore
    public function __construct(string $_title, string $_description, string $_main_actor, string $_poster, Genre $_genre)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->main_actor = $_main_actor;
        $this->poster = $_poster;
        $this->Genre = $_genre;
    }
}

$movies[] = new Movie('Interstellar', 'Set in a future where a failing Earth puts humanity on the brink of extinction, it sees an intrepid team of NASA scientists, engineers and pilots attempt to find a new habitable planet, via interstellar travel.', 'Matthew McConaughey','https://pad.mymovies.it/filmclub/2014/01/001/locandina.jpg', new Genre('horror'));

$movies[] = new Movie('Avatar', 'Avatar derives from a Sanskrit word meaning "descent," and when it first appeared in English in the late 18th century, it referred to the descent of a deity to the earth—typically, the incarnation in earthly form of Vishnu or another Hindu deity.', 'Sam Worthington','https://pad.mymovies.it/filmclub/2008/03/090/locandinapg13.jpg', new Genre('horror'));

$movies[] = new Movie('Titanic', 'The Titanic was designed by the Irish shipbuilder William Pirrie and built in Belfast, and was thought to be the world\'s fastest ship. It spanned 883 feet from stern to bow, and its hull was divided into 16 compartments that were presumed to be watertight.', 'Leonardo di Caprio','https://pad.mymovies.it/filmclub/2004/06/506/locandinapg9.jpg', new Genre('horror'));


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body style="background-color: lightgreen;">

    <div class="container w-50 pt-5">

        <? foreach ($movies as $movie) : ?>
            <div class="card border-light my-4 p-1 " style="max-width: 540px;">

                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" src="<?= $movie->poster ?>" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie->title ?></h5>
                            <p class="card-text"><?= $movie->description ?></p>
                            <p class="card-text"><small class="text-muted"><?= $movie->main_actor ?></small></p>
                        </div>
                    </div>
                </div>

            </div>
        <? endforeach ?>
    </div>
</body>

</html>