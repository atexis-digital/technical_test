<?php

namespace App\Tests;

use App\Exceptions\UndefinedVariableCustomException;
use App\Service\InterviewFile05;
use App\Service\InterviewFile06;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class InterviewFile06Test extends KernelTestCase
{
    private ?InterviewFile06 $testService = null;

    protected function setUp(): void
    {
        $this->testService = new InterviewFile06();
    }


    public function testPrueba06()
    {

        $result = $this->testService->function06("1,2,3,4,5,6,7,8,9,10");

        self::assertEquals("2-4X4-8X6-12X8-16X10-20", $result);
    }
}