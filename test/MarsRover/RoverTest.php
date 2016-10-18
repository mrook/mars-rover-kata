<?php

namespace Kata\Test\MarsRover;

use Kata\MarsRover\Rover;

class RoverTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateRoverObject()
    {
        $rover = new Rover();
        self::assertInstanceOf(Rover::class, $rover);
    }
}