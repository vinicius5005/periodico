<?php
include_once ("vendor/autoload.php");

use App\Controller\CategoryClass;

if ($_SERVER['REQUEST_METHOD'] != "GET"){
   echo json_encode(["error" => "metodo não autorizado utilize post"]);
    http_response_code(405);
    exit;
}


$categoryClass = new CategoryClass();
$categoryClass->get();

?>