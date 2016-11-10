<?php

namespace Kata\MarsRover;

class DirectionTest extends \PHPUnit_Framework_TestCase
{
    public function testDefaultInitialDirectionIsNorth() {
        $direction = new Direction();
        self::assertEquals(Direction::NORTH, $direction->getDirection());
    }
}
