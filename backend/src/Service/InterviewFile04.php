<?php

namespace App\Service;

class InterviewFile04 extends ParentClass
{

    public function function04()
    {
        /** contenido inmutable */
        return $this->parentMethod() * $this->getDefaultValue();
    }

    /** prueba 1 -> Use as few characters as possible to pass the test Prueba04Test */
    /** prueba 2 -> Use as few characters as possible to pass the test Prueba04Test when parentMethod returns 2 */

}