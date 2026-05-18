<?php

$pageTitle = "RollOff";
$customStyles = [];
$customScripts = [];
require "validator.php";
if (!Validator::number($_POST["id"], min:1)) {
    redirectIfNotFound();
}
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $sql_querry = "DELETE FROM fruits WHERE id = :id";
    $params = ["id" => $_POST["id"]];
    $fruits = $db->query($sql_querry, $params);
    http_response_code(200);
    header("Location: /");
    exit();
}
else {
    redirectIfBadRequest();
}


