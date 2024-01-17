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

    public function testIsPrime(): void
    {
        $generator = new PrimeNumberGenerator();

        $this->assertTrue($generator->isPrime(2));
        $this->assertTrue($generator->isPrime(3));
        $this->assertTrue($generator->isPrime(5));
        $this->assertTrue($generator->isPrime(7));

        $this->assertFalse($generator->isPrime(1));
        $this->assertFalse($generator->isPrime(4));
        $this->assertFalse($generator->isPrime(9));
    }

}
