<?php

namespace MyApp;

class PrimeNumberGenerator
{
    /**
     * Generate the first N prime numbers.
     *
     * @param int $n The number of prime numbers to generate.
     * @return int[] An array containing the first N prime numbers.
     */
    public function generatePrimes(int $n): array
    {
        $primes = [];
        $candidate = 2;

        while (count($primes) < $n) {
            if ($this->isPrime($candidate)) {
                $primes[] = $candidate;
            }
            $candidate++;
        }

        return $primes;
    }

    /**
     * Check if a number is prime.
     *
     * @param int $number The number to check.
     * @return bool True if the number is prime, false otherwise.
     */
    public function isPrime(int $number): bool
    {
        if ($number <= 1) {
            return false;
        }

        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }

        return true;
    }
}
