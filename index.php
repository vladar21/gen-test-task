<?php

require 'vendor/autoload.php'; // Include Composer's autoloader

use MyApp\PrimeNumberGenerator;

// Prompt the user for input
echo "Enter a whole number (N): ";
$n = readline();

// Validate user input
if (!is_numeric($n) || $n < 1) {
    echo "Invalid input. Please enter a positive whole number (N).\n";
    exit(1);
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
