<?php

namespace App\Service;

use App\Exceptions\UndefinedVariableCustomException;

class InterviewFile05
{
    /** Prueba 5 - Test 'Prueba05Test' needs to assert that UndefinedVariableCustomException is thrown in this function */

    public function function05()
    {
        /** error */ $undefinedVariable ++;
    }
}