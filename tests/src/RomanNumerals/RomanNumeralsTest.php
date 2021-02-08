<?php


namespace Tests\RomanNumerals;


use App\RomanNumerals\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{

    /**
     * @test
     * @dataProvider numerals
     */
    public function it_returns_roman_numeral($number, $numeral)
    {
        $this->assertEquals($numeral, RomanNumerals::generate($number));
    }

    public function numerals()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [40, 'XL'],
            [50, 'L'],
            [90, 'XC'],
            [100, 'C'],
            [400, 'CD'],
            [500, 'D'],
            [900, 'CM'],
            [1000, 'M'],
            [3999, 'MMMCMXCIX'],

        ];
    }
}