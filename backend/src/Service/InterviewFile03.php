<?php

namespace App\Service;

class InterviewFile03
{
    /** Prueba 3 - Use as few characters as possible to pass the test Prueba03Test */
    public function function03(...$args)
    {
        foreach ($args as $datum) {
            [$a, $b] = $datum;

            if ($a == $b) {
                return false;
            }

        }
        return true;
    }
}