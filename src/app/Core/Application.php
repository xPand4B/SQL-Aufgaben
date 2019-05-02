<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/SQL-Aufgaben
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Core;

use App\Database\Database;
use App\Core\FileSystem\EnvironmentVariables;
use App\Core\Decoder\JSON\JSON;

class Application
{
    /**
     * The application version.
     * 
     * @var string
     */
    private const VERSION = '2.0.0';

    /**
     * Creates a new Application instance.
     */
    public function __construct()
    {
        $this->bootstrapSelf();
    }

    /**
     * Bootstrap the application.
     *
     * @return void
     */
    private function bootstrapSelf(): void
    {
        EnvironmentVariables::load();

        // Load JSON Data
        $JSON = new JSON();

        // $DB = new Database('', []);

        if(! isset($_GET['url'])){
            View('pages.home', [
                'topics'     => $JSON->GetData('topics')
            ]);

        // }else if(! in_array($_GET['url'], json('topics'))){
        //     View('pages.404');

        }else{   
            View('pages.exercise', [
                // 'topics'     => json('topics'),
                // 'date'       => json('topic.date'),
                // 'exercises'  => json('topic.exercises'),
                // 'tableHeads' => json('topic.exercise.tablehead'),
                // 'queries'    => json('topic.queries'),
                // 'results'    => $this->DB->GetResults()
            ]);
        }
    }

    /**
     * Get the version number of the pplication.
     *
     * @return string
     */
    public function version(): string
    {
        return static::VERSION;
    }
}
