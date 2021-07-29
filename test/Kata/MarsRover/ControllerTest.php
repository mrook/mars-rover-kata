<?php

namespace Kata\MarsRover;

use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase;

class ControllerTest extends MockeryTestCase
{
    /** @var Rover */
    protected $rover;

    /** @var Controller */
    protected $controller;

    protected function setUp(): void
    {
        $this->rover = Mockery::mock(Rover::class);
        $this->controller = new Controller($this->rover);
    }

    public function testRoverCannotYetProcessCommands()
    {
        self::expectException(NotImplementedException::class);
        $this->controller->processCommands(array());
    }
}
