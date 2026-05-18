<?php

$pageTitle = "RollOff";
$customStyles = [];
$customScripts = [];

$sql_querry = "SELECT * FROM fruits";
$params = [];

require "validator.php";
if (isset($_GET["search"])) {
    if (!Validator::string($_GET["search"], min:0, max:40)) {
        $error["contents"] = "Augļa nosaukumam jābūt zem 40 rakstāmzīmju garam!";
    }
    if (!isset($error)) {
        $sql_querry .= " WHERE name LIKE :search";
        $params["search"] = "%".$_GET["search"]."%";
    }
}
$fruits = $db->query($sql_querry, $params)->fetchAll();



require "./views/main/index.view.php";