<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/SQL-Aufgaben
 * 
 * @copyright 2019 Eric Heinzl
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
    public static function GetResult(object $conn, string $query): ?array
    {
        if(empty($conn) || empty($query)){
            return null;
        }

        $result = mysqli_query($conn, $query);
        $output = [];

        while($row = mysqli_fetch_row($result)){
            array_push($output, $row);
        }

        return $output;
    }
}
