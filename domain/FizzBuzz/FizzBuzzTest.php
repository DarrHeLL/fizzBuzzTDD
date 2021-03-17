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
            [3, "fizz"],
            [4, 4],
        ];
    }

    public function exceptionProvider()
    {
        return [
            ['a'],
            ['+'],
            ['@']
        ];
    }

    /**
     * @dataProvider tombolaProvider
     */
    public function testRetourneUnNombre($valeur, $attendu)
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals($fizzBuzz->tombola($valeur), $attendu, "Problème sur la vérification numéric");
    }


    /**
     * @dataProvider exceptionProvider
     */
    public function testRenvoiUneException($valeur)
    {
        $fizzBuzz = new FizzBuzz();

        $this->expectException(FizzBuzzException::class);
        $fizzBuzz->tombola($valeur);
    }
}
