<?php
/**
 * Decodes JSON file
 * 
 * @author Eric Heinzl <xpand.4beatz@gmail.com>
 */

namespace App\FileSystem;

class JSONDecoder
{
    /**
     * @var array $topics
     */
    protected $topics        = [];
    /**
     * @var array $databases
     */
    protected $databases     = [];
    /**
     * @var array $dates
     */
    protected $dates         = [];
    /**
     * @var array $exercises
     */
    protected $exercises     = [];
    /**
     * @var array $exerciseCount
     */
    protected $exerciseCount = [];
    /**
     * @var array $tableHeads
     */
    protected $tableHeads    = [];
    /**
     * @var array $queries
     */
    protected $queries       = [];

    /**
     * Decode JSON file
     *
     * @param string $filepath
     */
    public function __construct(string $filepath)
    {
        $this->Decode($filepath);
    }

    /**
     * Decode JSON exercises
     *
     * @param string $filepath
     * 
     * @return void
     */
    private function Decode(string $filepath): void
    {
        $json = file_get_contents($filepath);
        $jsonIterator = json_decode($json, true);

        // Loop for each topic
        for($i = 0; $i < sizeof($jsonIterator); $i++){
            array_push($this->topics,    ucfirst(strtolower($jsonIterator[$i]['topic'])));
            array_push($this->databases, $jsonIterator[$i]['database']);
            
            if(array_key_exists('date', $jsonIterator[$i])){
                array_push($this->dates, $jsonIterator[$i]['date']); 
            }else{
                array_push($this->dates, null); 
            }

            array_push($this->exerciseCount,  sizeof($jsonIterator[$i]['data']));
            
            // Add array per topic
            array_push($this->exercises,      []);
            array_push($this->tableHeads,     []);
            array_push($this->queries,        []);
            

            // Get information per exercise
            for($j = 0; $j < sizeof($jsonIterator[$i]['data']); $j++){
                array_push($this->exercises[$i],  $jsonIterator[$i]['data'][$j]['exercise']);
                array_push($this->tableHeads[$i], $jsonIterator[$i]['data'][$j]['tableHead']);

                // Query Loop
                $query = '';

                for($k = 0; $k < sizeof($jsonIterator[$i]['data'][$j]['query']); $k++){
                    $query .= $jsonIterator[$i]['data'][$j]['query'][$k] . ' ';
                }
                array_push($this->queries[$i],    $query);
            }
        }
    }
}