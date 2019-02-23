<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelperTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function it_has_users_helper(){

        $this->assertTrue(function_exists('user'));

    }

    /** @test */
    public function it_return_abc(){
        $output = abc();
        $this->assertEquals('abc',$output);
    }
}
