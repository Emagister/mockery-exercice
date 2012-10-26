<?php

namespace Exercice2;

class UsersDao
{
    public function findByEmail($email)
    {
        $sql = sprintf('SELECT * FROM users u WHERE u.email = "%s"', $email);
        $result = DBConnection::query($sql);

        return new User($result);
    }

    public function findById($id)
    {
        $sql = sprintf('SELECT * FROM users u WHERE u.id = %d', $id);
        $result = DBConnection::query($sql);

        return new User($result);
    }
}