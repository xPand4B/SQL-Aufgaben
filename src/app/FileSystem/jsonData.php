<?php
/**
 * Return JSON Data
 * 
 * @author Eric Heinzl <xpand.4beatz@gmail.com>
 */

namespace App\FileSystem;

use App\FileSystem\JSONDecoder as Decoder;

class JSONData extends Decoder
{
    /**
     * Call App\FileSystem\JSONDecoder::__construct Method
     */
    public function __construct()
    {
        parent::__construct(
            "../../exercises.json"
        );
    }

    /**
     * Get Topics
     *
     * @return App\FileSystem\JSONDecoder $topics
     */
    public function Topics(): array
    {
        return $this->topics;
    }

    /**
     * Get Topics
     *
     * @return App\FileSystem\JSONDecoder $topics
     */
    public function Dates(): string
    {
        $position = array_search($_GET['url'], $this->Topics());

        if($this->dates[$position]){
            return $this->dates[$position];
        }else{
            return '';
        }
    }

    /**
     * Get Databases
     *
     * @return App\FileSystem\JSONDecoder $databases
     */
    public function Databases(): array
    {
        return $this->databases;
    }

    
    public function CurrentDatabase(): string
    {
        $position = array_search($_GET['url'], $this->Topics());

        return $this->Databases()[$position];
    }

    /**
     * Get Exercises
     *
     * @return App\FileSystem\JSONDecoder $exercises
     */
    public function Exercises(): array
    {
        return $this->exercises;
    }

    /**
     * Get Tableheads
     *
     * @return App\FileSystem\JSONDecoder $tableHeads
     */
    public function TableHeads(): array
    {
        return $this->tableHeads;
    }

    /**
     * Get Queries
     *
     * @return App\FileSystem\JSONDecoder $queries
     */
    public function Queries(): array
    {
        return $this->queries;
    }

    /**
     * Get number of exervises
     *
     * @return App\FileSystem\JSONDecoder
     */
    public function ExerciseCount(): array
    {
        return $this->exerciseCount;
    }
}