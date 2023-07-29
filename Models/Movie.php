<?php

class Movie
{
    public $id;
    public $title;
    public $register;
    public $year;
    public $village;
    public $duration;
    public $distribution;
    public $genre;
    public $description;


    public function __construct(int $id, string $title, string $register, int $year, string $village, string $duration, string $distribution, string $genre, string $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $register;
        $this->genre = $year;
        $this->genre = $village;
        $this->genre = $duration;
        $this->genre = $distribution;
        $this->genre = $genre;
        $this->genre = $description;
    }
};
