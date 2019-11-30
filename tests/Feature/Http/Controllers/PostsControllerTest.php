<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_post_image()
    {
        $this->actingAs(factory(User::class)->create([
            'name' => 'test name',
            'email' => 'test email',
            'username' => 'test username',
            'password' => '11111111',
        ]));

        $response = $this->json('POST', '/p', [
            'caption' => 'test caption',
            'image' => UploadedFile::fake()->image('avatar.jpg')
        ]);

        $response->assertStatus(302);
    }
}
