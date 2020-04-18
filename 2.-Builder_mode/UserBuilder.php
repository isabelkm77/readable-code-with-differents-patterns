<?php

 class UserBuilder
{
    private $id;
    private $name;
    private $role;

    /**
     * User constructor.
     * @param $id
     * @param $name
     * @param $role
     */
    public function __construct()
    {
        $this->id = 'some-id';
        $this->name = 'some-name';
        $this->role = 4;
    }

     /**
      * @param int $role
      * @return $this
      */
    public function withThisRole (int $role)
    {
        $this->role = $role;
        return $this;
    }

    public function build()
    {
        return new User($this->id,$this->name,$this->role);
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
}
