<?php

namespace Exercice2;

class User
{
    private $id;
    private $email;
    private $password;

    public function __construct($result)
    {
        $this->setId($result['id']);
        $this->setEmail($result['email']);
        $this->setPassword($result['password']);
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }
}