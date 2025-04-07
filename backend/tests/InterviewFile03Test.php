<?php

namespace App\Tests;

use App\Service\InterviewFile03;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class InterviewFile03Test extends KernelTestCase
{
    private ?InterviewFile03 $testService = null;

    protected function setUp(): void
    {
        $this->testService = new InterviewFile03();
    }


    public function testPrueba03(){
        $result = $this->testService->function03(
            [1, "1"],
            [0, false]
        );
        self::assertTrue($result);
    }

}