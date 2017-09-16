<?php
/**
 * Created by PhpStorm.
 * User: MOGA
 * Date: 2017-09-15
 * Time: 1:04 PM
 */
header("content-type: application/json; charset=utf-8");
include_once('includes/configuration.php');
include_once "includes/pazanan_autoloader.php";
include_once "includes/classes/Table.php";
//echo Coliseum::getAllColiseum("name", "area_id");
//echo Coliseum::getColiseumById(3);
//echo Coliseum::getAllAreas();
echo Coliseum::getColiseumTimes(3);