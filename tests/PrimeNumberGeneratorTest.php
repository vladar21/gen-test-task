<?php

namespace MyApp\Tests;

use MyApp\PrimeNumberGenerator;
use PHPUnit\Framework\TestCase;

class PrimeNumberGeneratorTest extends TestCase
{
    public function testGeneratePrimes(): void
    {
        $generator = new PrimeNumberGenerator();
        $primes = $generator->generatePrimes(5);

        $this->assertEquals([2, 3, 5, 7, 11], $primes);
    }

}
