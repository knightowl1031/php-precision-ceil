# KnightOwl1031/php-precision-ceil

A lightweight and pure PHP helper to accurately round numbers *up* to a specified decimal precision. This package addresses scenarios where PHP's native `ceil()` only rounds to the nearest whole integer, and `round()` doesn't offer a direct "always round up" mode to decimal places.

## Installation

You can install the package via Composer:

```bash
composer require knightowl1031/php-precision-ceil
```

## Usage
The package provides a static method ceilPrecision within the Precision helper class.

PHP
```php
<?php

require 'vendor/autoload.php'; // Include Composer's autoloader in your project

use KnightOwl1031\PhpPrecisionCeil\Helpers\Precision;

// --- ceilPrecision (Rounds up to specified decimal precision) ---
echo "--- ceilPrecision Examples ---" . PHP_EOL;
echo "12.341 rounded up to 2 decimal places: " . Precision::ceilPrecision(12.341, 2) . PHP_EOL; // Output: 12.35
echo "12.345 rounded up to 2 decimal places: " . Precision::ceilPrecision(12.345, 2) . PHP_EOL; // Output: 12.35
echo "12.349 rounded up to 2 decimal places: " . Precision::ceilPrecision(12.349, 2) . PHP_EOL; // Output: 12.35
echo "11.99 rounded up to 0 decimal places: " . Precision::ceilPrecision(11.99, 0) . PHP_EOL;   // Output: 12.0
echo "-12.345 rounded up to 2 decimal places: " . Precision::ceilPrecision(-12.345, 2) . PHP_EOL; // Output: -12.34 (towards zero/positive infinity)
echo "-11.9 rounded up to 0 decimal places: " . Precision::ceilPrecision(-11.9, 0) . PHP_EOL;   // Output: -11.0
echo "7.891 rounded up with default precision (2): " . Precision::ceilPrecision(7.891) . PHP_EOL; // Output: 7.90

echo PHP_EOL;

// --- floorPrecision (Rounds down to specified decimal precision) ---
echo "--- floorPrecision Examples ---" . PHP_EOL;
echo "12.349 rounded down to 2 decimal places: " . Precision::floorPrecision(12.349, 2) . PHP_EOL; // Output: 12.34
echo "12.345 rounded down to 2 decimal places: " . Precision::floorPrecision(12.345, 2) . PHP_EOL; // Output: 12.34
echo "12.341 rounded down to 2 decimal places: " . Precision::floorPrecision(12.341, 2) . PHP_EOL; // Output: 12.34
echo "12.01 rounded down to 0 decimal places: " . Precision::floorPrecision(12.01, 0) . PHP_EOL;   // Output: 12.0
echo "-12.341 rounded down to 2 decimal places: " . Precision::floorPrecision(-12.341, 2) . PHP_EOL; // Output: -12.35 (away from zero/negative infinity)
echo "-11.01 rounded down to 0 decimal places: " . Precision::floorPrecision(-11.01, 0) . PHP_EOL; // Output: -12.0

echo PHP_EOL;

// --- formatPrecision (Formats to precision as string, no rounding) ---
echo "--- formatPrecision Examples (returns string) ---" . PHP_EOL;
echo "12.345 formatted to 2 decimal places: " . Precision::formatPrecision(12.345, 2) . PHP_EOL; // Output: 12.34
echo "12.3 formatted to 2 decimal places: " . Precision::formatPrecision(12.3, 2) . PHP_EOL;   // Output: 12.30
echo "12.999 formatted to 0 decimal places: " . Precision::formatPrecision(12.999, 0) . PHP_EOL; // Output: 12
echo "12 formatted to 2 decimal places: " . Precision::formatPrecision(12, 2) . PHP_EOL;       // Output: 12.00

echo PHP_EOL;

// --- truncatePrecision (Truncates to precision as float) ---
echo "--- truncatePrecision Examples (returns float) ---" . PHP_EOL;
echo "12.345 truncated to 2 decimal places: " . Precision::truncatePrecision(12.345, 2) . PHP_EOL; // Output: 12.34
echo "12.999 truncated to 0 decimal places: " . Precision::truncatePrecision(12.999, 0) . PHP_EOL; // Output: 12.0
echo "-12.345 truncated to 2 decimal places: " . Precision::truncatePrecision(-12.345, 2) . PHP_EOL; // Output: -12.34
echo "-12.999 truncated to 0 decimal places: " . Precision::truncatePrecision(-12.999, 0) . PHP_EOL; // Output: -12.0
```

##Methods
`Precision::ceilPrecision(float $number, int $precision = 2): float`

`Precision::floorPrecision(float $number, int $precision = 2): float`

`Precision::formatPrecision(float $number, int $precision = 2): string`

`Precision::truncatePrecision(float $number, int $precision = 2): float`

##Parameters
`$number` (float): The number to process.
`$precision` (int): The number of decimal places to round/format/truncate to. Defaults to 2.

Contributing
Contributions are welcome! If you find a bug or have a suggestion, please open an issue or submit a pull request on the GitHub repository.

License
This package is open-sourced under the MIT License.
EOF