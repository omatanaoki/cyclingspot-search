<?php

namespace Tests\Feature;

use App\User;
use Storage;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function testRegister()
    {
        $user = factory(User::class)->create();

        Storage::fake('local');

        $file = UploadedFile::fake()->image('dummy.png', 800, 800);

        $email = 'test1234@example.com';

        $data = [
            'name' => $user->name,
            'email' => $email,
            'password' =>  $user->password,
            'password_confirmation' =>  $user->password,
            'thefile' => $file,
            'introduction' => $user->introduction,
        ];
       
        $response = $this->json('POST', route('signup.post'), $data);
  
        $response -> assertStatus(302);
    }
  
}

