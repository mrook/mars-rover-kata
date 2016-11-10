<?php

namespace Kata\MarsRover;

class RoverTest extends \PHPUnit_Framework_TestCase
{
    /** @var Position */
    protected $position;

    /** @var Direction */
    protected $direction;

    /** @var Rover */
    protected $rover;

    protected function setUp()
    {
        $this->position = new Position(1, 2);
        $this->direction = new Direction(Direction::EAST);
        $this->rover = new Rover($this->position, $this->direction);
    }

    public function testCanRetrieveInitializePosition()
    {
        self::assertSame($this->position, $this->rover->getPosition());
    }
    
    public function testCanRetrieveInitializeDirection()
    {
        self::assertSame($this->direction, $this->rover->getDirection());
    }

    public function testRoverCannotYetProcessCommands()
    {
        self::expectException(NotImplementedException::class);
        $this->rover->processCommands(array());
    }

    public function testRoverCannotYetMoveForward()
    {
        self::expectException(NotImplementedException::class);
        $this->rover->moveForward();
    }

    public function testRoverCannotYetMoveBackward()
    {
        self::expectException(NotImplementedException::class);
        $this->rover->moveBackward();
    }

    public function testRoverCannotYetTurnLeft()
    {
        self::expectException(NotImplementedException::class);
        $this->rover->turnLeft();
    }

    public function testRoverCannotYetTurnRight()
    {
        self::expectException(NotImplementedException::class);
        $this->rover->turnRight();
    }
}
