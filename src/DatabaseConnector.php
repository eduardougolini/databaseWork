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
        
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }
    
    public function closeConnection() {
        $this->db->close();
    }
    
    public function insert($table, $fields, $data) {       
        try {
           $this->db->real_query("INSERT INTO $table ($fields) VALUES($data)");
        } catch (Exception $ex) {
            echo 'deu ruim, ' .$ex->getMessage();
        }
    }
    
    public function select($table, $data) {
        $results = "";
        
        try{
            $query = $this->db->query("SELECT $data FROM $table");
           
            while($rows = $query->fetch_array(MYSQLI_ASSOC)) {
                foreach($rows as $key => $row) {
                    $results = $results . $key . ": " . $row . "<br />";

                    if ($key === null || $row == null) {
                        continue;
                    }
                }
                
                $results = $results . "<br /><br />";
            }
            
            return $results;
        } catch (Exception $ex) {
            throw new Exception("Deu ruim ao selecionar: $ex");
        }
    }
    
}
