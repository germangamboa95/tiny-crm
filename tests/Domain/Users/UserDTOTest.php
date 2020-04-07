<?php

namespace Tests\Feature;

use Domain\Users\DTO\UserDTO;
use Domain\Users\UserCases\RegisterNewUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserDTOTest extends TestCase
{

    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     * @test
     */
    public function it_can_be_made_from_array()
    {

        $user = [
            'firstName' => $this->faker()->firstName(),
            'lastName' => $this->faker()->lastName(),
            'email' => $this->faker()->email,
            'password' => $this->faker()->password()

        ];


        $userDTO = UserDTO::fromArray($user);

        $this->assertNotNull($userDTO);

        foreach ($user as $key => $value) {
            $this->assertEquals($value, $userDTO->$key);
        }
    }

    /**
     * A basic feature test example.
     *
     * @return void
     * @test
     */
    public function it_can_be_made_into_an_array()
    {

        $user = [
            'firstName' => $this->faker()->firstName(),
            'lastName' => $this->faker()->lastName(),
            'email' => $this->faker()->email,
            'password' => $this->faker()->password()

        ];


        $userDTO = UserDTO::fromArray($user);

        $arr = $userDTO->toArray();



        $this->assertNotNull($arr);
        $this->assertIsArray($arr);

        $this->assertEquals($user, $arr);
    }
}
