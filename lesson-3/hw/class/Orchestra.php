<?php

class Orchestra
{
    private $units = [];

    public function playComposition($composition)
    {
        for ($i = 0; $i < count($this->units); $i++) {
            $this->units[$i]->play();
        }
    }

    public function addUnit($unit)
    {
        array_push($this->units, $unit);
    }
} 