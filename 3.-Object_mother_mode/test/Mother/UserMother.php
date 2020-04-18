<?php


class UserMother
{
    public static function create(UserId $id, UserName $name, Role $role)
    {
        return new User($id, $name, $role);
    }

    public static function withId(UserId $id)
    {
        return self::create($id, UserNameMother::random(), RoleMother::random());
    }

    public static function withValues(string $id, string $name, int $accessLevel)
    {
        return self::create(
            UserIdMother::create($id),
            UserNameMother::create($name),
            RoleMother::create($accessLevel)
        );
    }

    public static function withThisRole(int $role)
    {
        return self::create(UserIdMother::random(), UserNameMother::random(), RoleMother::create($role));
    }

    public static function random()
    {
        return self::create(UserIdMother::random(), UserNameMother::random(), RoleMother::random());
    }
}
