<?php

namespace Kata\MarsRover;

class Controller
{
    /** @var Rover */
    private $rover;

    public function __construct(Rover $rover)
    {
        $this->rover = $rover;
    }

    /**
     * @param array $commands
     * @throws NotImplementedException
     */
    public function processCommands($commands = array())
    {
        throw new NotImplementedException();
    }
}