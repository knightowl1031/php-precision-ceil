<?php

namespace KnightOwl\PhpPrecisionCeil\Helpers;

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

    /**
     * Rounds a number down to a specified decimal precision.
     *
     * @param float $number The number to round.
     * @param int $precision The number of decimal places to round to.
     * @return float The rounded number.
     */
    public static function floorPrecision(float $number, int $precision = 2): float
    {
        $multiplier = pow(10, $precision);
        return floor($number * $multiplier) / $multiplier;
    }

    /**
     * Formats a number to a specified decimal precision without rounding.
     * Note: This function returns a string.
     *
     * @param float $number The number to format.
     * @param int $precision The number of decimal places to format to.
     * @return string The formatted number as a string.
     */
    public static function formatPrecision(float $number, int $precision = 2): string
    {
        // number_format does not round by default, it just formats.
        // If the number has more precision than specified, it effectively truncates
        // or adds trailing zeros to meet the precision.
        return number_format($number, $precision, '.', ''); // Using '.' as decimal separator, no thousands separator
    }

    /**
     * Truncates a number to a specified decimal precision.
     * This function returns a float, effectively chopping off extra decimals.
     *
     * @param float $number The number to truncate.
     * @param int $precision The number of decimal places to truncate to.
     * @return float The truncated number.
     */
    public static function truncatePrecision(float $number, int $precision = 2): float
    {
        $multiplier = pow(10, $precision);
        // Using floor for positive numbers and ceil for negative numbers to truncate towards zero
        if ($number >= 0) {
            return floor($number * $multiplier) / $multiplier;
        } else {
            return ceil($number * $multiplier) / $multiplier;
        }
    }
}