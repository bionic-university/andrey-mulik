<?php

class Musician
{
    private $name       = null;
    private $lastName   = null;
    private $level      = null;
    private $instrument = null;

    public function __construct($person, $instrument)
    {
        $this->name     = $person[0];
        $this->lastName = $person[1];
        $this->level    = $person[2];

        $this->instrument = new $instrument;
    }

    public function play()
    {
        $sound = $this->instrument->playOwnSound();
        return $sound;
    }
} 