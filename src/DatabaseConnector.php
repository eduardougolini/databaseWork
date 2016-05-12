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
    
    public function select($table, $data, $whereFilter) {
        $results = false;
        $query = $this->db->prepare("SELECT $data FROM $table WHERE $whereFilter");
        $query->execute();
        
        $query->bind_result($results);
        
        if (! $results) {
            throw new Exception("Deu ruim, corram para as colinas!");
        }
        
        return $results;
    }
    
    public function closeConnection() {
        $this->db->close();
    }
    
}
