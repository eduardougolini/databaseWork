<?php

/**
 * Description of DatabaseConnector
 *
 * @author eduardo
 */
class DatabaseConnector {
    
    private $db;
    
    public function connect($dbName) {
        $this->db = new mysqli("localhost", "root", "", $dbName);
        
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }
    
    public function closeConnection() {
        $this->db->close();
    }

    public function insert ($table, $data)
    {
        foreach ($data as $key => $value) {
            $cols[] = "`$key`";
            $values[] = '"'.$value.'"';
        }

        $sql = 'INSERT INTO '.$table.' ('.implode(", ", $cols).') VALUES ('.implode(", ",  $values).')';

        $this->db->real_query($sql);
    }
    
    public function select($table, $data) {
        $results = "<table>";
        
        try{
            $query = $this->db->query("SELECT $data FROM $table");
           
            while($rows = $query->fetch_array(MYSQLI_ASSOC)) {
                foreach($rows as $key => $row) {
                    $results = $results . "<tr><td>". $key . "</td><td>" . $row . "</td></tr><br />";

                    if ($key === null || $row == null) {
                        continue;
                    }
                }
                
                $results = $results . "</table><br /><br />";
            }
            
            return $results;
        } catch (Exception $ex) {
            throw new Exception("Deu ruim ao selecionar: $ex");
        }
    }
    
}
