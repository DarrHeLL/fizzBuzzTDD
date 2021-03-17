<?php

namespace App\FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function tombolaProvider()
    {
        return [
            [0, 0],
            [1, 1],
            [2, 2],
            [3, 3],
            [4, 4],
        ];
    }

    /**
     * @dataProvider tombolaProvider
     */
    public function testFizzBuzz($valeur, $attendu)
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals($fizzBuzz->tombola($valeur), $valeur, "Problème sur la berification numéric");
    }
}
