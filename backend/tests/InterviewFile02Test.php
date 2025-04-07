<?php

namespace App\Tests;

use App\Service\InterviewFile02;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class InterviewFile02Test extends KernelTestCase
{
    private ?InterviewFile02 $testService = null;

    protected function setUp(): void
    {
        $this->testService = new InterviewFile02();
    }

    public function testPrueba02()
    {
        $result = $this->testService->function02();

        self::assertEquals([1, 8, 27, 64], $result);
    }
}