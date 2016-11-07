<?php

namespace Kata\Test\MarsRover;

use Kata\MarsRover\Position;
use Kata\MarsRover\Rover;

class RoverTest extends \PHPUnit_Framework_TestCase
{
    public function testCanInitializePosition()
    {
        $rover = new Rover();
        $position = new Position(1, 2);
        $rover->setPosition($position);
        self::assertSame($position, $rover->getPosition());
    }
}