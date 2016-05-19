<?php

include "./DatabaseConnector.php";

$type = $_POST['type'];
$table = $_POST['table'];
$fields = $_POST['fields'];
$data = $_POST['data'];

switch ($type) {
    case "insert":
        $database = new DatabaseConnector();
        $database->connect("clinica_db");
        $database->insert($table, $fields, $data);
        $database->closeConnection();
        break;
}