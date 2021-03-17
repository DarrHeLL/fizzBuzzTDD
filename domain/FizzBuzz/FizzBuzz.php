<?php

namespace App\FizzBuzz;

class FizzBuzz
{
    public function tombola($nombre)
    {
        if (is_numeric($nombre)) {
            return $nombre;
        } else {
            Throw new FizzBuzzException("Le paramètre donné n'est pas un nombre", 10001);
        }
    }
}