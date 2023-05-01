<?php

namespace Tests\Unit;

use Tests\TestCase;

class Register_Test extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_Register_form()
    {
        $responce =  $this->get('/register') ;

        $responce->assertStatus(200);
        


    }
}