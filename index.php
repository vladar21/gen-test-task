<?php

require 'vendor/autoload.php'; // Include Composer's autoloader

use MyApp\PrimeNumberGenerator;

while (true) {
    // Prompt the user for input
    echo "Enter a whole number (N) or 'exit' to quit: ";
    $input = readline();

    // Check if the user wants to exit
    if (strtolower($input) === 'exit') {
        echo "Exiting the program.\n";
        exit(0);
    }

    // Validate user input
    if (!is_numeric($input) || $input < 1) {
        echo "Invalid input. Please enter a positive whole number (N) or 'exit' to quit.\n";
    } else {
        $n = (int)$input; // Convert valid input to integer
        break; // Exit the loop with valid input
    }
}

// Create a PrimeNumberGenerator instance
$primeGenerator = new PrimeNumberGenerator();

// Generate the first N prime numbers
$primes = $primeGenerator->generatePrimes($n);

// Output the multiplication table
echo "Multiplication table of the first $n prime numbers:\n";
echo "     ";
foreach ($primes as $prime) {
    printf("%4d", $prime);
}
echo "\n";

foreach ($primes as $prime1) {
    printf("%4d ", $prime1);
    foreach ($primes as $prime2) {
        printf("%4d", $prime1 * $prime2);
    }
    echo "\n";
}
