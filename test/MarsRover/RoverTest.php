<?php

namespace Kata\MarsRover;

class RoverTest extends \PHPUnit_Framework_TestCase
{
    public function testCanRetrieveInitializePosition()
    {
        $position = new Position(1, 2);
        $rover = new Rover($position, new Direction());
        self::assertSame($position, $rover->getPosition());
    }
    
    public function testCanRetrieveInitializeDirection()
    {
        $position = new Position(1, 2);
        $direction = new Direction(Direction::EAST);
        $rover = new Rover($position, $direction);
        self::assertSame($direction, $rover->getDirection());
    }
}
