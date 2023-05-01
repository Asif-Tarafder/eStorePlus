<?php

namespace Tests\Unit;

use Tests\TestCase;

class Login_Test extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $responce =  $this->get('/login') ;

        $responce->assertStatus(200);
    }

    public function test_duplicate()
    {
        $user1 =  User::make([
            'name' =>'Imtiaj',
            'email' => 'imtiaj@gmail.com'
        ]);

        $user2 =  User::make([
            'name' =>'Sad',
            'email' => 'sad@gmail.com'
        ]);
        
        $this->asserttrue($user1->name != $user2 ->name);
        
    }
    
}
