<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 51');

        $this->visit('/comment')
            ->click('Click Me')
            ->see('Thank You')
            ->seePageIs('feedback');
    }

    public function testSummation()
    {
        $this->visit('/calc/35/55')
            ->see('90');
    }
}
