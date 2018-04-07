<?php

namespace Tests\Unit;

use MyApp\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testSay()
    {
        $this->assertEquals('Hello', Hello::say());
    }
}
