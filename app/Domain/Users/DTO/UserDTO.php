<?php

namespace Domain\Users\DTO;

use Support\Helpers\DTOBase;

class UserDTO extends DTOBase
{
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $password;
}
