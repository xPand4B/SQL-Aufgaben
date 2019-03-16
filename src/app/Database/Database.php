<?php
/**
 * Manage database
 * 
 * @author Eric Heinzl <xpand.4beatz@gmail.com>
 */

namespace App\Database;

use App\Database\ConnectionHandler;
use App\Database\QueryManager;

class Database extends ConnectionHandler
{  
    /**
     * @var array $results
     */
    public $results = [];

    /**
     * Start Connection
     *
     * @param string $db_name
     * @param array $queries
     */
    public function __construct(string $db_name, array $queries)
    {
        $this->CheckConnection();
        
        if($this->SelectDatabase($db_name)){
            $this->RunQueries($queries);
        }
    }

    /**
     * Run Queries and returns data from App\Database\QueryManager::GetResult
     *
     * @param array $queries
     *
     * @return void
     */
    private function RunQueries(array $queries): void
    {
        foreach($queries as $query){
            \array_push($this->results, QueryManager::GetResult($this->conn, $query));
        }
    }

    /**
     * Returns query results
     *
     * @return array $results
     */
    public function GetResults(): array
    {
        return $this->results;
    }
}
