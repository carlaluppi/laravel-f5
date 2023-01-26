<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function testLogin()
    {
        // Create a user
        $user = factory(\App\User::class)->create();

        // Perform a login request with valid credentials
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        // Assert that the user is redirected to the dashboard page
        $response->assertRedirect('/dashboard');

        // Assert that the user is logged in
        $this->assertAuthenticatedAs($user);
    }

    public function testLoginFailed()
    {
        // Perform a login request with invalid credentials
        $response = $this->post('/login', [
            'email' => 'invalid@email.com',
            'password' => 'invalid'
        ]);

        // Assert that the user is not logged in
        $this->assertGuest();

        // Assert that the user is redirected back to the login page
        $response->assertRedirect('/login');

        // Assert that an error message is displayed
        $response->assertSessionHasErrors('email');
    }
}