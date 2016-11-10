<?php

namespace Kata\MarsRover;

class PositionTest extends \PHPUnit_Framework_TestCase
{
    public function testCanRetrieveCoordinates() {
        $position = new Position(1, 2);
        self::assertEquals(1, $position->getX());
        self::assertEquals(2, $position->getY());
    }
}
