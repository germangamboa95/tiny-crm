<?php

namespace Domain\Users\UserCases;

use Domain\Users\DTO\UserDTO;
use Domain\Users\Models\User;

class RegisterNewUser
{
    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function execute(UserDTO $userDTO): void
    {
        $newUser =  $this->user->create($userDTO->toArray());
    }
}
