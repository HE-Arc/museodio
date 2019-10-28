<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLogin()
    {
      $response = $this->withHeaders([
          'X-Header' => 'Value',
      ])->json('POST', '/api/register', ['firstname' => 'Login',
                                         'lastname' => 'Test',
                                         'email' => 'login@test.com',
                                         'password' => 'hellologintest',
                                         'password_confirmation' => 'hellologintest']);

        $response->assertJson([
          'success' => true
        ]);


        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/api/login', ['email' => 'login@test.com',
                                           'password' => 'hellologintest',
                                           'email' => 'login@test.com']);

          $response->assertJsonStructure([
            'success' => [
              'token'
            ]
          ]);
    }
}
