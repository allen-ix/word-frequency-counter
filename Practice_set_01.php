<?php
/**
 * calculateTotalPrice - Calculates the total price of items in a shopping cart.
 *
 * @param array $items An array of items, each with 'name' and 'price' keys.
 *
 * @return float The total price of items in the shopping cart.
 */
function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

/**
 * modifyString - Removes spaces and converts a string to lowercase.
 *
 * @param string $inputString The input string to be modified.
 *
 * @return string The modified string.
 */
function modifyString(string $inputString): string {
    $modifiedString = str_replace(' ', '', $inputString);
    $modifiedString = strtolower($modifiedString);
    return $modifiedString;
}

/**
 * isEven - Checks if a number is even or odd.
 *
 * @param int $number The number to be checked.
 *
 * @return bool True if the number is even, false if it's odd.
 */
function isEven(int $number): bool {
    return ($number % 2 == 0);
}

// Shopping cart items
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

// Calculate and display the total price
$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice;

// String manipulation
$inputString = "This is a poorly written program with little structure and readability.";
$modifiedString = modifyString($inputString);
echo "\nModified string: " . $modifiedString;

// Check if a number is even or odd
$number = 42;
if (isEven($number)) {
    echo "\nThe number " . $number . " is even.";
} else {
    echo "\nThe number " . $number . " is odd.";
}
?>
