<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/SQL-Aufgaben
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Core\Decoder\JSON;

class JSONReader
{
    /**
     * The json Data
     *
     * @var array $jsonData
     */
    protected $jsonData = [];
    /**
     * The Exercise File
     *
     * @var string $exerciseFile
     */
    private $exerciseFile;

    /**
     * Start Reading the exercise file.
     */
    public function __construct()
    {      
        //Check if exercise_type is supported
        if(! in_array(config('filesystem.exercise_type'), config('filesystem.supported_exercise_file_types'))){
            error([
                    "Check your filesystem config and change the 'exercise_type'."
                ],
                "Your 'exercise_type' isn't supported."
            );
        }

        $this->exerciseFile = config('filesystem.exercise_path').'/'.config('filesystem.exercise_name').'.'.config('filesystem.exercise_type');

        // Check if exercise file exists
        if(!file_exists($this->exerciseFile)){
            error([
                    "Check your filesystem config.",
                    "Exercise file doesn't exist or has been renamed."
                ],
                "Exercise file couldn't be found."
            );
        }

        $this->Decode();
    }

    /**
     * Decode the exercise file.
     *
     * @return void
     */
    private function Decode(): void
    {
        $json = file_get_contents($this->exerciseFile);
        $jsonIterator = json_decode($json, true);
        
        $count = 0;
        
        foreach($jsonIterator as $value => $topic){
            $this->jsonData[$count] = $topic;
            $count++;
        }
    }

    /**
     * Return Json data on a specified position.
     *
     * @param string $argument
     * 
     * @return array|null
     */
    public function GetJsonData(string $argument = null): ?array
    {
        // for($i = 0; $i < sizeof($this->jsonData); $i++){

        // }

        switch{
            case
        }
        return null;
    }
}
