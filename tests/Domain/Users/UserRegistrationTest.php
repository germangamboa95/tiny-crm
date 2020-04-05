<?php

namespace Tests\Feature;

use Domain\Users\UserCases\RegisterNewUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegistration extends TestCase
{

    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     * @test
     */
    public function it_can_register_a_new_user()
    {

        $user = [
            'firstName' => $this->faker()->firstName
        ];

        dd($user);

        $registerNewUser = app()->make(RegisterNewUser::class);
    }
}
