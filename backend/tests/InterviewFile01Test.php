<?php

namespace App\Tests;

use App\Service\InterviewFile01;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class InterviewFile01Test extends KernelTestCase
{
    private ?InterviewFile01 $testService = null;

    protected function setUp(): void
    {
        $this->testService = new InterviewFile01();
    }

    public function test_function_01()
    {
        $result = $this->testService->function_01();

        self::assertTrue($result);
    }


}