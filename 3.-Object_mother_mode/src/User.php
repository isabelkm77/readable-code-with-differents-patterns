<?php

use PHPUnit\Framework\TestCase;

class User
{
    private const MIN_ROLE_TO_ADMIN = 2;

    private $id;
    private $name;
    private $role;

    /**
     * User constructor.
     * @param UserId $id
     * @param UserName $name
     * @param Role $role
     */
    public function __construct( UserId $id, UserName $name, Role $role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->role = $role;
    }


    public function canManageAsAdmin(): bool
    {
        return $this->role >= self::MIN_ROLE_TO_ADMIN;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }

}
