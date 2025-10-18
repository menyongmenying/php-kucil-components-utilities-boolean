<?php

namespace Kucil\Components\Utilities\Contracts;

/**
 * @author Menyong Menying <menyongmenying.main@gmail.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
interface BooleanInterface
{
    /**
     * Meneruskan hasil pemeriksaan apakah nilai yang diberikan bertipe data boolean atau tidak.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  mixed $bool Nilai yang akan dijadikan objek pemeriksaan.
     *
     * @return ?bool       Hasil pemeriksaan apakah nilai $bool bertipe data boolean atau tidak.     
     * 
     * @see    BooleanUtilsTest::testIsBool()
     * 
     * 
     * 
     */
    public static function isBool(mixed $bool): ?bool;



    /**
     * Meneruskan hasil pemeriksaan apakah nilai yang diberikan bertipe data boolean atau tidak.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  mixed $bool Nilai yang akan dijadikan objek pemeriksaan.
     *
     * @return ?bool       Hasil pemeriksaan apakah nilai $bool bertipe data boolean atau tidak.     
     * 
     * @see    BooleanUtilsTest::testIsBoolean()
     * 
     * 
     * 
     */
    public static function isBoolean(mixed $bool): ?bool;



    /**
     * Meneruskan nilai boolean acak.
     *
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     * 
     * @return ?bool Nilai boolean acak.
     * 
     * @see    BooleanUtilsTest::testRandom()
     * 
     * 
     * 
     */
    public static function random(): ?bool;

    

    /**
     * Meneruskan hasil konversi boolean ke integer dari nilai boolean yang diberikan.
     * 
     * NOTE:
     * Jika nilai boolean yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?bool $bool Nilai boolean yang akan dijadikan objek konversi boolean ke integer.
     *
     * @return ?int        Hasil konversi boolean ke integer dari nilai $bool.
     * 
     * @see    BooleanUtilsTest::toInt()
     * 
     * 
     * 
     */
    public static function toInt(?bool $bool): ?int;



    /**
     * Meneruskan hasil konversi boolean ke integer dari nilai boolean yang diberikan.
     * 
     * NOTE:
     * Jika nilai boolean yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?bool $bool Nilai boolean yang akan dijadikan objek konversi boolean ke integer.
     *
     * @return ?int        Hasil konversi boolean ke integer dari nilai $bool.
     * 
     * @see    BooleanUtilsTest::toInteger()
     * 
     * 
     * 
     */
    public static function toInteger(?bool $bool): ?int;



    /**
     * Meneruskan hasil konversi boolean ke string dari nilai boolean yang diberikan.
     * 
     * NOTE:
     * Jika nilai boolean yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?bool   $bool Nilai boolean yang akan dijadikan objek konversi boolean ke string.
     *
     * @return ?string       Hasil konversi boolean ke string dari nilai $bool.
     * 
     * @see    BooleanUtilsTest::testToStr()
     * 
     * 
     * 
     */
    public static function toStr(?bool $bool): ?string;



    /**
     * Meneruskan hasil konversi boolean ke string dari nilai boolean yang diberikan.
     * 
     * NOTE:
     * Jika nilai boolean yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?bool   $bool Nilai boolean yang akan dijadikan objek konversi boolean ke string.
     *
     * @return ?string       Hasil konversi boolean ke string dari nilai $bool.
     * 
     * @see    BooleanUtilsTest::testToString()
     * 
     * 
     * 
     */
    public static function toString(?bool $bool): ?string;
}