<?php

namespace Tests\Feature;

use Domain\Users\DTO\UserDTO;
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
     */
    public function it_can_register_a_new_user()
    {

        $user = [
            'firstName' => $this->faker()->firstName(),
            'lastName' => $this->faker()->lastName(),
            'email' => $this->faker()->email,
            'password' => $this->faker()->password()

        ];

        $registerNewUser = app()->make(RegisterNewUser::class);

        $userDTO = UserDTO::fromArray($user);

        dd($userDTO);

        $registerNewUser->execute($userDTO);
    }
}
