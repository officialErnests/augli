<?php

$pageTitle = "RollOff";
$customStyles = [];
$customScripts = [];

require "validator.php";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (!Validator::string($_POST["name"], 2, 40)) {
        $error["contents"] = "Augļa nosaukumam jābūt starp 2 un 40 rakstāmzīmju garam!";
    }
    if (!isset($error)) {
        $sql_querry = "INSERT INTO fruits(name) VALUES (:name)";
        $params = ["name" => $_POST["name"]];
        $db->query($sql_querry, $params);
        header("Location: /");
        exit();
    }
}

require "./views/main/create.view.php";