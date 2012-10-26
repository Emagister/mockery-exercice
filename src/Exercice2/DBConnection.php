<?php

namespace Exercice2;

class DBConnection
{
    /**
     * @var string
     */
    private static $host;

    /**
     * @var string
     */
    private static $user;

    /**
     * @var string
     */
    private static $password;

    /**
     * @var string
     */
    private static $dbname;

    /**
     * @var resource
     */
    private static $connection;

    /**
     * @param string $dbname
     */
    public static function setDbname($dbname)
    {
        self::$dbname = $dbname;
    }

    /**
     * @return string
     */
    public static function getDbname()
    {
        return self::$dbname;
    }

    /**
     * @param string $host
     */
    public static function setHost($host)
    {
        self::$host = $host;
    }

    /**
     * @return string
     */
    public static function getHost()
    {
        return self::$host;
    }

    /**
     * @param string $password
     */
    public static function setPassword($password)
    {
        self::$password = $password;
    }

    /**
     * @return string
     */
    public static function getPassword()
    {
        return self::$password;
    }

    /**
     * @param string $user
     */
    public static function setUser($user)
    {
        self::$user = $user;
    }

    /**
     * @return string
     */
    public static function getUser()
    {
        return self::$user;
    }

    public static function close()
    {
        if (null !== self::$connection) {
            mysqli_close(self::$connection);
            self::$connection = null;
        }
    }

    private static function connect()
    {
        if (null === self::$connection) {
            self::$connection = mysqli_connect(self::$host, self::$user, self::$password, self::$dbname);
        }
    }

    public static function query($sql)
    {
        self::connect();

        $q = mysqli_query(self::$connection, $sql);
        $result = mysqli_fetch_assoc($q);
        mysqli_free_result($q);

        return $result;
    }
}