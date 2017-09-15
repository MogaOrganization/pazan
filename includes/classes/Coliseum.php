<?php

/**
 * Created by PhpStorm.
 * User: MOGA
 * Date: 2017-09-15
 * Time: 12:49 PM
 */
class Coliseum
{
    static function getAllColiseum(...$columns)
    {
        $string = "";
        foreach ($columns as $column) {
            $string .= ",$column";
        }
        $conn = Table::connect();
        $result = $conn->query("SELECT id $string FROM pazanan.coliseum");
        $array = $result->fetch_all(MYSQLI_ASSOC);
        Table::disconnect($conn, $result);
        return json_encode($array, JSON_UNESCAPED_UNICODE);
    }

    static function getColiseumById($id)
    {
        $conn = Table::connect();
        $result = $conn->query("SELECT * FROM pazanan.coliseum WHERE id = $id");
        $array = $result->fetch_all(MYSQLI_ASSOC);
        Table::disconnect($conn, $result);
        return json_encode($array, JSON_UNESCAPED_UNICODE);
    }

    static function getAllAreas()
    {
        $conn = Table::connect();
        $result = $conn->query("SELECT * FROM pazanan.area");
        $array = $result->fetch_all(MYSQLI_ASSOC);
        Table::disconnect($conn, $result);
        return json_encode($array, JSON_UNESCAPED_UNICODE);
    }

    static function getColiseumTimes($coliseumId)
    {
        $conn = Table::connect();
        $result = $conn->query("SELECT time.id, time.time, persisted, expires FROM pazanan.time JOIN pazanan.cart_item JOIN pazanan.cart ON time_item_id = cart_id AND cart_id = cart.id WHERE coliseum_id = 3 AND paid =1");
        $array = $result->fetch_all(MYSQLI_ASSOC);
        Table::disconnect($conn, $result);
        return json_encode($array, JSON_UNESCAPED_UNICODE);
    }


}