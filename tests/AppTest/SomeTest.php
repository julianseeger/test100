<?php

class SomeTest extends \PHPUnit_Framework_TestCase
{
    public function testSomething()
    {
        $this->assertTrue(defined('MADE_BY_BOOTSTRAP'));
        $this->assertEquals('I was bootstrapped', MADE_BY_BOOTSTRAP);
    }
}

