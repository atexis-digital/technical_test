<?php

namespace App\Tests;

use App\Exceptions\UndefinedVariableCustomException;
use App\Service\InterviewFile05;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class InterviewFile05Test extends KernelTestCase
{
    private ?InterviewFile05 $testService = null;

    protected function setUp(): void
    {
        $this->testService = new InterviewFile05();
    }


    public function testPrueba05()
    {

        $this->expectException(UndefinedVariableCustomException::class);
        $this->testService->function05();

    }
}