<?php

class Movie {
    //add some attributes
    public $title;
    public $description;
    public $type = 'human'; //shared between instance


    public function __construct(string $title, string $description, string $main_actor)
    {
        $this->title = $title;
        $this->description = $description;
        $this->main_actor = $main_actor;
    }
}