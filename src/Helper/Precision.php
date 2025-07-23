<?php

namespace KnightOwl1031\PhpPrecisionCeil\Helpers;

class Precision
{
    /**
     * Rounds a number up to a specified decimal precision.
     *
     * @param float $number The number to round.
     * @param int $precision The number of decimal places to round to.
     * @return float The rounded number.
     */
    public static function ceilPrecision(float $number, int $precision = 2): float
    {
        $multiplier = pow(10, $precision);
        return ceil($number * $multiplier) / $multiplier;
    }
}