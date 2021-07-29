<?php

namespace Kata\MarsRover;

use PHPUnit\Framework\TestCase;

class DirectionTest extends TestCase
{
    public function testDefaultInitialDirectionIsNorth() {
        $direction = new Direction();
        self::assertEquals(Direction::NORTH, $direction->getDirection());
    }
}
