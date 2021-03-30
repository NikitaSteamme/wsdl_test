<?php

use StructType\AuthDTO;
use StructType\GetBalances;

error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('max_execution_time', 0);



$arg0 = new authDTO();
$arg0->apiName = "API_XD";
$arg0->accountEmail = "meshn@outlook.com";

$gmt = gmdate('Ymd:H');
$token = hash("sha256", "Qwerty123" . ':' . $gmt);

$arg0->authenticationToken = $token;

$getBalances = new getBalances();
$getBalances->arg0 = $arg0;

try {
    $getBalancesResponse = $getBalances;

    echo print_r($getBalancesResponse, true)."<br/><br/>";
} catch (Exception $e) {
    echo "ERROR MESSAGE => " . $e->getMessage() . "<br/>";
    echo $e->getTraceAsString();
}
?>