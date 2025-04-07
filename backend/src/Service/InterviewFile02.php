<?php

namespace App\Service;

class InterviewFile02
{
    /** Prueba 1 - Use as few characters as possible to pass the test Prueba02Test */
    public function function02()
    {
        $initialData = [1, 2, 3, 4];
        foreach ($initialData as $datum) {
            $datum **= 3;
        }
        return $initialData;
    }


}