<?php

class Composition
{
    private $name = null;
    private $requiredInstruments = mull;

    public function __construct($name, $requiredInstruments)
    {
        $this->name = $name;
        $this->requiredInstruments = $requiredInstruments;
    }
} 