<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Unit\OperationsController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_addition_result(): void
    {
        $controller = new OperationsController;

        $result = $controller->addition(4, 9);
        $this->assertEquals(13, $result);
        $this->assertIsInt($result);
        $this->assertNotNull($result);
        $this->assertGreaterThan(0, $result);
    }
}
