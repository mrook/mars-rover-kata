<?php

namespace Kata\MarsRover;

class Rover
{
    /**
     * @var Position
     */
    private $position;

    /**
     * @var Direction
     */
    private $direction;
    
    public function __construct(Position $initialPosition, Direction $initialDirection) {
        $this->position = $initialPosition;
        $this->direction = $initialDirection;
    }
    
    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return Direction
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param array $commands
     * @throws NotImplementedException
     */
    public function processCommands($commands = array())
    {
        throw new NotImplementedException();
    }

    public function moveForward()
    {
        throw new NotImplementedException();
    }

    public function moveBackward()
    {
        throw new NotImplementedException();
    }

    public function turnLeft()
    {
        throw new NotImplementedException();
    }

    public function turnRight()
    {
        throw new NotImplementedException();
    }
}
