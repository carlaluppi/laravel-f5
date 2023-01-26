<?php
namespace Tests\Feature;

#use Illuminate\Foundation\Testing\RefreshDatabase;
#use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    public function testHomeRoute()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertViewIs('home');
    }
  #visualization test de la homepage  
    public function testWelcomePage()
    {
    $response = $this->get('/welcome');
    $response->assertViewIs('welcome');
    $response->assertSee('Welcome to our website!');
    }
}