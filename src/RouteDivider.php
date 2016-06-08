<?php

include "./DatabaseConnector.php";

ini_set ("display_errors", "1");
error_reporting(E_ALL);

$type = isset($_POST['type']) ? $_POST['type'] : NULL;
$table = isset($_POST['table']) ? $_POST['table'] : NULL;
$fields = isset($_POST['fields']) ? $_POST['fields'] : NULL;
$data = isset($_POST['data']) ? $_POST['data'] : NULL;

switch ($type) {
    case "insert":
        $database = new DatabaseConnector();
        $database->connect("clinica_db");
        $database->insert($table, $data);
        $database->closeConnection();
        break;
    case "select":
        $database = new DatabaseConnector();
        $database->connect("clinica_db");
        $query = $database->select($table, $fields);
        $database->closeConnection();
        echo $query;
        break;
    case "selectIds":
        $database = new DatabaseConnector();
        $database->connect("clinica_db");
        $query = $database->selectIds($table);
        $database->closeConnection();
        echo json_encode($query);
        break;
}