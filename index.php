<?php

class Genre {
    //definizione variabili d'istanza
    public $bho;

    //definizione costruttore
    public function __construct(string $_bho )
    {
        $this->bho = $_bho;
    }
}
class Movie {
    //definizione variabili d'istanza
    public $title;
    public $description;
    public $main_actor;
    public $Genre= 'adventure';//has a

    //definizione costruttore
    public function __construct(string $_title, string $_description, string $_main_actor, Genre $_genre)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->main_actor = $_main_actor;
        $this->Genre = $_genre;
    }

    //definizione metodo
   /*  public static function saySaSaSaProva()
    {
        return "SaSaSaProva";
    }   */  
}

$movie_1 = new Movie('Interstellar','Set in a future where a failing Earth puts humanity on the brink of extinction, it sees an intrepid team of NASA scientists, engineers and pilots attempt to find a new habitable planet, via interstellar travel.','Matthew McConaughey' ,new Genre('horror'));

$movie_2 = new Movie('Avatar','Avatar derives from a Sanskrit word meaning "descent," and when it first appeared in English in the late 18th century, it referred to the descent of a deity to the earth—typically, the incarnation in earthly form of Vishnu or another Hindu deity.','Sam Worthington' ,new Genre('horror'));

$movie_3 = new Movie('Titanic','The Titanic was designed by the Irish shipbuilder William Pirrie and built in Belfast, and was thought to be the world\'s fastest ship. It spanned 883 feet from stern to bow, and its hull was divided into 16 compartments that were presumed to be watertight.','Leonardo di Caprio' ,new Genre('horror'));

var_dump($movie_1, $movie_2, $movie_3);

