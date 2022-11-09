<?php
include_once ("vendor/autoload.php");

use App\Controller\CategoryClass;

if ($_SERVER['REQUEST_METHOD'] != "POST"){
   echo json_encode(["error" => "metodo não autorizado utilize post"]);
    http_response_code(405);
    exit;
}

$categoryName = $_POST["categoryName"];
$categoryDescription = $_POST["categoryDescription"];

if (!$categoryName) {
    echo json_encode(["error" => "Você deve enviar um categoryName"]);
    http_response_code(400);
    exit;
}

$categoryClass = new CategoryClass();
$categoryClass->save($categoryName, $categoryDescription);

?>