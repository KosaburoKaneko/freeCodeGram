<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_redirect_if_user_not_logged_in()
    {
        $response = $this->get('/')->assertRedirect('/login');
    }

    public function test_only_logged_in_user_can_see_homepage()
    {
        $this->actingAs(factory(User::class)->create([
            'name' => 'test name',
            'email' => 'test email',
            'username' => 'test username',
            'password' => '11111111',
        ]));

        $response = $this->get('/');
        $response->assertOk();
    }
}
