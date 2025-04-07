<?php

namespace App\Service;

abstract class ParentClass
{

    abstract function parentMethod();

    protected function getDefaultValue()
    {
        return 10;
    }
}