<?php

namespace Exercice8\User;

class Developer implements \Exercice8\User
{
    public function getRole()
    {
        return 'developer';
    }
}