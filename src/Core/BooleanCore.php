<?php

namespace Kucil\Components\Utilities\Core;

use Kucil\Components\Utilities\Contracts\BooleanInterface;

use function is_bool;

/**
 * @author  menyongmenying <menyongmenying.main@email.com>
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
        # Inisiasi
        $result = null;


        # Logika
        $result = is_bool($bool);


        # Penerusan Hasil
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
        # Inisiasi
        $result = null;


        # Logika
        $result = self::isBool($bool);


        # Penerusan Hasil
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
        # Inisiasi
        $result = null;


        # Logika
        $result = match ($bool) {
            null => null,
            true => 1,
            false => 0
        };
        

        # Penerusan Hasil
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
        # Inisiasi
        $result = null;


        # Logika
        $result = self::toInt($bool);


        # Penerusan Hasil
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
        # Inisiasi
        $result = null;


        # Logika
        $result = match ($bool) {
            null => null,
            true => 'true',
            false => 'false'
        };


        # Penerusan Hasil
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
        # Inisiasi
        $result = null;


        # Logika
        $result = self::toStr($bool);


        # Penerusan Hasil
        return $result;
    }
}