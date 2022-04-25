<?php
include "config.php";
$db = new mysqli($config["host"], $config["username"], $config["password"], $config["dbName"]);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
include "functions.php";
include "checkLogin.php";
?>