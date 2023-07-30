<?php

include_once __DIR__ . '/Actor.php';

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
    public $cast;


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



    public function addActor(Actor $actor, string $role)
    {
        if ($actor instanceof Actor) {
            $this->cast[$role] = $actor;
        }
    }

    public function getCast()
    {
        return $this->cast;
    }


    public function getCastNames()
    {
        if ($this->cast) {
            $names = '';

            foreach ($this->cast as $role => $actor) {
                $names .= $role . ': ' . $actor->getFullName() . ',';
            }
            return substr($names, 0, -2);
        }
        return 'N.D.';
    }
}
