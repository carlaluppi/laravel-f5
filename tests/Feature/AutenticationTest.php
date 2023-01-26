<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

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

    public function testLogout()
    {
        $user = factory(\App\User::class)->create();

        // Perform a login request with valid credentials
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        // Perform a logout request
        $this->post("/logout");
        $this->isAuthenticated($user) === false;

    }
}