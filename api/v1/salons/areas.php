<?php
/**
 * Created by PhpStorm.
 * User: MOGA
 * Date: 2017-09-16
 * Time: 12:02 PM
 */
header("content-type: application/json; charset=utf-8");
include_once('../../../includes/configuration.php');
include_once "../../../includes/pazanan_autoloader.php";
include_once "../../../includes/classes/Table.php";
echo Coliseum::getAllAreas();
