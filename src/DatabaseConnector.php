<style type="text/css">
.tabela  {border-collapse:collapse;border-spacing:0;border-color:#ccc;}
.tabela td{font-family:Arial, sans-serif;font-size:14px;padding:5px 20px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;border-top-width:1px;border-bottom-width:1px;}
.tabela th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 20px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;border-top-width:1px;border-bottom-width:1px;}
.tabela .tabela-pdr{vertical-align:top}
</style>
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
