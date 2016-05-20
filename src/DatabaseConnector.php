<?php

/**
 * Description of DatabaseConnector
 *
 * @author eduardo
 */
class DatabaseConnector {
    
    private $db;
    
    public function connect($dbName) {
        $this->db = new mysqli("127.0.0.1", "root", "root", $dbName);
    }
    
    public function closeConnection() {
        $this->db->close();
    }
    
    public function insert($table, $fields, $data) {
        try{
            mysqli_query($this->db, "INSERT INTO $table ($fields) VALUES($data)");
        } catch (Exception $ex) {
            throw new Exception("Deu ruim ao inserir: $ex");
        }
    }
    
    public function select($table, $data, $whereFilter = "true") {
        try{
            $results = "";
            $query =  mysqli_query($this->db, "SELECT $data FROM $table WHERE $whereFilter");
           
            while($row = mysql_fetch_assoc($query)) {
                $results = $results . $row . "<br />";
            }
            
            return results;
        } catch (Exception $ex) {
            throw new Exception("Deu ruim ao selecionar: $ex");
        }
    }
    
}
