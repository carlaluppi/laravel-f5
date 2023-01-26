<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class ForgotPasswordTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function testUserCanSeeForgotPasswordForm()
    {
        $response = $this->get('/password/reset');
        $response->assertStatus(200);
        $response->assertViewIs('auth.passwords.email');
    }

    public function testUserCanSubmitForgotPasswordForm()
    {
        $user = factory(User::class)->create();

        $response = $this->post('/password/email', [
            'email' => $user->email,
        ]);

        $response->assertStatus(302);
        $response->assertSessionHas('status', 'We have e-mailed your password reset link!');
    }

    public function testUserCannotSubmitForgotPasswordFormWithInvalidEmail()
    {
        $response = $this->post('/password/email', [
            'email' => 'invalid_email@example.com',
        ]);

        $response->assertSessionHasErrors();
    }
}