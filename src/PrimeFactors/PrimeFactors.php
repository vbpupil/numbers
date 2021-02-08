<?php


namespace App\PrimeFactors;


class PrimeFactors
{

    /**
     * working out prime numbers
     * @param int $number
     * @return array
     */
    public function generate(int $number): array
    {
        $factors = [];

        for ($divisor = 2; $number > 1; $divisor++) {
            for (; $number % $divisor === 0; $number /= $divisor) {
                $factors[] = $divisor;
            }

        }

        return $factors;
    }
}