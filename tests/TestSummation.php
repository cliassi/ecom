<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SummationTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testSummation()
    {
        $this->visit('/calc/-45/558')
            ->see('100');
    }
}
