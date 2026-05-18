<?php

$pageTitle = "RollOff";
$customStyles = [];
$customScripts = [];

require "validator.php";
if (!Validator::number($_GET["id"], min:1)) {
    redirectIfNotFound();
}

$sql_querry = "SELECT * FROM fruits WHERE id = :id";
$params = ["id" => $_GET["id"]];
$fruits = $db->query($sql_querry, $params)->fetch();

if (empty($fruits)) {
    redirectIfNotFound();
}

require "./views/main/show.view.php";