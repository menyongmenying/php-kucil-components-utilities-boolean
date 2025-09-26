<?php

use Kucil\Components\Utilities\BooleanUtils;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * @author menyongmenying <menyongmenying.main@email.com>
 */
class BooleanUtilsTest extends TestCase
{
    #[Test]
    public function testIsBool(): void
    {
        $this->assertTrue(BooleanUtils::isBool(true), 'test-1');
        $this->assertTrue(BooleanUtils::isBool(false), 'test-2');
        $this->assertFalse(BooleanUtils::isBool(1), 'test-3');
        $this->assertFalse(BooleanUtils::isBool('true'), 'test-4');
        $this->assertFalse(BooleanUtils::isBool(null), 'test-5');
        $this->assertFalse(BooleanUtils::isBool([]), 'test-6');
        $this->assertFalse(BooleanUtils::isBool(new \stdClass()), 'test-7');

        return;
    }



    #[Test]
    public function testIsBoolean(): void
    {
        $this->assertTrue(BooleanUtils::isBoolean(true), 'test-1');
        $this->assertTrue(BooleanUtils::isBoolean(false), 'test-2');
        $this->assertFalse(BooleanUtils::isBoolean(0), 'test-3');
        $this->assertFalse(BooleanUtils::isBoolean('false'), 'test-4');
        $this->assertFalse(BooleanUtils::isBoolean(null), 'test-5');

        return;
    }



    #[Test]
    public function testRandom(): void
    {
        $this->assertIsBool(BooleanUtils::random(), 'test-1');
        $this->assertIsBool(BooleanUtils::random(), 'test-2');
        $this->assertIsBool(BooleanUtils::random(), 'test-3');
        
        return;
    }



    #[Test]
    public function testToInt(): void
    {
        $this->assertSame(1, BooleanUtils::toInt(true), 'test-1');
        $this->assertSame(0, BooleanUtils::toInt(false), 'test-2');
        $this->assertNull(BooleanUtils::toInt(null), 'test-3');

        return;
    }



    #[Test]
    public function testToInteger(): void
    {
        $this->assertSame(1, BooleanUtils::toInteger(true), 'test-1');
        $this->assertSame(0, BooleanUtils::toInteger(false), 'test-2');
        $this->assertNull(BooleanUtils::toInteger(null), 'test-3');

        return;
    }



    #[Test]
    public function testToStr(): void
    {
        $this->assertSame('true', BooleanUtils::toStr(true), 'test-1');
        $this->assertSame('false', BooleanUtils::toStr(false), 'test-2');
        $this->assertNull(BooleanUtils::toStr(null), 'test-3');

        return;
    }



    #[Test]
    public function testToString(): void
    {
        $this->assertSame('true', BooleanUtils::toString(true), 'test-1');
        $this->assertSame('false', BooleanUtils::toString(false), 'test-2');
        $this->assertNull(BooleanUtils::toString(null), 'test-3');

        return;
    }
}