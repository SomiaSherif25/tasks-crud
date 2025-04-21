<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    /** @test */
    public function authenticated_user_test(){
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->assertTrue(Auth::check());
        $this->assertEquals($user->id, Auth::id());
    }

}
