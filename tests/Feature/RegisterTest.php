<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRegister()
    {
      $response = $this->withHeaders([
          'X-Header' => 'Value',
      ])->json('POST', '/api/register', ['firstname' => 'Foo',
                                         'lastname' => 'Bar',
                                         'email' => 'foo@bar.com',
                                         'password' => 'hellofoobar',
                                         'password_confirmation' => 'hellofoobar']);

        $response->assertJson([
          'success' => true
        ]);
    }

    public function testWrongEmail()
    {
      $response = $this->withHeaders([
          'X-Header' => 'Value',
      ])->json('POST', '/api/register', ['firstname' => 'Foo',
                                         'lastname' => 'Bar',
                                         'email' => 'foo@',
                                         'password' => 'hellofoobar',
                                         'password_confirmation' => 'hellofoobar']);
        $response->assertJson([
          'error' => true
        ]);
    }

    public function testWrongShortPassword()
    {
      $response = $this->withHeaders([
          'X-Header' => 'Value',
      ])->json('POST', '/api/register', ['firstname' => 'Foo',
                                         'lastname' => 'Bar',
                                         'email' => 'foo@wrongpassword.com',
                                         'password' => 'hello',
                                         'password_confirmation' => 'hello']);
        $response->assertJson([
          'error' => true
        ]);
    }

    public function testWrongPasswordConfirmation()
    {
      $response = $this->withHeaders([
          'X-Header' => 'Value',
      ])->json('POST', '/api/register', ['firstname' => 'Foo',
                                         'lastname' => 'Bar',
                                         'email' => 'foo@wrongpassword.com',
                                         'password' => 'hello',
                                         'password_confirmation' => 'foobar']);
        $response->assertJson([
          'error' => true
        ]);
    }
}
