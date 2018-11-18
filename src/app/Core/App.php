<?php
/**
 * Core App Class
 * 
 * @author Eric Heinzl <xpand.4beatz@gmail.com>
 */

namespace App\Core;

use App\Database\Database;
use App\FileSystem\JSONData;
use App\View\ViewLoader as View;

class App
{
    /**
     * @var App\FileSystem\JSONData $JSON
     */
    private $JSON;
    /**
     * @var App\Database\Database $DB
     */
    private $DB;

    /**
     * Initialize json Decoding and View rendering
     */    
    public function __construct()
    {
        // Get JSON Data
        $this->JSON = new JSONData;
        // Render Final View
        $this->CreateView();
    }

    /**
     * Create View
     *
     * @return View
     */
    private function CreateView()
    {
        // Check if there is a valid topic parameter inside the url
        if($this->IsValidUrlParameter()){
            // Get array positon for current topic
            $position = array_search($_GET['url'], $this->JSON->Topics());

            $this->DB = new Database(
                $this->JSON->CurrentDatabase(),
                $this->JSON->Queries()[$position]
            );

            View::render('pages.main', [
                'topics'        => $this->JSON->Topics(),
                'date'         => $this->JSON->Dates(),
                'exercises'     => $this->JSON->Exercises()[$position],
                'exerciseCount' => $this->JSON->ExerciseCount()[$position],
                'tableHeads'    => $this->JSON->TableHeads()[$position],
                'queries'       => $this->JSON->Queries()[$position],
                'rows'          => $this->DB->GetResults(),
            ]);
             
        }else{
            View::render('pages.home', [
                'topics'        => $this->JSON->Topics(),
            ]);
        }
    }

    /**
     * Check if there is a valid topic parameter inside the url
     *
     * @return boolean IsValidUrlParameter
     */
    private function IsValidUrlParameter()
    {
        if(isset($_GET['url']) && in_array($_GET['url'], $this->JSON->Topics())){
            return true;
        }
        return false;
    }
}