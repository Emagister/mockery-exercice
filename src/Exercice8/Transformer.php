<?php

namespace Exercice8;

class Transformer
{
    public function transform(\Exercice8\User $user)
    {
        if ('developer' == $user->getRole()) {
            return new \Exercice8\User\SysAdmin();
        } else {
            return new \Exercice8\User\Developer();
        }
    }
}