<?php

class Instruments implements MusicInstrument
{
    protected $ownSound = null;

    public function playOwnSound()
    {
        return $this->ownSound;
    }
} 