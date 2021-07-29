<?php

namespace Kata\MarsRover;

use PHPUnit\Framework\TestCase;

class PositionTest extends TestCase
{
    public function testCanRetrieveCoordinates() {
        $position = new Position(1, 2);
        self::assertEquals(1, $position->getX());
        self::assertEquals(2, $position->getY());
    }
}
