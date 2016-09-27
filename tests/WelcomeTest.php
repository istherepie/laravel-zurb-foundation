<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WelcomeTest extends TestCase
{
    /**
     * Testing the default 'Hello Beautiful World' page
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('freshly made piecrust');
    }
}
