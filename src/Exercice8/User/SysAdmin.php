<?php

namespace Exercice8\User;

class SysAdmin implements \Exercice8\User
{
    function getRole()
    {
        return 'sysadmin';
    }

    public function puppetizeAll()
    {
        return 'OK!';
    }
}