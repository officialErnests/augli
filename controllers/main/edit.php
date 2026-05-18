<?php

$pageTitle = "RollOff";
$customStyles = [];
$customScripts = [];


require "validator.php";
if (!Validator::number($_GET["id"], min:1)) {
    redirectIfNotFound();
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (!Validator::string($_POST["name"], 2, 40)) {
        $error["contents"] = "Augļa nosaukumam jābūt starp 2 un 40 rakstāmzīmju garam!";
    }
    if (!isset($error)) {
        $sql_querry = "UPDATE fruits SET name = :name WHERE id = :id";
        $params = ["name" => $_POST["name"], "id" => $_GET["id"]];
        $db->query($sql_querry, $params);
        header("Location: /");
        exit();
    }
    $to_edit = $_POST["name"] ?? "";
}
if (!isset($to_edit)) {
    $sql_querry = "SELECT * FROM fruits WHERE id = :id";
    $params = ["id" => $_GET["id"]];
    $fruits = $db->query($sql_querry, $params)->fetch();
    $to_edit = $fruits["name"];
}
require "./views/main/edit.view.php";