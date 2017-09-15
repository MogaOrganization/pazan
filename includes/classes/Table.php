<?php

/**
 * Created by PhpStorm.
 * User: MOGA
 * Date: 2017-04-24
 * Time: 4:33 PM
 */


class Table
{

    static function connect()
    {
        $conn = new mysqli(HOST_NAME, USER, PASS, DB_NAME);
        $conn->set_charset("utf8");
        return $conn;
    }

    static function disconnect($conn, $result = null)
    {
        if ($result != null) {
            $result->free();
        }
        $conn->close();
    }


}