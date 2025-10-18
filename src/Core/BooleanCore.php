<?php

namespace Kucil\Components\Utilities\Core;

use Kucil\Components\Utilities\Contracts\BooleanInterface;

use function is_bool;
use function rand;

/**
 * @author  Menyong Menying <menyongmenying.main@gmail.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
abstract class BooleanCore implements BooleanInterface
{
    /**
     * @see BooleanUtilsTest::testIsBool()
     * 
     * 
     * 
     */
    public static function isBool(mixed $bool = null): ?bool
    {
        # DATA
        $result = null;


        # CODE
        $result = is_bool($bool);

        return $result;
    }

    

    /**
     * @see BooleanUtilsTest::testIsBoolean()
     * 
     * 
     * 
     */
    public static function isBoolean(mixed $bool = null): ?bool
    {
        # DATA
        $result = null;


        # CODE
        $result = self::isBool($bool);

        return $result;
    }



    /**
     * @see BooleanUtilsTest::testRandom()
     * 
     * 
     * 
     */
    public static function random(): ?bool
    {
        # DATA
        $result = null;
        $min = 0;
        $max = 1;


        # CODE
        $result = (bool) rand($min, $max);

        return $result;
    }



    /**
     * @see BooleanUtilsTest::testToInt()
     * 
     * 
     * 
     */
    public static function toInt(mixed $bool = null): ?int
    {
        # DATA
        $result = null;


        # CODE
        if ($bool === null) {
            return $result;
        }

        $result = (int) $bool;

        return $result;
    }



    /**
     * @see BooleanUtilsTest::testToInteger()
     * 
     * 
     * 
     */
    public static function toInteger(?bool $bool = null): ?int
    {
        # DATA
        $result = null;


        # CODE
        $result = self::toInt($bool);

        return $result;
    }



    /**
     * @see BooleanUtilsTest::testToStr()
     * 
     * 
     * 
     */
    public static function toStr(?bool $bool = null): ?string
    {
        # DATA
        $result = null;
        $stringMap = require __DIR__ . '/../Mapping/booleanStringMap.php';


        # CODE
        if ($bool === null) {
            return $result;
        }

        $result = $stringMap[$bool];

        return $result;
    }



    /**
     * @see BooleanUtilsTest::testToString()
     * 
     * 
     * 
     */
    public static function toString(?bool $bool = null): ?string
    {
        # DATA
        $result = null;


        # CODE
        $result = self::toStr($bool);

        return $result;
    }
}