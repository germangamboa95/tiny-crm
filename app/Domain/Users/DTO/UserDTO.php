<?php

namespace Domain\Users\DTO;


class UserDTO
{
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $password;



    public static function fromArray(array $arr)
    {

        $instance = new self();

        $instance->mapToValues($arr);

        return $instance;
    }

    protected function mapToValues($arr)
    {
        $props =  $this->getProps();

        foreach ($props as $key => $prop) {
            $this->$key = $arr[$key];
        }
    }

    protected function getProps()
    {
        return get_class_vars(self::class);
    }
}
