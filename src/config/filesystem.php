<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/SQL-Aufgaben
 * 
 * @copyright 2019 Eric Heinzl
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Environment File
    |--------------------------------------------------------------------------
    |
    | These values set the file path and name forthe .env File.
    |
    */

    'environment_path' => root_path(),
    'environment_file' => '.env',

    /*
    |--------------------------------------------------------------------------
    | Exercises File
    |--------------------------------------------------------------------------
    |
    | These values set the file name and type for all exercises. All supported
    | file-types are listed bellow.
    |
    */

    'exercise_path' => root_path(),
    'exercise_name' => 'exercises',
    'exercise_type' => 'json',

    /*
    |--------------------------------------------------------------------------
    | Supported Exercise File-Types
    |--------------------------------------------------------------------------
    |
    | This value contains all supported file types/extensions that the
    | application is able to read.
    | 
    | More are coming soon!
    | 
    | !!! Do not change the following config !!!
    |
    */
    'supported_exercise_file_types' => [
        'json', 
    ],
];
