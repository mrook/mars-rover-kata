<?php

namespace Kata\MarsRover;

class Direction
{
    const NORTH = 0;
    const EAST = 1;
    const SOUTH = 2;
    const WEST = 3;

    /**
     * @var int
     */
    private $direction;

    public function __construct($direction = self::NORTH) {
        $this->direction = $direction;
    }

    /**
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }
}