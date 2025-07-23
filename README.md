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

<?php

// Make sure to include Composer's autoloader in your project's main script
require 'vendor/autoload.php';

use KnightOwl1031\PhpPrecisionCeil\Helpers\Precision; // Use your helper class

// Example 1: Round 12.341 up to 2 decimal places (expected: 12.35)
$result1 = Precision::ceilPrecision(12.341, 2);
echo "12.341 rounded up to 2 decimal places: " . $result1 . PHP_EOL;

// Example 2: Round 12.345 up to 2 decimal places (expected: 12.35)
$result2 = Precision::ceilPrecision(12.345, 2);
echo "12.345 rounded up to 2 decimal places: " . $result2 . PHP_EOL;

// Example 3: Round 12.349 up to 2 decimal places (expected: 12.35)
$result3 = Precision::ceilPrecision(12.349, 2);
echo "12.349 rounded up to 2 decimal places: " . $result3 . PHP_EOL;

// Example 4: Round 11.99 up to 0 decimal places (expected: 12.0)
$result4 = Precision::ceilPrecision(11.99, 0);
echo "11.99 rounded up to 0 decimal places: " . $result4 . PHP_EOL;

// Example 5: Handle negative numbers (ceil rounds towards positive infinity, so towards zero for negatives)
$result5 = Precision::ceilPrecision(-12.345, 2);
echo "-12.345 rounded up to 2 decimal places: " . $result5 . PHP_EOL; // Output: -12.34

$result6 = Precision::ceilPrecision(-11.9, 0);
echo "-11.9 rounded up to 0 decimal places: " . $result6 . PHP_EOL; // Output: -11.0

// Example 7: Using default precision (2 decimal places)
$result7 = Precision::ceilPrecision(7.891);
echo "7.891 rounded up with default precision: " . $result7 . PHP_EOL; // Output: 7.90
Parameters
$number (float): The number to round.

$precision (int): The number of decimal places to round to. Defaults to 2.

Contributing
Contributions are welcome! If you find a bug or have a suggestion, please open an issue or submit a pull request on the GitHub repository.

License
This package is open-sourced under the MIT License.
EOF