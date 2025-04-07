<?php

namespace App\Tests;

use App\Service\InterviewFile04;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class InterviewFile04Test extends KernelTestCase
{
    private ?InterviewFile04 $testService = null;

    protected function setUp(): void
    {
        $this->testService = new InterviewFile04();
    }


    public function testPrueba04()
    {
        $result = $this->testService->function04();
        $this->assertEquals(40, $result);

    }
}