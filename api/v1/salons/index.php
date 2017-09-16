<?php
/**
 * Created by PhpStorm.
 * User: MOGA
 * Date: 2017-09-16
 * Time: 11:49 AM
 */

header("content-type: application/json; charset=utf-8");
include_once('../../../includes/configuration.php');
include_once "../../../includes/pazanan_autoloader.php";
include_once "../../../includes/classes/Table.php";
if (isset($_GET['fields'])) {
    $fields = $_GET['fields'];
}
echo Coliseum::getAllColiseum(...$fields);
