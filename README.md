# gen-test-task

This simple PHP application generates a multiplication table for the first N prime numbers.

## Requirements

- PHP 8.2.9

## Project Structure

```bash
gen-test-task/
│
├── src/
│   ├── PrimeNumberGenerator.php   # Class for generating prime numbers
│
├── tests/
│   ├── PrimeNumberGeneratorTest.php # Unit tests for the prime number generator
│
├── index.php                       # Main file for user input and output
│
├── composer.json                   # Dependency management file
├── composer.lock                   # Composer lock file (generated)
├── README.md                       # Project description and instructions
```
## Files

- `composer.json`: The Composer configuration file.
- `index.php`: The main application script that takes user input and generates the multiplication table.
- `src/PrimeNumberGenerator.php`: The class responsible for generating prime numbers.
- `tests/PrimeNumberGeneratorTest.php`: PHPUnit tests for the `PrimeNumberGenerator` class.

## Prime Number Generation Algorithm

The PrimeNumberGenerator class implements a simple prime number generation algorithm based on the Sieve of Eratosthenes method. Here's how it works:

1. Initialize an empty array primes to store the prime numbers.
2. Start with the first positive integer, which is 2, and mark it as a prime number.
3. For each positive integer num starting from 2:
    - If num is marked as a prime number in the primes array, continue to the next integer.
    - If num is not marked as a prime number, it is added to the primes array as a prime number.
    - Mark all multiples of num as non-prime numbers in the primes array.
4. Repeat step 3 for all positive integers up to the desired number of prime numbers (N) requested by the user.

This algorithm efficiently generates prime numbers by iteratively marking non-prime numbers using a process called "crossing off multiples." It ensures that only prime numbers are added to the primes array, and it continues this process until the desired number of prime numbers (N) is reached.

The generatePrimes($n) method in the PrimeNumberGenerator class implements this algorithm and returns an array containing the first N prime numbers, where N is the user's input.

By following this algorithm, the PrimeNumberGenerator class generates prime numbers without relying on external libraries or functions, as specified in the task requirements.

## Installation

Clone the repository to your local machine:

```bash
git clone https://github.com/vladar21/gen-test-task.git
```

Navigate to the project directory:

```bash
cd gen-test-task
```

Install Composer dependencies:

```bash
composer install
```

## Run

To generate a multiplication table for the first N prime numbers, use the following command:

```bash
php index.php
```

## Tests

You can run the PHPUnit tests to ensure the correctness of the `PrimeNumberGenerator` class. To run the tests, use the following command:

```bash
vendor/bin/phpunit tests/
```