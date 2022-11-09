<?php
//echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] != "POST"){
   echo json_encode(["error" => "metodo não autorizado utilize post"]);
    http_response_code(405);
}

?>