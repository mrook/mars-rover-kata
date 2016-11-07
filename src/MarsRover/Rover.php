<?php

namespace Kata\MarsRover;

class Rover
{
    /** @var Position */
    private $position;

    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param Position $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
}
