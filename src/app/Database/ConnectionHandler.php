<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/SQL-Aufgaben
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Database;

class ConnectionHandler
{
    /**
     * @var mysqli_connect $conn
     */
    protected $conn;

    /**
     * @var string $database
     */
    private $database;

    /**
     * Connect to database
     *
     * @return void
     */
    protected function CheckConnection(): void
    {
        $this->conn = mysqli_connect(
            config('database.connection.mysql.host'),
            config('database.connection.mysql.username'),
            config('database.connection.mysql.password')
        );

        if(!$this->conn){
            error(
                [mysqli_connect_error()],
                'Connection failed.'
            );
        }
    } 

    /**
     * Select Database for connection
     *
     * @param string $db_name
     *
     * @return boolean
     */
    protected function SelectDatabase(string $db_name): bool
    {
        $query = "USE " . $db_name;

        if(! mysqli_query($this->conn, $query)){
            // error(
            //     ['Database ' . $db_name . ' could not be found'],
            //     'Connection failed.'
            // );
            ?>
            <script>
                alert('Connection failed: Database "<?=$db_name?>" could not be found.');
            </script><?php
            return false;
        }

        $this->database = $db_name;
        
        return true;
    }

    /**
     * Close Database connection
     *
     * @return void
     */
    protected function DBClose(): void
    {
        mysqli_close($this->conn);
    }
}
