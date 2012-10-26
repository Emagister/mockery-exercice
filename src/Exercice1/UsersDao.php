<?php

namespace Exercice1;

class UsersDao
{
    /**
     * @var DBConnection
     */
    private $db;

    public function __construct(DBConnection $db)
    {
        $this->db = $db;
    }

    public function findByEmail($email)
    {
        $sql = sprintf('SELECT * FROM users u WHERE u.email = "%s"', $email);
        $result = $this->db->query($sql);

        return new User($result);
    }
}