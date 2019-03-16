<?php
/**
 * Create Database connection
 * 
 * @author Eric Heinzl <xpand.4beatz@gmail.com>
 */

namespace App\Database;

class ConnectionHandler
{
    /**
     * @var array $DB_DATA
     */
    protected $DB_DATA = [];
    /**
     * @var mysqli_connect $conn
     */
    protected $conn;

    /**
     * Connect to database
     *
     * @return void
     */
    protected function CheckConnection(): void
    {
        $this->GetConnectionData();

        $this->conn = \mysqli_connect(
            $this->DB_DATA['host'],
            $this->DB_DATA['username'],
            $this->DB_DATA['password']
        );

        if(!$this->conn){
            die("<br>Connection failed: " . \mysqli_connect_error());
        }
    }

    /**
     * Get Connection Data
     *
     * @return void
     */
    private function GetConnectionData(): void
    {
        $this->DB_DATA = [
            'host'      => \env('DB_HOST'),
            'username'  => \env('DB_USERNAME'),
            'password'  => \env('DB_PASSWORD')
        ];
    }  

    /**
     * Select Database for connection
     *
     * @param string $db_name
     *
     * @return boolean
     */
    protected function SelectDatabase(string $db_name)
    {
        $query = "USE " . $db_name;
        if(!\mysqli_query($this->conn, $query)){
            // die('<br>Connection failed: Database "' . $db_name . '" could not be found.');
            ?>
            <script>
                alert('Connection failed: Database "<?=$db_name?>" could not be found.');
            </script><?php
            return false;
        }else{
            $this->DB_DATA['database'] = $db_name;
        }
        
        return true;
    }

    /**
     * Close Database connection
     *
     * @return void
     */
    protected function DBClose(): void
    {
        \mysqli_close($this->conn);
    }
}
