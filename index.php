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
    public $Genre = 'adventure'; //has a

    //definizione costruttore
    public function __construct(string $_title, string $_description, string $_main_actor, Genre $_genre)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->main_actor = $_main_actor;
        $this->Genre = $_genre;
    }
}

$movies[]= new Movie('Interstellar', 'Set in a future where a failing Earth puts humanity on the brink of extinction, it sees an intrepid team of NASA scientists, engineers and pilots attempt to find a new habitable planet, via interstellar travel.', 'Matthew McConaughey', new Genre('horror'));
   
$movies[]= new Movie('Avatar', 'Avatar derives from a Sanskrit word meaning "descent," and when it first appeared in English in the late 18th century, it referred to the descent of a deity to the earth—typically, the incarnation in earthly form of Vishnu or another Hindu deity.', 'Sam Worthington', new Genre('horror'));

$movies[]= new Movie('Titanic', 'The Titanic was designed by the Irish shipbuilder William Pirrie and built in Belfast, and was thought to be the world\'s fastest ship. It spanned 883 feet from stern to bow, and its hull was divided into 16 compartments that were presumed to be watertight.', 'Leonardo di Caprio', new Genre('horror'));       
    
    
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
            <div class="card my-4 p-2">


                <h1><?= $movie->title ?></h1>
                <h4 class="text-thin"><?= $movie->description?></h4>
                <h3><?=$movie->main_actor?></h3>

            </div>
        <? endforeach ?>
    </div>
</body>

</html>