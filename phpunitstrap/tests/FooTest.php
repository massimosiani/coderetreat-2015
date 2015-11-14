<?php

class FooTest extends PHPUnit_Framework_TestCase
{
    public function testAddition()
    {
        $foo = new Foo(2, 3);
        $this->assertEquals(5, $foo->addition());
    }

    public function testMultiplication()
    {
        $foo = new Foo(3, 5);
        $this->assertEquals(15, $foo->multiplication());
    }
}
