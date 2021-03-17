<?php

namespace App\FizzBuzz;

class FizzBuzz
{
    public function tombola($nombre)
    {
        if (is_numeric($nombre)) {
            return $nombre;
        } else {
            $excpetion = new \Exception("Le paramètre donné n'est pas un nombre");
            Throw $excpetion;
        }
    }
}