<?php

class Movie
{
    public $id;
    public $title;
    public $register;
    public $genre;
    public $year;
    public $village;
    public $duration;
    public $distribution;
    public $description;


    public function __construct($id, $title, $register, $genre, $year, $village, $duration, $distribution, $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->register = $register;
        $this->genre = $genre;
        $this->year = $year;
        $this->village = $village;
        $this->duration = $duration;
        $this->distribution = $distribution;
        $this->description = $description;
    }
};
