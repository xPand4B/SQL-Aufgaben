<?php

class Database{
    
    
    private $host       = 'localhost';
    private $user       = 'root';
    private $password   = '';
    private $db_name    = 'BKR_Videoverleih';
    private $conn;


    /**
     * Constructor
     */
    public function __construct(){
        // Connection
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
        // Error check
        if($this->conn->connect_error){
            die('Connection failed: '. $this->conn->connect_error);
            echo 'TEST';
            mysqli_close($this->conn);
            exit();
        }
    }


    /**
     * Get Query and build table
     *
     * @param string $query
     * @param array $tableHead
     *
     * @return void
     */

    public function getResult(string $query = null, array $tableHead = []){
        if(empty($query) || empty($tableHead)){
            echo '<div class="text-danger">No query found.</div>';
            
        }else{
            $result = mysqli_query($this->conn, $query);
            
            echo '<table class="table table-sm table-striped table-hover text-center"> <thead class="thead-dark"> <tr>';

            foreach($tableHead as $headline){
                echo '<th>' . ucfirst($headline) . '</th>';
            }

            echo '</tr> </thead> <tbody>';

            while($row = mysqli_fetch_assoc($result)){            
                echo '<tr>';

                foreach($row as $item){
                    echo '<td>' . $item . '</td>';
                }
                echo '</tr>';
            }

            echo '</tbody> </table>';
        }
    }

    /**
     * Get Dropdown
     *
     * @param string $name
     * @param string $query
     *
     * @return void
     */
    public function getDropdown(string $name = null, string $query = null){
        echo '<label class="col-sm-6 col-form-label">' . $name . '</label>';

        if(empty($query)){
            echo '<div class="text-danger">No query found.</div>';

        }else{
            $result = mysqli_query($this->conn, $query);

            echo '<select class="form-control col-sm-6 js-dropdown" name="' . $name . '"><option value="">...</option>';

            while($row = mysqli_fetch_array($result)){
                echo '<option value="' . $row[0] . '">';
                for($i = 1; $i < sizeof($row); $i++){
                    echo $row[$i] . ' ';
                }
                echo '</option>';
            }
            echo '</select>';
        }
    }
}