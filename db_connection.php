<?php

$connect = new PDO("mysqli:host=localhost;dbname=todo_list", "root", "");
session_start();
$_SESSION["user_id"] = "1";

?>