<?php
/**
 * Send Query and return result
 * 
 * @author Eric Heinzl <xpand.4beatz@gmail.com>
 */

namespace App\Database;

class QueryManager
{
    /**
     * Send Query to database and returns result
     *
     * @param object $conn
     * @param string $query
     *
     * @return array
     */
    public static function GetResult(object $conn, string $query)
    {
        if(empty($conn) || empty($query)){
            return null;
        }

        $result = \mysqli_query($conn, $query);
        $output = [];

        while($row = \mysqli_fetch_row($result)){
            \array_push($output, $row);
        }

        return $output;
    }
}
