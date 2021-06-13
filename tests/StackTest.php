<?php

namespace Hexlet\Phpunit\Tests;

use Hexlet\Phpunit\Stack;
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testMainFlow(): void
    {
        $stack = Stack\make();
        Stack\push($stack, 'one');
        Stack\push($stack, 'two');

        $value1 = Stack\pop($stack);
        $this->assertEquals('two', $value1);
        $value2 = Stack\pop($stack);
        $this->assertEquals('one', $value2);
    }

    public function testIsEmpty(): void
    {
        $stack = Stack\make();
        $this->assertTrue(Stack\isEmpty($stack));
        Stack\push($stack, 'one');
        $this->assertFalse(Stack\isEmpty($stack));
        Stack\pop($stack);
        $this->assertTrue(Stack\isEmpty($stack));
    }

//    public function testPop(): void
//    {
//        // Ожидание ставится до вызова кода
//        $this->expectException(Exception::class);
//
//        $stack = Stack\make();
//        Stack\pop($stack); // Boom!
//    }
}
