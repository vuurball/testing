<?php
/*
class Test extends PHPUnit_Framework_TestCase
{
    public function testOnePlusOne() 
    {
        $this->assertEquals(1+1,2);
    }
}
*/
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}
