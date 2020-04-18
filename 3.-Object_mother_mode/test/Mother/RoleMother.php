<?php

use Faker\Factory;

class RoleMother
{
    public static function create(int $role)
    {
        return new Role($role);
    }

    public static function random()
    {
        return self::create(Factory::create()->numberBetween(1, 10));
    }
}
