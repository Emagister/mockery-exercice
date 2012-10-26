<?php

namespace Exercice1;

class DBConnection
{
    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $dbname;

    /**
     * @var resource
     */
    private $connection;

    public function __construct($dbname, $host, $password, $user)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->password = $password;
        $this->user = $user;
    }

    public function __destruct()
    {
        if (null !== $this->connection) {
            mysqli_close($this->connection);
            $this->connection = null;
        }
    }

    private function connect()
    {
        if (null === $this->connection) {
            $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);
        }
    }

    public function query($sql)
    {
        $this->connect();

        $q = mysqli_query($this->connection, $sql);
        $result = mysqli_fetch_assoc($q);
        mysqli_free_result($q);

        return $result;
    }
}