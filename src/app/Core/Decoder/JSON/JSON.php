<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/SQL-Aufgaben
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Core\Decoder\JSON;  

class JSON extends JSONReader
{
    /**
     * Start the JSON Reader
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the json exercises.
     * 
     * @method array App\Core\Decoder\JSON\JSONReader::GetJsonData()
     *
     * @param string $argument
     * 
     * @return void
     */
    public function GetData(string $argument = null): ?array
    {
        if(is_null($argument) || empty($argument)){
            return null;
        }
        
        return $this->GetJsonData($argument);
    }
}
