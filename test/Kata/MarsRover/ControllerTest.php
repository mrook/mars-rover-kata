<?php

namespace Kata\MarsRover;

use Prophecy\Prophecy\ObjectProphecy;

class ControllerTest extends \PHPUnit_Framework_TestCase
{
    /** @var ObjectProphecy */
    protected $rover;

    /** @var Controller */
    protected $controller;

    protected function setUp()
    {
        $this->rover = self::prophesize(Rover::class);
        $this->controller = new Controller($this->rover->reveal());
    }

    public function testRoverCannotYetProcessCommands()
    {
        self::expectException(NotImplementedException::class);
        $this->controller->processCommands(array());
    }
}
